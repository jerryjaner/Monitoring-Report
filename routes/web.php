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


    
    Route::get('/voltage-ampere', [VoltageAndAmpereController::class, 'index'])->name('voltage_ampere.index');
    Route::post('/voltage-ampere/store', [VoltageAndAmpereController::class, 'store'])->name('voltage_ampere.store');
    Route::get('/voltage-ampere/fetch', [VoltageAndAmpereController::class, 'fetch'])->name('voltage_ampere.fetch');
    Route::get('/voltage-ampere/edit', [VoltageAndAmpereController::class, 'edit'])->name('voltage_ampere.edit');
    Route::post('/voltage-ampere/update', [VoltageAndAmpereController::class, 'update'])->name('voltage_ampere.update');
    Route::delete('/voltage-ampere/delete', [VoltageAndAmpereController::class, 'delete'])->name('voltage_ampere.delete');

    Route::get('/monitoring', [MonitoringReportController::class, 'index'])->name('monitoring_report.index');
    Route::post('/monitoring/store', [MonitoringReportController::class, 'store'])->name('monitoring_report.store');
    Route::get('/monitoring/fetch', [MonitoringReportController::class, 'fetch'])->name('monitoring_report.fetch');
    Route::get('/monitoring/edit', [MonitoringReportController::class, 'edit'])->name('monitoring_report.edit');
    Route::delete('/monitoring/delete', [MonitoringReportController::class, 'delete'])->name('monitoring_report.delete');

});
