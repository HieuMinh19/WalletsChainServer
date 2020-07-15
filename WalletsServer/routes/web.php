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

// Route::get('/login', 'Auth\LoginController@index')->name('login');
// Route::get('/register', 'Auth\RegisterController@index')->name('register');

// home
Route::get('/home', 'Cms\HomeController@index')->name('home');

// auth
Route::get('/register', 'Cms\AuthController@index')->name('register');
Route::get('/login', 'Cms\AuthController@login')->name('login');
Route::post('/action-register', 'Cms\AuthController@register')->name('action-register');
Route::post('/action-login', 'Cms\AuthController@actionlogin')->name('action-login');
Route::post('/logout', 'Cms\AuthController@logout')->name('action-logout');
Route::get('/me', 'Cms\AuthController@me')->name('me');
Route::get('/refresh', 'Cms\AuthController@refresh')->name('refresh');
// Route::group(['middleware' => ['web']], function () {
    //project
    Route::get('listproject', 'Cms\ProjectController@index')->name('listproject');
    Route::get('projectgetall', 'Cms\ProjectController@getall')->name('project.getall');;
    Route::get('newproject', 'Cms\ProjectController@create')->name('newproject');
    Route::post('storeproject', 'Cms\ProjectController@store')->name('project-store');
    Route::get('editproject/{id}', 'Cms\ProjectController@show')->name('editproject');
    Route::post('updateproject', 'Cms\ProjectController@update')->name('project-update');

    //user
    Route::get('listuser', 'Cms\UserController@index')->name('listuser');
    Route::get('getall', 'Cms\UserController@getall')->name('user.getall');
    Route::get('newuser', 'Cms\UserController@create')->name('newuser');
    Route::post('storeuser', 'Cms\UserController@store')->name('storeuser');
    Route::get('edituser', 'Cms\UserController@show')->name('edituser');
    Route::post('updateuser', 'Cms\UserController@update')->name('updateuser');
// });