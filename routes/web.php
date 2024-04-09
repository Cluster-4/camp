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

Route::get('/manage_room', function () {
    return view('manage_room');
});

Route::get('/edit_room', function () {
    return view('edit_room');
});

Route::post('/manage_room', [RoomController::class, 'storeRoom'])->name('store_room');

Route::get('/add_room',[RoomController::class,'index_size_add']);

Route::get('/edit_room',[RoomController::class,'index_size_edit']);

Route::get('/manage_room', [RoomController::class, 'index'])->name('manage_room');

Route::delete('/manage_room/{id}', [RoomController::class, 'deleteRoom'])->name('delete_room');

Route::post('/manage_room/{id}/edit', [RoomController::class, 'updateRoom'])->name('update_room');

Route::get('/manage_room/{id}/edit', [RoomController::class, 'editRoom'])->name('edit_room');
