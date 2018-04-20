<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;

class ArticleController extends Controller
{
    //List of article
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(20);
        return view('admin.article.index', compact('articles'));
    }

    //create new article
    public function create()
    {
        return view('admin.article.create');
    }

    //save the article
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'intro' => 'max:200',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
        ]);

        session()->flash('success', 'Created');
        return redirect()->route('article.index');
    }

    //edit article
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    //update article
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'intro' => 'max:200',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
        ]);

        session()->flash('success', 'Your Article Has Been Successfully Saved.');
        return back();
    }

    // delete article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('success', 'Your Article Has Been Successfully Deleted.');
        return back();
    }
}
