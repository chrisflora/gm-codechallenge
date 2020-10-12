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

Route::get('/loanapp', 'LoanAppController@index');
Route::get('/loanapp/list', 'LoanAppController@listapps');
Route::get('/loanapp/create', 'LoanAppController@create');
Route::post('/loanapp/create', 'LoanAppController@store');
