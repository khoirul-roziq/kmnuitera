<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\GuestsController;


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


Route::get('/keuangan', [PanelController::class, 'keuangan']);

Route::get('/login', [MembersController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::post('/check', [MembersController::class, 'check']);
Route::get('/logout', [MembersController::class, 'logout']);
Route::get('/dashboard', [MembersController::class, 'dashboard'])->middleware('IsLogged');
Route::get('/members/{member}/editprofile', [MembersController::class, 'editprofile']);
Route::put('/members/{member}', [MembersController::class, 'updateprofile']);

Route::get('/members', [MembersController::class, 'index'])->middleware('IsLogged');
Route::get('/members/create', [MembersController::class, 'create']);
Route::post('/members', [MembersController::class, 'store']);
Route::get('/members/{member}', [MembersController::class, 'show']);
Route::delete('members/{member}', [MembersController::class, 'destroy']);
Route::get('/members/{member}/edit', [MembersController::class, 'edit']);
Route::patch('/members/{member}', [MembersController::class, 'update']);

Route::get('/formreg', [GuestsController::class, 'create']);
Route::post('/formreg', [GuestsController::class, 'store']);
Route::get('/guests', [GuestsController::class, 'index']);
Route::get('/guests/{guest}', [GuestsController::class, 'show']);
Route::delete('guests/{guest}', [GuestsController::class, 'destroy']);
Route::get('/guests/{guest}/edit', [GuestsController::class, 'edit']);
Route::patch('/guests/{guest}', [GuestsController::class, 'update']);
