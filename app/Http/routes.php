<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('yusriyadi');
});
Route::get('/public', function () {
    return "Nama : yusriyadi <br> Nim : 1515015005";
});
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "<h1>Hallo sayang dari $pengguna <h1>";
});
