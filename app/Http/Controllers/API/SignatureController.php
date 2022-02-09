<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\SignatureCollection;
use Auth;

//MODEL
use App\Models\Admin\Signature;

class SignatureController extends Controller
{
    public function __construct()
    {
        //DEFINISIKAN PATH
        // $this->path = storage_path('app/public/avatar/');
    }

    public function index()
    {
        $signature = Signature::where('client_token', Auth::user()->client_token);
        if (request()->search != '') {
            $signature = $signature->where(function ($query) {
                return $query->where('signature_name', 'LIKE', '%' . request()->search . '%')
                ->orWhere('signature_position', 'LIKE', '%' . request()->search . '%');
            });
        }
        if (request()->rows == 'All'){
            request()->rows = intval(Signature::count());
        }
        return new SignatureCollection($signature->orderBy(request()->sort, request()->asc)->paginate(request()->rows));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'signature_name' => 'required|string',
            'signature_position' => 'required|string',
        ]);

        $request->merge([
            'client_token' => Auth::user()->client_token
        ]);

        Signature::create($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function edit($id)
    {
        $signature = Signature::where('client_token', Auth::user()->client_token)->whereId($id)->first();
        return response()->json(['status' => 'success', 'data' => $signature], 200);
    }

    public function update(Request $request, $id)
    {
        $signature = Signature::where('client_token', Auth::user()->client_token)->whereId($id)->first();

        $this->validate($request, [
            'signature_name' => 'required|string',
            'signature_position' => 'required|string',
        ]);

        $signature->update($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function destroy($id)
    {
        $signature = Signature::where('client_token', Auth::user()->client_token)->whereId($id)->first();
        $signature->delete();
        return response()->json(['status' => 'success'], 200);
    }
    
}
