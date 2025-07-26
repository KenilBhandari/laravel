<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;
use App\Models\Stock;

Route::get('/', [StockController::class, 'index'])->name('welcome.stock');

Route::get('/add_stock', function () {
    return view('add_stock');
})->name('add.stock');

Route::post('/add_stock', [StockController::class, 'store'])->name('store.stock');

Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('stock.destroy');


Route::get('/edit_stock/{id}', function ($id) {
  $stock = Stock::findOrFail($id);
  return view('edit_stock', compact('stock'));
})->name('edit.stock');

Route::put('/edit_stock/{id}', [StockController::class, 'update'])->name('stock.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
