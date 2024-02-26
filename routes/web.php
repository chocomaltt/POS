<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FnbController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\HomecareController;
use App\Http\Controllers\BabykidController;

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
    return 'Ini Halaman Awal';
});

Route::prefix('category') -> group(function(){
    Route::get('/food-beverage', [FnbController::class,'showProducts']);
    Route::get('/beauty-health', [BeautyController::class,'showProducts']);
    Route::get('/home-care', [HomecareController::class,'showProducts']);
    Route::get('/baby-kid', [BabykidController::class,'showProducts']);
});

Route::get('user/{id}/name/{name}', function($id, $name){
    return "Halo $name  <br> Username mu $id ";
});

Route::get('/transaksi', function(){
    return 'Ini adalah Halaman Penjualan';
});