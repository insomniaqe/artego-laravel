<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\UserMainController;

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


Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'App\Http\Controllers\UserMainController@logout');
    Route::get('getUserInfoProfile', 'App\Http\Controllers\UserMainController@getUserInfoProfile');

    Route::get('getEvents', 'App\Http\Controllers\UserMainController@getUserEvents');
    Route::get('getNews', 'App\Http\Controllers\UserMainController@getNews');
    Route::post('buyEvent', 'App\Http\Controllers\UserMainController@buyEvent');
    Route::post('updateUserInfo', 'App\Http\Controllers\UserMainController@updateUserInfo');

    //admin
    Route::get('getAdminOrders', 'App\Http\Controllers\UserMainController@getAdminOrders');
    Route::get('getAdminUsers', 'App\Http\Controllers\UserMainController@getAdminUsers');
    Route::post('createNewEvent', 'App\Http\Controllers\UserMainController@createNewEvent');
});

Route::post('authByPassword', 'App\Http\Controllers\UserMainController@authByPassword');
Route::post('signUp', 'App\Http\Controllers\UserMainController@signUp');
