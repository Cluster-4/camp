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
    return view('table_room');
});
Route::get('/table_a', function () {
    return view('table_room_a');
});
Route::get('/table_b', function () {
    return view('table_room_b');
});
Route::get('/table_full', function () {
    return view('table_room_full');
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
    return view('layout.system_admin_sidebar');
});
Route::get('/test', function () {
    return view('table_full');
});
