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
    return view('home');
});

Route::get('/about', function () {
    return view('about_me');
});

Route::get('/experiences', function () { //path di address bar, trus href html pakai nama ini TOK
    return view('experiences'); // datapribadi --> nama file di views (datapribadi.blade.php)
});

Route::get('/awards', function () { 
    return view('awards'); 
});

Route::get('/contact', function () { 
    return view('contact'); 
});

Route::get('/lihatKRS', function () { 
    return view('lihatkrs'); 
});

