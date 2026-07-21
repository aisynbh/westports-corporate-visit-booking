<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoomController;

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('bookings.index');
    })->name('dashboard');

    Route::get('/export-pdf', [BookingController::class, 'exportPdf'])
        ->name('export.pdf');

    Route::resource('bookings', BookingController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('rooms', RoomController::class);

});

Route::get('/', function () {
    return redirect()->route('login');
});

require __DIR__.'/auth.php';