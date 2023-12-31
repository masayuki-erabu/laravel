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

Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});

Route::get('book', 'BookController@index');

Route::get('book/add', 'BookController@add');
Route::post('book/add', 'BookController@create');

Route::get('book/edit', 'BookController@edit');
Route::post('book/edit', 'BookController@update');