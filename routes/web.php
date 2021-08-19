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

// Route::get('/', function () {
//     return view('welcome');
// });
// // CRUD
// // メッセージの個別詳細ページ表示
// Route::get('tasklists/{id}', 'TasksController@show');

// // メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('tasklists', 'TasksController@store');

// // メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('tasklists/{id}', 'TasksController@update');

// // メッセージを削除
// Route::delete('tasklists/{id}', 'TasksController@destroy');

// // index: showの補助ページ
// Route::get('tasklists', 'tasksController@index');

Route::get('/', 'TasksController@index');

Route::resource('tasklists', 'TasksController');