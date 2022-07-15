<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\UserCollection;
use Auth;

//MODEL
use App\Models\Admin\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->path = storage_path('app/public/avatar/');
    }

    public function index()
    {
        $users = User::where('client_token', Auth::user()->client_token);
        if (request()->search != '') {
            $users = $users->where(function ($query) {
                return $query->where('name', 'LIKE', '%' . request()->search . '%')
                ->orWhere('email', 'LIKE', '%' . request()->search . '%')
                ->orWhere('username', 'LIKE', '%' . request()->search . '%');
            });
        }
        if (request()->rows == 'All'){
            request()->rows = intval(User::count());
        }
        return new UserCollection($users->orderBy(request()->sort, request()->asc)->paginate(request()->rows));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|unique:users,email',
            'photo' => 'required',
            'password' => 'required'
        ]);

        $request['password'] = bcrypt($request->get('password'));

        $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
        \Image::make($request->photo)->save($this->path.$name);
        $request->merge([
            'photo' => $name,
            'client_token' => Auth::user()->client_token
        ]);

        User::create($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function edit($username)
    {
        $user = User::where('client_token', Auth::user()->client_token)->whereUsername($username)->first();
        return response()->json(['status' => 'success', 'data' => $user], 200);
    }

    public function update(Request $request, $username)
    {
        $user = User::where('client_token', Auth::user()->client_token)->whereUsername($username)->first();

        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|string|unique:users,username,'.$user->id,
            'email' => 'required|string|unique:users,email,'.$user->id,
        ]);

        if($request['password']){
            $request['password'] = bcrypt($request->get('password'));
        }

        if ($request->photo != $user->photo) {
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save($this->path.$name);
            $request->merge(['photo' => $name]);
        }

        $user->update($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function destroy($username)
    {
        $user = User::where('client_token', Auth::user()->client_token)->whereUsername($username)->first();
        $user->delete();

        return response()->json(['status' => 'success'], 200);
    }

}
