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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\RegisterController@index')->name('register');

Route::get('listproject', 'Cms\ProjectController@index')->name('listproject');
Route::get('newproject', 'Cms\ProjectController@create')->name('newproject');
Route::post('editproject', 'Cms\ProjectController@edit')->name('editproject');