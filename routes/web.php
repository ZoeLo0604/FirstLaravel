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

Route::group(['prefix' => '/sample'], function () {

    Route::get('dashboard', function () {
        return view('pages.dashboard');
    });

    Route::get('tables', 'UserController@showAllUser');

    Route::get('createUser', function () {
        return view('pages.createUser');
    });

    Route::post('/creatingUser', 'UserController@createUser');

});