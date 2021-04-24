<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class articleController extends Controller
{
    public $article;

    function __construct(article $article)
    {
        $this->article = $article;
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $this->article->create($request->all());
        return view('CodeBase');
    }

    public function edit($editId)
    {
        $articles = $this->article->get($editId);
        return view('article.edit', compact('articles'));
    }

    public function update(Request $request, $id)
    {
        $this->article->edit($id, $request->all());
        return view('CodeBase');
    }

    public function destroy($deleteId)
    {
        $this->article->onesDelete($deleteId);
        return view('CodeBase');
    }
}
