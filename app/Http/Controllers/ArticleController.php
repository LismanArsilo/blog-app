<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);

        return view('admin.article.index', ['articles' => $articles]);
    }

    public function viewDetail(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();

        return view('admin.article.detail-article', ['article' => $article]);
    }
}
