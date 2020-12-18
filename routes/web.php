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
    return view('homepro');
});
Auth::routes();

Route::get('/Homepro', function () {
    return view('Homepro');
});

Route::get('/Contactpro', function () {
    return view('Contactpro');
});

Route::get('/home', 'HomeController@index');

Route::get('/Akun','AkunController@index');

Route::get('/hp1pro', 'HpController@index');
Route::get('/hp2pro', 'HpController@index2');
Route::get('/hp3pro', 'HpController@index3');
Route::get('/hp4pro', 'HpController@index4');
Route::get('/hp5pro', 'HpController@index5');
Route::get('/hp6pro', 'HpController@index6');
Route::get('/hp7pro', 'HpController@index7');
Route::get('/hp8pro', 'HpController@index8');
