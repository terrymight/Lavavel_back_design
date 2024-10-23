<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';

// Route::get('webmail', function () {

//     return view('sysview.form');
// });

// Demo route
// Route::post('/forms', [RegisteredUserController::class, 'store'])->name('forms');
