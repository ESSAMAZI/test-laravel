<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index_news(){
        return view('articles_news');
    }
    public function display(Request $request,$id){
       // return view('ArticleDis',compact('id'));
       $x=6*5;
        return view('ArticleDis',compact('x'));
       // return view('ArticleDis',compact([$x=>'x']));
    }
}
