<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('user-info', 'UserController@getUserInfo');
});
Route::get('transaction-history', 'UserController@getHistory')->name('transaction_history');
