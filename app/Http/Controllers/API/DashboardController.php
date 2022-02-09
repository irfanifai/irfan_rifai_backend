<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//MODEL
use App\Models\Admin\News;
use App\Models\Admin\User;

class DashboardController extends Controller
{
    public function countData()
    {
        $countNews = News::count();
        $countUser = User::count();

        return response()->json(['countNews' => $countNews, 'countUser' => $countUser], 200);
    }
}
