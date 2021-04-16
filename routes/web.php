<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ArticleController::class, 'home'])->name('home');
Route::get('/dettaglio/{article}', [ArticleController::class,'show'])->name('dettaglio');
Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');
Route::get('/review/create',[ReviewController::class, 'create'])->name('review.create');
Route::post('/review/store',[ReviewController::class, 'store'])->name('review.store');
Route::get('/review/index',[ReviewController::class, 'index'])->name('review.index');
Route::get('/review/show/{review}',[ReviewController::class, 'show'])->name('review.show');