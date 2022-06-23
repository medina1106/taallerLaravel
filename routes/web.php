<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WaytopayController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Template.Template');
});

//Rutas para empleado
Route::resource('employee', EmployeeController::class);

//Rutas para forma de pago
Route::resource('waytopay', WaytopayController::class);

//RUta para citas
Route::resource('quote', QuoteController::class);

Route::resource('service',ServiceController::class);

Route::get('/', function(){
    return view('Service.create');
});
