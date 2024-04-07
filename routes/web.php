<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db', function () {
    return view('dashboard');
});

Route::get('/wait1', function () {
    return view('wait');
});

Route::get('/test', function () {
    return view('layout.norm_officer_layout');
});
