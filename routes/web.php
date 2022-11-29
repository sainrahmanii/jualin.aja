<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\ProdukController;
use App\Http\Controllers\Dashboard\ProfilController;
use App\Http\Controllers\Dashboard\PesananController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\BelanjaanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [SiteController::class, 'home'])->name('beranda.utama');
Route::resource('/market', MarketController::class);

Route::middleware('guest')->group(function () {

    // socialite
    Route::get('/masuk', [AuthController::class, 'login'])->name('sign-in');
    Route::get('/daftar', [AuthController::class, 'signup'])->name('sign-up');

    Route::get('/auth/google', [AuthController::class, 'google'])->name('user.auth.login');
    Route::get('/auth/google/callback', [AuthController::class, 'HandleProviderCallback'])->name('auth.google.callback');

    Route::get('login/admin', [AuthenticatedSessionController::class, 'create'])->name('login');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/dashboard')->name('dashboard.')->group(function()
    {
        Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::resource('produk', ProdukController::class);
        Route::resource('pesanan', PesananController::class);
        Route::resource('belanjaan', BelanjaanController::class);
        Route::resource('profil', ProfilController::class);

        Route::prefix('admin')->name('admin.')->group(function()
        {
            Route::resource('category', CategoryController::class);
        });
    });

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
