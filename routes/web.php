<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FamilyProfileController;
use App\Http\Controllers\MonitoringReportController;
use App\Http\Controllers\VoltageAndAmpereController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {


    Route::get('/all-record',[HomeController::class, 'get_record'])->name("get.record");

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('fetchall', [UserController::class, 'fetchAll'])->name('fetchAll');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/apartment', [RentController::class, 'index'])->name('apartment.index');
    Route::post('/apartment/store', [RentController::class, 'store'])->name('apartment.store');
    Route::get('/apartment/fetch',[RentController::class, 'fetch'])->name("apartment.fetch");
    Route::get('/apartment/edit', [RentController::class, 'edit'])->name('apartment.edit');
    Route::post('/apartment/update', [RentController::class, 'update'])->name('apartment.update');
    Route::delete('/apartment/delete', [RentController::class, 'delete'])->name('apartment.delete');

    Route::get('/room', [RoomController::class, 'index'])->name('room.index');
    Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');
    Route::get('/room/fetch',[RoomController::class, 'fetch'])->name("room.fetch");
    Route::get('/room/edit', [RoomController::class, 'edit'])->name('room.edit');
    Route::post('/room/update', [RoomController::class, 'update'])->name('room.update');
    // Route::delete('/room/delete', [RoomController::class, 'delete'])->name('room.delete');
    Route::get('/get-available-rooms', [RentController::class, 'getAvailableRooms'])->name('get.available.rooms');

    Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');
    Route::get('/archive/trashed',[ArchiveController::class, 'trashed_data'])->name("archive.trashed");
    Route::delete('/archive/force-delete', [ArchiveController::class, 'delete'])->name('archive.delete');
    Route::post('/archive/force-restore', [ArchiveController::class, 'restore'])->name('archive.restore');

    Route::get('/voltage-ampere', [VoltageAndAmpereController::class, 'index'])->name('voltage_ampere.index');
    Route::post('/voltage-ampere/store', [VoltageAndAmpereController::class, 'store'])->name('voltage_ampere.store');
    Route::get('/voltage-ampere/fetch', [VoltageAndAmpereController::class, 'fetch'])->name('voltage_ampere.fetch');
    Route::get('/voltage-ampere/edit', [VoltageAndAmpereController::class, 'edit'])->name('voltage_ampere.edit');
    Route::post('/voltage-ampere/update', [VoltageAndAmpereController::class, 'update'])->name('voltage_ampere.update');

    Route::get('/monitoring', [MonitoringReportController::class, 'index'])->name('monitoring_report.index');
    Route::post('/monitoring/store', [MonitoringReportController::class, 'store'])->name('monitoring_report.store');
    Route::get('/monitoring/fetch', [MonitoringReportController::class, 'fetch'])->name('monitoring_report.fetch');
    Route::get('/monitoring/edit', [MonitoringReportController::class, 'edit'])->name('monitoring_report.edit');
    

});
