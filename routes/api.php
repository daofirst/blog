<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('client')->group(function () {

    // 获取博客类别
	Route::any('/blog/get_categories', 'BlogController@getCategories');


	// 获取文章列表
	Route::any('/blog/get_posts', 'BlogController@getPosts');



});

