<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\SignatureCollection;
use Auth;

//MODEL
use App\Models\Admin\Bank;

class BankController extends Controller
{
    public function __construct()
    {
        //DEFINISIKAN PATH
        // $this->path = storage_path('app/public/avatar/');
    }

    public function index()
    {
        $bank = Bank::where('client_token', Auth::user()->client_token);
        if (request()->search != '') {
            $bank = $bank->where(function ($query) {
                return $query->where('bank_name', 'LIKE', '%' . request()->search . '%')
                ->orWhere('bank_cabang', 'LIKE', '%' . request()->search . '%')
                ->orWhere('bank_rekening', 'LIKE', '%' . request()->search . '%')
                ->orWhere('bank_rekening_name', 'LIKE', '%' . request()->search . '%');
            });
        }
        if (request()->rows == 'All'){
            request()->rows = intval(Bank::count());
        }
        return new SignatureCollection($bank->orderBy(request()->sort, request()->asc)->paginate(request()->rows));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bank_name' => 'required|string',
            'bank_cabang' => 'required|string',
            'bank_rekening' => 'required|string|unique:admin_bank,bank_rekening',
            'bank_rekening_name' => 'required|string',
        ],[
            'bank_name.required' => 'Bank Name field is required',
            'bank_cabang.required' => 'Branch of Bank field is required',
            'bank_rekening.required' => 'Bank Account No. field is required',
            'bank_rekening_name.required' => 'Bank Account Name field is required'
        ]);

        $request->merge([
            'client_token' => Auth::user()->client_token
        ]);

        Bank::create($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function edit($id)
    {
        $bank = Bank::where('client_token', Auth::user()->client_token)->whereId($id)->first();
        return response()->json(['status' => 'success', 'data' => $bank], 200);
    }

    public function update(Request $request, $id)
    {
        $bank = Bank::where('client_token', Auth::user()->client_token)->whereId($id)->first();

        $this->validate($request, [
            'bank_name' => 'required|string',
            'bank_cabang' => 'required|string',
            'bank_rekening' => 'required|string|unique:admin_bank,bank_rekening,'.$bank->id,
            'bank_rekening_name' => 'required|string',
        ],[
            'bank_name.required' => 'Bank Name field is required',
            'bank_cabang.required' => 'Branch of Bank field is required',
            'bank_rekening.required' => 'Bank Account No. field is required',
            'bank_rekening_name.required' => 'Bank Account Name field is required'
        ]);

        $bank->update($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function destroy($id)
    {
        $bank = Bank::where('client_token', Auth::user()->client_token)->whereId($id)->first();
        $bank->delete();
        return response()->json(['status' => 'success'], 200);
    }
    
}
