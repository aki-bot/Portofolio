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
    return view('welcome');
});


Route::group(['prefix' =>'admin','middleware' => 'auth'],function(){
    Route::get('note/add', 'Admin\NoteController@add');
    Route::post('note/create', 'Admin\NoteController@create');
    Route::get('note', 'Admin\NoteController@index');
    Route::get('note/edit', 'Admin\NoteController@edit'); 
    Route::post('note/edit', 'Admin\NoteController@update'); 
    Route::get('note/delete', 'Admin\NoteController@delete');
    Route::get('contact/index','Admin\ContactController@index');
});

//noteの命令コード
Route::get('note/index', 'NoteController@index');
//フロントのビューファイルの命令文
Route::get('profile/index','ProfileController@index');

Route::post('contact/create','ContactController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('like/create','LikesController@create');
