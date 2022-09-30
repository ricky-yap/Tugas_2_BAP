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

Route::get('/welcome', function () {
    return view('datapribadi');
});

Route::get('/home', function () { //path di address bar, trus href html pakai nama ini TOK
    return view(''); // datapribadi --> nama file di views (datapribadi.blade.php)
});
