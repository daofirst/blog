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
    return view('web.index');
});
Route::get('/home', function () {
    return view('web.index');
})->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// 唐小店
Route::group(['prefix' => 'shop', 'namespace' => 'Web'], function () {
    Route::get('/', 'ShopController@index');
});\


/*
|--------------------------------------------------------------------------
| 华为开发测试
|--------------------------------------------------------------------------
*/

// 华为第三方登录
Route::get('/huawei_login', 'HuaWeiLoginController@index');

// 华为第三方授权
Route::any('/huawei/handle_transit', 'HuaWeiLoginController@handleTransit');
