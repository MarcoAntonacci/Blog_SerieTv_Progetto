<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;


class PublicController extends Controller
{
    public function home() {
      
        $articles=Article::all();

        return view('welcome', compact('articles'));
    }
    }

