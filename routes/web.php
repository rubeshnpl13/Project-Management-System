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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('backend/program')->name('backend.program.')->group(function(){
    Route:: get('/trash',[\App\Http\Controllers\backend\ProgramController::class,'trash'])->name('trash');
    Route:: post('/restore/{id} ',[\App\Http\Controllers\backend\ProgramController::class,'restore'])->name('restore');
    Route:: delete ('/force_delete/{id}',[\App\Http\Controllers\backend\ProgramController::class,'permanentDelete'])->name('force_delete');
    Route::get('/create',[\App\Http\Controllers\backend\ProgramController::class,'create'])->name('create');
    Route:: post('',[\App\Http\Controllers\backend\ProgramController::class,'store'])->name('store');
    Route::get('',[\App\Http\Controllers\backend\ProgramController::class,'index'])->name('index');
    Route:: get('/{id}',[\App\Http\Controllers\backend\ProgramController::class,'show'])->name('show');
    Route:: delete('/{id}',[\App\Http\Controllers\backend\ProgramController::class,'destroy'])->name('destroy');
    Route:: get('/{id}/edit',[\App\Http\Controllers\backend\ProgramController::class,'edit'])->name('edit');
    Route:: put('ag/{id}',[\App\Http\Controllers\backend\ProgramController::class,'update'])->name('update');
});
