<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Auth
Auth::routes();

//index
Route::get('/', 'HomeController@index')->name('home');

//articles
Route::get('/article/list', 'ArticleController@list')->name('article.list');

//search
Route::get('/article/search', 'ArticleController@search')->name('article.search');

//resource
Route::resource('article', 'ArticleController', ['only' => 'show']);

//backend
Route::group(['middleware' => ['auth'],'namespace' => 'Admin','prefix' => 'admin'],function(){
    //index
    Route::get('/','AdminController@index')->name('admin');

    //articles
    Route::resource('article','ArticleController', ['except' => 'show']);
});
