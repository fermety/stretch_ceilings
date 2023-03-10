<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/gallary', [MainController::class, 'gallary'])->name('gallary');
Route::get('/company', [MainController::class, 'company'])->name('company');
Route::get('/type', [MainController::class, 'type'])->name('type');
