<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\MeetController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\TiketController;
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


Route::middleware('auth')->group(function (){
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('input-meet',[MeetController::class,'index']);
    Route::post('kirim-meet', [MeetController::class, 'input']);
    Route::get('show-meet',[MeetController::class,'show']);
    Route::get('delete-meet/{id}',[MeetController::class,'delete']);
    Route::get('edit-meet/{id}',[MeetController::class,'edit']);
    Route::post('update-meet/{id}',[MeetController::class,'update']);

    Route::get('input-merch',[MerchController::class,'index']);
    Route::post('kirim-merch', [MerchController::class, 'input']);
    Route::get('show-merch',[MerchController::class,'show']);
    Route::get('delete-merch/{id}',[MerchController::class,'delete']);
    Route::get('edit-merch/{id}',[MerchController::class,'edit']);
    Route::post('update-merch/{id}',[MerchController::class,'update']);

    Route::get('input-tiket',[TiketController::class,'index']);
    Route::post('kirim-tiket', [TiketController::class, 'input']);
    Route::get('show-tiket',[TiketController::class,'show']);
    Route::get('delete-tiket/{id}',[TiketController::class,'delete']);
    Route::get('edit-tiket/{id}',[TiketController::class,'edit']);
    Route::post('update-tiket/{id}',[TiketController::class,'update']);

    Route::post('logout',[LoginController::class,'logout']);

    Route::get('pengaturan',[AkunController::class,'index']);
    Route::post('update-password',[AkunController::class,'update']);
    Route::post('delete',[AkunController::class,'delete']);

});
Route::middleware('guest')->group(function (){
    Route::get('registrasi',[RegistrasiController::class,'index']);
    Route::post('registrasi-user',[RegistrasiController::class,'register']);

    Route::get("/",[LoginController::class,'index'])->name('login');
    Route::post("login",[LoginController::class,'authenticate']);
});
