<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Faker\Provider\ar_EG\Company;

class ArticleController extends Controller
{
    public function store(ArticleRequest $request)
    {
        Article::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'img' => $request->has('img') ? $request->file('img')->store('public') : '/img/pasquale.jpg',
            'body' => $request->input('body'),
        ]);
        return redirect(route('home'))->with('message', 'articolo pubblicato');
    }
    

    public function form() {
        return view('article');
    }
    


public function show(Article $article){

return view('article.show' , compact('article'));
}


}