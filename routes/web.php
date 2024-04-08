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
    return view('other.home');
});

Route::get('/tracking', function () {
    return view('other.tracking');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('layout.norm_officer_layout');
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

Route::get('/booking', function () {
    return view('other.booking');
});

Route::get('/process_first', function () {
    return view('other.process_first');
});

Route::get('/process_second', function () {
    return view('other.process_second');
});

Route::get('/process_third', function () {
    return view('other.process_third');
});

Route::get('/process_finish', function () {
    return view('other.process_finish');
});

Route::get('/wait', function () {
    return view('other.wait');
});

Route::get('/cancel', function () {
    return view('other.cancel_finish');
});

Route::get('/notfound', function () {
    return view('other.notfound');
});

Route::get('/confirm_cancel_booking', function () {
    return view('confirm_cancel_booking');
});


