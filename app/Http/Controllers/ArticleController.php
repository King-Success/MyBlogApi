<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
        return Article::all();
    }


     public function store(Request $request)
    {
        $article = new Article;
        $article->category_id = $request['category_id'];
        $article->title = $request['title'];
        $article->body = $request['body'];
        
        $article->save();
        return response()->json($article, 200);

    }

    public function show(Article $article)
    {
        return $article;
    }


    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }

    public function paginate($recordsCount) {

    }

}
