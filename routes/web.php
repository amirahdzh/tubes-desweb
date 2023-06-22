<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\InvoiceController;

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

Route::get('/games/search', [GameController::class, 'search'])->name('games.search');

//route ambil game berdasarkan type
Route::get('/{type}', [GameController::class, 'showByType'])->name('games.showByType');

//route buat show detail game
Route::get('/games/{slug}', [GameController::class, 'show'])->name('games.show');

Route::post('/games/{slug}/{token}', [InvoiceController::class, 'show'])->name('invoice');

Route::post('/{invoiceNo}/mark-as-paid', [InvoiceController::class, 'markAsPaid'])->name('mark-as-paid');











