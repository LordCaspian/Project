<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('shop', [\App\Http\Controllers\ShopController::class, 'shop'])->name('shop');
Route::get('cart', [\App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('checkout', [\App\Http\Controllers\CheckController::class, 'checkout'])->name('checkout');
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('detail', [\App\Http\Controllers\DetailController::class, 'detail'])->name('detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
