<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('store', [CostomerController::class, 'store'])->name('store');
