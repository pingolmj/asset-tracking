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

Route::resource('comp','CompController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hardware','HardwareController@index');

Route::post('/addimage','HardwareController@store')->name('addimage');

Route::get('/hardwarepage','HardwareController@display');

Route::get('/editimage/{id}','HardwareController@edit');

Route::put('/updateimage/{id}','HardwareController@update');

Route::get('/deleteimage/{id}','HardwareController@delete');

Route::post('/qr','QRController@index');







 