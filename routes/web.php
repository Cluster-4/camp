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
Route::get('/sidebar_norm_officer', function () {
    return view('layout.norm_officer_layout');
});

Route::get('/manage_account', function () {
    return view('manage_account');
});

Route::get('/add_account', function () {
    return view('add_account');
});
Route::get('/sidebar_admin_room', function () {
    return view('layout.room_admin_layout');
});
Route::get('/system_admin', function () {
    return view('layout.system_admin_layout');
});
Route::get('/sidebar', function () {
    return view('layout.system_admin_sidebar');
});
