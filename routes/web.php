<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomBookingController;
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
Route::get('/test', function () {
    return view('layout.norm_officer_layout');
});
Route::get('/approve', [RoomBookingController::class, 'index'])->name('approvement');
