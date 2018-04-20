<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get the newest article
        $articles_new = Article::new();
        //get the most viewed article
        $articles_hot = Article::hot();

        return view('home', compact('articles_new', 'articles_hot'));
    }
}
