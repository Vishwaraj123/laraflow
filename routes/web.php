<?php

use Illuminate\Support\Facades\Route;
use Vishwaraj\Laraflow\Http\Controllers\FlowController;

Route::middleware(['web'])->group(function () {
    Route::get('flows/create', [FlowController::class, 'create'])->name('laraflow.create');
});
