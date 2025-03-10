<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();

        return view('Articles.article',compact('categories','articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validated([
           'name'=> 'require',
           'description'=> 'require',
           'category_id'=> 'require',
        ]);

        Article::create($validate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('Articles.update',compact($article));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $article = Article::find($article);
        return view('Articles.update',compact('article'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validate = $request->validated([
            'name'=> 'require',
            'description'=> 'require',
            'category_id'=> 'require',
         ]);
 
         Article::update($validate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Article::delete($article);
    }
}
