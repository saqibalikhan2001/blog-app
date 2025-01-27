<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function userArticles()
    {
        $articles = Article::where('added_by', Auth::user()->id)->get();
        return view('articles.userArticles', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->description,
            'added_by' => (Auth::user() != NULL) ? Auth::user()->id : 1,
            'enabled' => ($request->enabled == 0) ? false : true
        ]);
        return redirect()->route('user.articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request)
    {
        $article = Article::where('id', $request->articleId)->first();
        if($article){
            $article->update([
                'title' => $request->title,
                'content' => isset($request->description) ? $request->description : null,
                'enabled' => ($request->enabled == 0) ? false : true
            ]);
        }

        return redirect()->route('user.articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('user.articles');
    }
}
