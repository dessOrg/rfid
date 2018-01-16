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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/setdepart', 'HomeController@department');
Route::post('/userdepart', 'HomeController@update');
Route::get('/deactivate{id}', 'HomeController@deactivate');
Route::get('/card{id}', 'HomeController@cardinfo');
Route::get('/logs', 'HomeController@logs');
Route::get('/editcard{id}', 'HomeController@getcard');
Route::post('/updatecard', 'HomeController@updatecard');
Route::post('/departments/{id}', 'DepartmentController@edit');
Route::get('department/destroy/{id}', 'DepartmentController@destroy');

Route::resource('admin', 'AdminController');
Route::resource('users', 'UserController');

Route::resource('departments', 'DepartmentController');
Route::resource('tags', 'TagController');
Route::resource('cards', 'CardController');
