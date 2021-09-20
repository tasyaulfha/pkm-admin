<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
->name('dashboard');

Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');
     Route::resource('usulan', 'UsulanController');
     Route::resource('skema', 'SkemaController');
     Route::resource('dosen', 'DosenController');
     Route::get('/exportdosen',[App\Http\Controllers\Admin\DosenController::class, 'dosenexport' ])->name('exportdosen');
     Route::post('/importdosen',[App\Http\Controllers\Admin\DosenController::class, 'dosenimport' ])->name('importdosen');

    });


