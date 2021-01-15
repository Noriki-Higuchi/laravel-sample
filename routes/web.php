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
//ホームページ
Route::get('/', 'HomeController@index')->name('home');
//認証
Auth::routes();
//タスク一覧ページ
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
//フォルダ作成ページ
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
//フォルダ作成処理
Route::post('/folders/create', 'FolderController@create');
//タスク作成ページ
Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
//タスク作成処理
Route::post('/folders/{id}/tasks/create', 'TaskController@create');
//タスク編集画面
Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
//タスク編集処理
Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');
