<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\NewsCollection;
use Auth;

//MODEL
use App\Models\Admin\News;

class NewsController extends Controller
{
    public function __construct()
    {
        //DEFINISIKAN PATH
        $this->path = storage_path('app/public/avatar/');
    }

    public function index()
    {
        $news = News::with('user')->orderBy(request()->sort, request()->asc);
        if (request()->search != '') {
            $news = $news->where(function ($query) {
                return $query->where('news_title', 'LIKE', '%' . request()->search . '%')
                ->orWhere('news_username', 'LIKE', '%' . request()->search . '%');
            });
        }
        if (request()->rows == 'All'){
            request()->rows = intval(News::count());
        }
        return new NewsCollection($news->paginate(request()->rows));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'news_title' => 'required|string',
            'news_content' => 'required|string',
        ]);

        $request->merge([
            'news_username' => Auth::user()->username,
        ]);

        News::create($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function edit($id)
    {
        $news = News::whereId($id)->first();
        return response()->json(['status' => 'success', 'data' => $news], 200);
    }

    public function update(Request $request, $id)
    {
        $news = News::whereId($id)->first();

        $this->validate($request, [
            'news_title' => 'required|string',
            'news_content' => 'required|string',
        ]);

        $news->update($request->all());
        return response()->json(['status' => 'success'], 200);
    }

    public function destroy($id)
    {
        $news = News::whereId($id)->first();
        $news->delete();
        return response()->json(['status' => 'success'], 200);
    }

}
