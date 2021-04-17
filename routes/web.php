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

Route::get('/appelet', [App\Http\Controllers\AppeletController::class, 'all'])->middleware('auth');
Route::post('/appelet/{Appelet}', [App\Http\Controllers\AppeletController::class, 'update'])->middleware('auth');

Route::post('/search', [App\Http\Controllers\AmbulanceController::class, 'search'])->middleware('auth');
Route::post('/searcharchive', [App\Http\Controllers\ArchivedController::class, 'search'])->middleware('auth');

Route::get('/image/{Ambulance}', [App\Http\Controllers\AmbulanceController::class, 'image'])->middleware('auth');
Route::get('/archiveimage/{Archived}', [App\Http\Controllers\ArchivedController::class, 'image'])->middleware('auth');

Route::post('/deletepic1/{Ambulance}', [App\Http\Controllers\AmbulanceController::class, 'deletepic1'])->middleware('auth');
Route::post('/deletepic2/{Ambulance}', [App\Http\Controllers\AmbulanceController::class, 'deletepic2'])->middleware('auth');


require __DIR__.'/auth.php';
