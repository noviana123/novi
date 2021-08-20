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
    return view('dashboard');
});

Route::get('/icons.html', function () {
    return view('icons');
});

Route::get('/map.html', function () {
    return view('map');
});

Route::get('/maps.html', function () {
    return view('maps');
});

Route::get('/notifications.html', function () {
    return view('notifications');
});

Route::get('/rtl.html', function () {
    return view('rtl');
});

Route::get('/tables.html', function () {
    return view('tables');
});

Route::get('/template.html', function () {
    return view('template');
});

Route::get('/typography.html', function () {
    return view('typography');
});

Route::get('/upgrade.html', function () {
    return view('upgrade');
});

Route::get('/user.html', function () {
    return view('user');
});