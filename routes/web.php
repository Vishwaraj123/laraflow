<?php

use Illuminate\Support\Facades\Route;
use Vishwaraj\Laraflow\Http\Controllers\FlowController;

Route::middleware(['web'])->group(function () {
    Route::resource('flows', FlowController::class);
});