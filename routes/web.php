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


// タイムライン表示ページ
Route::get('/timeline','TimelineController@index')->name('timeline.index');
// つぶやき投稿
Route::post('/timeline','TimelineController@up');
// つぶやき削除
Route::delete('/timeline','TimelineController@destroy');

// ユーザー一覧表示
Route::get('/users','UsersController@index')->name('users.index');

// プロフィールを更新する
Route::put('/profile','ProfileController@update');
// アバター・プロフィール登録
Route::post('/profile','ProfileController@store');

// フォロー・フォロワー一覧表示
Route::get('/follower','FollowerController@index')->name('follower.index');
// フォロー
Route::post('/follower','FollowerController@store');
// フォロー解除
Route::delete('/follower','FollowerController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
