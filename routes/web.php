<?php

use App\Http\Controllers\Admin\IdeaController;
use App\Http\Controllers\Admin\InternalController;
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

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->name('dashboard');
     Route::resource('skema', 'SkemaController');
     Route::resource('dosen', 'DosenController');
     Route::resource('internal', 'InternalController');
     Route::resource('idea', 'IdeaController');
     Route::resource('camp', 'CampController');

     Route::get('/internal', [InternalController::class, 'index'])->name('internal.index');
     Route::get('/idea', [IdeaController::class, 'index'])->name('idea.index');


    Route::get('/usulan/internal/show/{id}', [InternalController::class, 'show'])->name('usulan.internal.show');
    Route::get('/usulan/idea/show/{id}', [IdeaController::class, 'show'])->name('usulan.idea.show');

    Route::get('/usulan/internal/edit/{id}', [InternalController::class, 'edit'])->name('usulan.internal.edit');
    Route::get('/usulan/idea/edit/{id}', [InternalController::class, 'edit'])->name('usulan.idea.edit');



     Route::get('/usulan/internal/destroy', [InternalController::class, 'destroy'])->name('usulan.internal.destroy');
     Route::get('/usulan/idea/destroy', [IdeaController::class, 'destroy'])->name('usulan.idea.destroy');


     Route::get('/exportdosen',[App\Http\Controllers\Admin\DosenController::class, 'dosenexport' ])->name('exportdosen');

    });


