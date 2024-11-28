<?php

use App\Http\Controllers\Orden_Venta_Controller;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('productos',ProductoController::class);
Route::post('venta',[Orden_Venta_Controller::class,'store'])->name('venta.post');
Route::post('venta/reporte',[Orden_Venta_Controller::class,'obtenerMonto'])->name('venta.reporte');
