<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/check_add_account', function () {
    return view('add_account');
});

Route::get('/edit_account', function () {
    return view('edit_account');
});

Route::get('/check_edit_account', function () {
    return view('check_edit_account');
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
