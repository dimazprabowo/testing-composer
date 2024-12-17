<?php

use Dismky\ComposerTesting\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use VendorName\PackageName\Http\Controllers\YourController;

Route::group([
    'namespace' => 'Dismky\ComposerTesting\Http\Controllers',
    'prefix' => 'trigger/', // URL prefix
    // 'middleware' => ['web'] // Middleware yang ingin digunakan
], function () {
    Route::get('/sync', [MainController::class, 'triggerForSync']);
    Route::get('/async', [MainController::class, 'triggerForAsync']);
});