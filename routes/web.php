<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

// ARTICLE
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
Route::get('/article/show{article}', [ArticleController::class,'show'])->name('article.show')->middleware('auth');
Route::get('/article', [ArticleController::class,'form'])->name('article.form')->middleware('auth');
Route::get('/article/update{article}', [ArticleController::class,'update'])->name('article.update')->middleware('auth');