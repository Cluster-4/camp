<?php

use App\Http\Controllers\RoomBookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login_controller;

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

// Login_controller


Route::middleware(['guest'])->group(function () {

    Route::get('/login', [Login_controller::class, 'login_view'])->name('login_view');
    Route::post('/login', [Login_controller::class, 'login_process'])->name('login_process');

    Route::get('/home', [Login_controller::class, 'login_view'])->name('home');



    Route::get('/logout', [Login_controller::class, 'logout']);

});




Route::get('/edit_room', [Login_controller::class, 'viewEditRoom'])->name('viewEditRoom');


Route::middleware(['room_admin_mid'])->group(function () {
    Route::get('/dashboard', [Login_controller::class, 'dashboard_view'])->middleware('room_admin_mid');
});






Route::get('/manage_room', function () {
    return view('manage_room');
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
Route::get('/table_full', function () {
    return view('table_room_full');
});
Route::get('/edit_room', function () {
    return view('edit_room');
});
Route::get('/add_room', function () {
    return view('add_room');
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
Route::get('/approve', [RoomBookingController::class, 'index'])->name('approvement');


// Route::get('/home', function () {
//     return view('other.home');
// });

Route::get('/tracking', function () {
    return view('other.tracking');
});

// });





Route::get('/', function () {
    return view('other/booking');
});




// Route::get('/login', function () {
//     return view('login');
// });


