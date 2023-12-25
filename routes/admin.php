<?php

use App\Http\Controllers\Admin\{
    AdminController,
    GroupController,
    ServerController
};
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('dashboard')
    ->as('dashboard.')
    ->group(function () {
        Route::resource('admins', AdminController::class);
        Route::resource('groups', GroupController::class);
        Route::resource('servers', ServerController::class);
});
