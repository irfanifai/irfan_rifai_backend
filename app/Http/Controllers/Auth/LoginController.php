<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
{
    //Validasi
    $this->validate($request, [
        'username' => 'required|exists:users,username',
        'password' => 'required'
    ]);

    $auth = $request->except(['remember_me']);
    
    //Autentikasi
    if (auth()->attempt($auth, $request->remember_me)) {
        //Generate API Token
        auth()->user()->update(['api_token' => Str::random(40)]);

        return response()->json(['status' => 'success', 'data' => auth()->user(), 'token' => auth()->user()->api_token], 200);
    }

    return response()->json(['status' => 'failed']);
}
}
