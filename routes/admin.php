<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'Cache is cleared';
});

Route::prefix('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin-login');
    });
    Route::get('/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('login');
    Route::post('/login/post', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login-post');
    Route::get('/sign-out', [App\Http\Controllers\Admin\AuthController::class, 'signOut'])->name('sign-out');
});
Route::middleware(['AdminGuard', 'locale'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
