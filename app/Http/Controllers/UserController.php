<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//MODEL
use App\Models\Admin\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $search = $request->keyword == "" ? "%%" : "%$request->keyword%";
        $rows = $request->rows == "All" ? intval(User::count()) : $request->rows;

        $datas = User::where(function ($query) use ($search) {
            return $query->where('name', 'like', $search)->orWhere('email', 'like', $search);
        })->orderBy('name', 'ASC')->paginate($rows);

        return $datas;
    }
}
