<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $articles = Article::latest()->simplepaginate(12);
        return view('welcome', compact('articles'));
    }

    public function about(){
        return view('about');
    }
}
