<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\WorshipScheduleController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->group(function () {
    
    Route::resource(
        'jadwal',
        WorshipScheduleController::class
    );

});