<?php

use App\Http\Controllers\RoomBookingController;
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
Route::get('/manage_room', function () {
    return view('manage_room');
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

