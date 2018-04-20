<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // the articles database
    protected $table = 'articles';

    // able to fill
    protected $fillable = [
        'title', 'intro', 'content',
    ];

    // update view numbers
    static public function update_view($id)
    {
        $article = Article::findOrFail($id);
        $article->view += $article->view;
        $article->update([
            'view' => $article->view,
        ]);
    }

    // search articles
    static public function search($key)
    {
        $article = Article::where('title', 'like', '%'.$key.'%')->paginate(10);
        return $article;
    }

    // the new articles
    static public function new()
    {
        $articles = Article::orderBy('created_at','desc')->take(5)->get();

        return $articles;
    }

    // the most viewed article
    static public function hot()
    {
        $articles = Article::orderBy('view','desc')->take(5)->get();

        return $articles;
    }
}
