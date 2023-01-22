<?php

namespace App\Http\Controllers;

use App\Events\onAddArticleEvent;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;

class CoreController extends Controller
{
    public function rel_1_1()
    {
        if (Gate::denies('myRule')) {
            return response('denies');
        }
        $user = User::find(1);
      //  dd($user->articles[0]->user->roles[0]->users);
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

    public function test(Request $request){
        print_r($request->session()->all());
        echo $request->session()->get('_previous', 'vvvvvvvv')['url'];
        return response('123');
    }

    public function test_event(){
        //onAddArticleEvent::dispatch(Auth::user(), Article::find(6));
        //event( new onAddArticleEvent(Auth::user(), Article::find(6)) );
        Article::create([
            'name' => 'new_name2',
            'text' => 'new_text2',
            'alias' => 'alias2']);
    }
}
