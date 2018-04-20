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

//首页
Route::get('/', 'HomeController@index')->name('home');

//文章列表页
Route::get('/article/list', 'ArticleController@list')->name('article.list');

//文章搜索页
Route::get('/article/search', 'ArticleController@search')->name('article.search');

//文章资源路由
Route::resource('article', 'ArticleController', ['only' => 'show']);

//管理后台
Route::group(['middleware' => ['auth'],'namespace' => 'Admin','prefix' => 'admin'],function(){
    //首页
    Route::get('/','AdminController@index')->name('admin');

    //文章资源路由
    Route::resource('article','ArticleController', ['except' => 'show']);
});
