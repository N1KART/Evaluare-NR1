<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OwnerController;
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
Route::redirect('/', '/users');
Route::get( '/users' , [CarController::class, 'index']) ->name('cars.index');
Route::get('/users/create' , [CarController::class , 'create']) ->name('cars.create');
Route::post('/users' , [CarController::class , 'store'])->name('cars.store');

Route::get( '/users' , [OwnerController::class, 'index']) ->name('owners.index');
Route::get('/users/create' , [OwnerController::class , 'create']) ->name('owners.create');
Route::post('/users' , [OwnerController::class , 'store'])->name('owners.store');

Route::get( '/users' , [MechanicController::class, 'index']) ->name('mechanics.index');
Route::get('/users/create' , [MechanicController::class , 'create']) ->name('mechanics.create');
Route::post('/users' , [MechanicController::class , 'store'])->name('mechanics.store');

Route::controller(CarController::class)->group(function(){
    Route::get('cars', 'index')->name('cars.index');
    Route::get('cars/create','create')->name('cars.create');
    Route::put('cars/{car}/update','update')->name('cars.update');
    Route::delete('cars/{car}', 'destroy')->name('cars.destroy');
});

Route::controller(OwnerController::class)->group(function(){
    Route::get('owners', 'index')->name('owners.index');
    Route::get('owners/create','create')->name('owners.create');
    Route::put('owners/{owner}/update','update')->name('owners.update');
    Route::delete('owners/{owner}', 'destroy')->name('owners.destroy');
});

Route::controller(MechanicController::class)->group(function(){
    Route::get('mechanis', 'index')->name('machanics.index');
    Route::get('mechanis/create','create')->name('machanics.create');
    Route::put('mechanis/{mechanic}/update','update')->name('machanics.update');
    Route::delete('mechanis/{mechanic}', 'destroy')->name('machanics.destroy');
});