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

Route::get('finance','FinanceController@index');
Route::get('finance/create','FinanceController@create')->middleware('auth');
Route::post('finance/create','FinanceController@store');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
