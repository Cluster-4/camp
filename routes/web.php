<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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
    return view('manage_room');
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
    return view('edit_room');
});

Route::get('/setting_size_room', function () {
    return view('setting_size_room');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/edit_size_room', function () {
    return view('edit_size_room');
});
Route::get('/sidebar_admin_room', function () {
    return view('layout.room_admin_layout');
});
Route::get('/system_admin', function () {
    return view('layout.system_admin_layout');
});

// Route::get('/booking', function () {
//     return view('other.booking');
// });

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

Route::get('/process_tracking', function () {
    return view('other.process_tracking');
});

Route::get('/cancel_finish', function () {
    return view('other.cancel_finish');
});

Route::get('/notfound', function () {
    return view('other.notfound');
});

Route::get('/confirm_cancel_booking', function () {
    return view('other.confirm_cancel_booking');
});

Route::get('/home_officer', function () {
    return view('officer.home');
});

Route::get('/tracking_officer', function () {
    return view('officer.tracking');
});

Route::get('/booking_officer', function () {
    return view('officer.booking');
});

Route::post('/manage_room', [RoomController::class, 'storeRoom'])->name('store_room');
Route::get('/add_room',[RoomController::class,'index_size']);
Route::get('/manage_room', [RoomController::class, 'index'])->name('manage_room');

Route::get('/booking', [RoomController::class, 'index_booking'])->name('booking_room');
