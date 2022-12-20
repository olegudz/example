<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Main', 'prefix' => 'olegs'], function () {
    Route::get('/', 'MyMainController')->name('post.index');
    Route::get('/{id_post}', 'ShowMainController')->name('post.show');
    }
);

