<?php

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


Route::get('/allrequests', [App\Http\Controllers\AmbulanceController::class, 'all'])->middleware('auth');

Route::get('/create', [App\Http\Controllers\AmbulanceController::class, 'create'])->middleware('auth');
Route::post('/create', [App\Http\Controllers\AmbulanceController::class, 'store'])->middleware('auth');


Route::get('/edit/{Ambulance}', [App\Http\Controllers\AmbulanceController::class, 'edit'])->middleware('auth');
Route::post('/edit/{Ambulance}', [App\Http\Controllers\AmbulanceController::class, 'update'])->middleware('auth');

Route::get('/archive', [App\Http\Controllers\ArchivedController::class, 'all'])->middleware('auth');
Route::post('/archive/{Ambulance}', [App\Http\Controllers\ArchivedController::class, 'archive'])->middleware('auth');
Route::delete('/archive/{Archived}', [App\Http\Controllers\ArchivedController::class, 'delete'])->middleware('auth');

require __DIR__.'/auth.php';
