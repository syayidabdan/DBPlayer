<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[PlayerController::class,'index']);

Route::get('/add',[PlayerController::class,'add']);

Route::post('/store',[PlayerController::class,'store']);

Route::get('/{id}/edit',[PlayerController::class,'edit']);

Route::put('/update/{id}',[PlayerController::class,'update']);

Route::delete('/update/{id}',[PlayerController::class,'destroy']);