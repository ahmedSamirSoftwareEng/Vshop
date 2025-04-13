<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RedirectIfAdmin;

//user routes
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//end user routes

//admin routes
// Admin login routes — Only apply RedirectIfAdmin here
Route::group(['prefix' => 'admin', 'middleware' => [RedirectIfAdmin::class]], function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.post');
});

// Authenticated admin routes
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

//end admin routes

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
