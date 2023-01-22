<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);
Route::get('/about',['uses'=>'Admin\AboutController@show','as'=>'about']);
Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article']);
Route::get('/contact',['uses'=>'Admin\ContactController@show','as'=>'contact']);
Route::post('/contact',['uses'=>'Admin\ContactController@store','as'=>'contact']);



Route::get('/test_rel', 'CoreController@rel_1_1')->name('rel.r1_1');
Route::get('/greed_load', 'CoreController@greed_load')->name('greed_load');
Route::get('/greed_load', 'CoreController@rel_1_1')->name('greed_load2');
Route::get('/edit_relation', 'CoreController@edit_relation')->name('edit_relation');
Route::get('/request_validate', 'CoreController@request_validate')->name('request_validate');


Route::group(['namespace' => 'Main', 'prefix' => 'olegs'], function () {
    Route::get('/', 'MyMainController')->name('post.index');
    Route::get('/{id_post}', 'ShowMainController')->name('post.show');
    }
);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function (){
    Route::get('/', 'Admin\AdminController@show')->name('admin_index');
    Route::get('/add/post', 'Admin\AdminPostController@create')->name('admin_add_post');
});


Route::get('/test', 'CoreController@test')->name('test');
Route::get('/test_event', 'CoreController@test_event')->name('test_event');
