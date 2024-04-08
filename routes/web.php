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
Route::get('/table', function () {
    return view('tableRoom');
});
Route::get('/edit_room', function () {
    return view('edit_size_room');
});
Route::get('/sidebar_admin_room', function () {
    return view('layout.room_admin_layout');
});
Route::get('/system_admin', function () {
    return view('layout.system_admin_layout');
});
Route::get('/sidebar', function () {
    return view('layout.new_sidebar');
});
