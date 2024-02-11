<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

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

Route::get('/dbconn',function(){
    return view('dbconn');
});

Route::get('/flights',[FlightController::class,'index'])->name('flights.index');
Route::get('/flights/create',[FlightController::class,'create'])->name('flights.create');
Route::post('/flights',[FlightController::class,'store'])->name('flights.store');
Route::get('/flights/{flight}/edit',[FlightController::class,'edit'])->name('flights.edit');
Route::put('/flights/{flight}/update',[FlightController::class,'update'])->name('flights.update');
Route::delete('/flights/{flight}/destroy',[FlightController::class,'destroy'])->name('flights.destroy');