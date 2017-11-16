<?php

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
    return view('index');
});
// 后台路由
Route::group(['namespace' => 'Admin','middleware'=>'admin_auth'], function () {
    Route::get('/admin/login', function () {
        return view('admin.login'); 
    });

    Route::post('/login_handle','AdminUserController@login');
    Route::get('/admin/logout','AdminUserController@logout');

    Route::get('/admin/index',function(){
	   return view('admin.index');
    });

    Route::get('/admin/article-list','ArticleController@list');
    Route::get('/admin/article-classify','ArticleController@classify');
    Route::post('/admin/add-classify','ArticleController@addClassify');
    Route::get('/admin/article-category-add/{pid}', function ($pid) {
        return view('admin.category-add',['pid'=>$pid]);
    });
});