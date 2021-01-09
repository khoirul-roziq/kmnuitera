<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\AnggotaController;
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

Route::get('/', [PanelController::class, 'index']);
Route::get('/dashboard', [PanelController::class, 'dashboard']);
Route::get('/keanggotaan', [AnggotaController::class, 'index']);
Route::get('/keuangan', [PanelController::class, 'keuangan']);
Route::get('/formreg', [PanelController::class, 'formreg']);
