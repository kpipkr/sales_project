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
    //halaman login
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

//ROUTES Target
Route::get('/target', 'TargetController@index')->name('target');;
Route::post('/updatetarget', 'TargetController@updateTarget')->name('updatetarget');;

Route::get('/capaian', function () {
    return view('capaian');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/tambahcustomer', function () {
    return view('tambahcustomer');
});

Route::get('/detailcustomer', function () {
    return view('detailcustomer');
});