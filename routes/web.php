<?php

use App\Http\Controllers\SteamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/steam', [SteamController::class, 'login'])->name('auth.steam');
Route::get('auth/steam/handle', [SteamController::class, 'handle'])->name('auth.steam.handle');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(base_path('routes/admin.php'));
