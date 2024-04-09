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
// Route::get('/manage_room', function () {
//     return view('manage_room');
// });
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
Route::get('/examine_edit_room', function () {
    return view('examine_edit_room');
});



Route::post('/manage_room', [RoomController::class, 'storeRoom'])->name('store_room');

Route::get('/add_room',[RoomController::class,'index_size']);

Route::get('/manage_room', [RoomController::class, 'index'])->name('manage_room');
