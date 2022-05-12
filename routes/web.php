<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use App\Models\Reservation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function(){
    Route::get('',[AdminController::class,'index'])->name('index');
    Route::resource('patients',PatientController::class);
    Route::resource('payments',PaymentController::class);
    Route::resource('reservations',ReservationController::class);
});

Route::get('/', function () {
    return view('welcome');
});
