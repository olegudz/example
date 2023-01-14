<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function rel_1_1()
    {

        $user = User::find(1);
        dd($user->articles[0]->user->roles[0]->users);
        return 'hhh';
    }

    public function greed_load()
    {

        //$articles = Article::with('user')->get();
        $articles = User::with('roles', 'articles')->get();

        foreach ($articles as $user) {
            echo $user->name . '<br>';
        }

        //dd($articles);
        return null;
    }

    public function edit_relation()
    {
        $user = User::find(1);
        $article = new Article([
            'name' => 'new_name',
            'text' => 'new_text',
            'alias' => 'alias'
        ]);
        $user->articles()->where('id', 6)->update(['name' => '77777777']);
        dd(Article::all());
    }

    public function request_validate(Request $request, User $name) {
        return view('default.contact',['title'=>'Contacts']);
    }
}
