<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

//route kalau misal perlu tampilin semua game
Route::get('/', [GameController::class, 'index'])->name('games.index');

//route ambil game berdasarkan type
Route::get('/{type}', [GameController::class, 'showByType'])->name('games.showByType');

//route buat show detail game
Route::get('/games/{slug}', [GameController::class, 'show'])->name('games.show');

//ini masih error
Route::get('/games/{slug}/{topup_id}/payment-method', [GameController::class, 'paymentMethod'])->name('payment-method');







