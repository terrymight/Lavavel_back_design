<?php

use App\Http\Controllers\OptionsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('profile')
    ->name('profile')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('create', 'create')->name('create');
    });

Route::prefix('options')
    ->name('options')
    ->middleware(['auth:sanctum'])
    ->controller(OptionsController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('create', 'create')->name('create');
        Route::get('show', 'show')->name('show');
        Route::put('update', 'update')->name('update');
        Route::delete('destroy', 'destroy')->name('destroy');
    });


Route::middleware(['auth:sanctum'])->get('/test', function () {
    return Auth::authenticate();
});
