<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('frontend.home');

Route::get('/shop', ShopController::class)->name('frontend.shop');
Route::get('/product/{id}', [App\Http\Controllers\Frontend\ProductController::class, 'show'])->name('frontend.product.show');
Route::get('/cart', CartController::class)->name('frontend.cart');
Route::get('/checkout', CheckoutController::class)->name('frontend.checkout');
Route::get('/wishlist', WishlistController::class)->name('frontend.wishlist');
Route::get('/contact', ContactController::class)->name('frontend.contact');
Route::get('/about', AboutController::class)->name('frontend.about');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('products', ProductController::class);
        Route::resource('orders', OrderController::class)->only(['index', 'show']);
    });

require __DIR__.'/auth.php';
