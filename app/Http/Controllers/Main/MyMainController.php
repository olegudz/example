<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class MyMainController extends Controller
{
    public function __invoke(Request $request)
    {
        dd(Article::all());
        return view('Main.main');
    }
}
