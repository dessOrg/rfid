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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/userdepartment', 'HomeController@department');
Route::get('/red', 'HomeController@red')->name('red');

Route::resource('users', 'UserController');

Route::resource('departments', 'DepartmentController');
