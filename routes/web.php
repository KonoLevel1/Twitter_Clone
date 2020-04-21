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

// タイムラインページを表示する
Route::get('/timeline','TimelineController@index')->name('timeline.index');
// つぶやき投稿
Route::post('/timeline','TimelineController@tweet');
// つぶやき削除
Route::delete('/timeline/{tweet_id}','TimelineController@destroy');

// ユーザー一覧表示
Route::get('/users','UsersController@index')->name('users.index');
// ユーザー一覧表示
Route::get('/users/{user_id}','UsersController@show')->name('users.show');

// プロフィール更新
Route::post('/profile','ProfileController@update');

// フォロワー一覧画面
Route::get('/follower','FollowerController@index');

// フォロー一覧画面
Route::get('/follow','FollowController@index');
// フォロー
Route::post('/follow/{user_id}','FollowController@follow');
// フォロー解除
Route::delete('/follow/{user_id}','FollowController@destroy');


Route::get('/',function(){
    return ('TEST');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
