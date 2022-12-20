<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ShowMainController extends Controller
{
    public function __invoke(Request $request, Article $id_post)
    {
        $res = Article::query()->where('id', 1)->get();
        dd($res[0]);
        return view('Main.main');
    }
}
