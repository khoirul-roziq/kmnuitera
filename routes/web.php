<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\MembersController;
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
Route::get('/keuangan', [PanelController::class, 'keuangan']);
Route::get('/formreg', [PanelController::class, 'formreg']);
Route::get('/members', [MembersController::class, 'index']);
Route::get('/members/create', [MembersController::class, 'create']);
Route::post('/members', [MembersController::class, 'store']);
Route::get('/members/{member}', [MembersController::class, 'show']);
Route::delete('members/{member}', [MembersController::class, 'destroy']);
Route::get('/members/{member}/edit', [MembersController::class, 'edit']);
Route::patch('/members/{member}', [MembersController::class, 'update']);
