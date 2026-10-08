<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController as PublicNewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WorshipScheduleController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function (){

    Route::get(
        '/login',
        [AuthController::class, 'showLogin']
    )->name('login');

    Route::post(
        '/login',
        [AuthController::class, 'login']
    )->name('login.process');

});

Route::post(
        '/logout',
        [AuthController::class, 'logout']
    )
    ->middleware('auth')
    ->name('logout');

Route::get(
        '/berita',
        [PublicNewsController::class, 'index']
)->name('news.index');

Route::get(
    '/berita/{news:slug}',
    [PublicNewsController::class, 'show']
)->name('news.show');

// ADMIN

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::get(
            '/',
            [DashboardController::class, 'index']
        )->name('admin.dashboard');
    
        Route::resource(
            'jadwal',
            WorshipScheduleController::class
        )->except(['show']);

        Route::resource(
            'news',
            NewsController::class
        )->except(['show'])
        ->names('admin.news');

});