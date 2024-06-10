<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
public function home() {
    $articles = Article::all()->sortDesc();
        return view('home',compact('articles'));
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');

    
    }








}
