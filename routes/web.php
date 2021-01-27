<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventoController;

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

Route::get('/', [EventoController::class, 'index']);
Route::get('/eventos/create', [EventoController::class, 'create'])->middleware('auth');
Route::post('/eventos', [EventoController::class, 'store']);


// Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

// Estou na aula 17

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
