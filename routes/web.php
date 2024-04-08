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

Route::get('/home', function () {
    return view('home');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/pcf', function () {
    return view('process_finish');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
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


Route::get('/filter', function () {
    return view('filter');
});

Route::get('/confirm_cancel_booking', function () {
    return view('confirm_cancel_booking');
});


