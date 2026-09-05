<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;

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


Auth::routes();

Route::get('/fix-config', function () {

    try {
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');

        return '✔ Limpieza completada correctamente.';
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [HomeController::class, 'about'])->name('about');
Route::get('/tienda', [StoreController::class, 'index'])->name('tienda');
Route::get('/carrito', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::middleware('auth')->group(function () {

    Route::get('/mi-perfil', [ProfileController::class, 'index'])
        ->name('profile');

    Route::get('/mis-pedidos', [OrderController::class, 'index'])
        ->name('orders');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
