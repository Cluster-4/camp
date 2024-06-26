<?php

use App\Http\Controllers\RoomBookingController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\Booking_info_controller;
use App\Http\Controllers\Account_controller;
use Illuminate\Support\Facades\Redirect;
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

// Route::get('/login',[LoginController::class,'viewlogin'])->name('viewlogin');
// Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/home',[LoginController::class,'viewlogin'])->name('home');
Route::get('/edit_room',[LoginController::class,'edit_size_room'])->name('edit_room');
// Route::delete('/logout',[LoginController::class,'logout'])->name('logout');
// Login_controller
Route::get('/login',[Login_controller::class,'login_view'])->name('login');
Route::post('/login',[Login_controller::class,'login_process'])->name('login_process');

Route::get('/home',[Login_controller::class,'login_view'])->name('home');



Route::get('/logout',[Login_controller::class,'logout']);


Route::get('/edit_room',[Login_controller::class,'viewEditRoom'])->name('viewEditRoom');

Route::get('/dashboard',[Login_controller::class,'dashboard_view']);
Route::get('/edit_room',[Login_controller::class,'viewEditRoom']);







    Route::get('/manage_room', function () {
        return view('manage_room');
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
    // Route::get('/add_room', function () {
    //     return view('add_room');
    // });
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
    return view('other.home');
});


Route::get('/home', function () {
    return view('other.home');
});
Route::get('/table', function () {
    return view('table_room');
});

Route::get('/test', function () {
    return view('layout.norm_officer_layout');
});

// Route::get('/edit_room', function () {
//     return view('edit_room');
// });

Route::get('/setting_size_room', function () {
    return view('setting_size_room');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/edit_size_room', function () {
    return view('edit_size_room');
});
Route::get('/manage_account', function () {
    return view('manage_account');
});

Route::get('/sidebar_admin_room', function () {
    return view('layout.room_admin_layout');
});
Route::get('/system_admin', function () {
    return view('layout.system_admin_layout');
});

// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/process_second', function () {
    return view('other.process_second');
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

Route::get('/add_room',[RoomController::class,'index_size_add']);

Route::get('/edit_room',[RoomController::class,'index_size_edit']);

Route::get('/manage_room', [RoomController::class, 'index'])->name('manage_room');

Route::get('/booking', [RoomController::class, 'index_booking'])->name('booking');

Route::get('/process_first', [RoomController::class, 'index_process_first'])->name('process_1');

Route::get('/process_first/{room_id}', [RoomController::class, 'index_process_first'])->name('process_2');

Route::post('/store/booking/information', [Booking_info_controller::class, 'store'])->name('store.booking.information');

Route::delete('/manage_room/{id}', [RoomController::class, 'deleteRoom'])->name('delete_room');

Route::post('/manage_room/{id}/edit', [RoomController::class, 'updateRoom'])->name('update_room');

Route::get('/manage_room/{id}/edit', [RoomController::class, 'editRoom'])->name('edit_room');
Route::post('/store/booking/information', [Booking_info_controller::class, 'store'])->name('store_booking');


// Route::post('/booking',[Booking_info_controller::class, 'filter'])->name ('filter_1');
// Route::get('/booking',[Booking_info_controller::class, 'filter'])->name ('filter');
Route::resource("/manage_account",Account_controller::class);

Route::get('/manage_account/search', [Account_controller::class, 'search'])->name('manage_account.search');



