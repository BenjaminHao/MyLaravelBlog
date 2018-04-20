<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GrahamCampbell\Markdown\Facades\Markdown;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);

        //markdown to html
        $article->content = Markdown::convertToHtml($article->content);

        //update view
        Article::update_view($id);

        //hot article
        $articles_hot = Article::hot();

        return view('article.show', compact('article', 'articles_hot'));
    }

    public function list()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(10);

        //get hot article
        $articles_hot = Article::hot();

        return view('article.list', compact('articles', 'articles_hot'));
    }

    public function search(Request $request)
    {
        $articles = Article::search($request->key);

        //get hot article
        $articles_hot = Article::hot();

        session()->flash('success', 'success');
        return view('article.list',compact('articles', 'articles_hot'));
    }
}
