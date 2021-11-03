<?php

use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route public -> non authentifié
Route::middleware('guest')->group(function () {
    Route::get('/', [ConnexionController::class, 'redirectLogin'])->name('login.redirect');
    Route::prefix('/public')->group(function () {
        Route::get('/', [ConnexionController::class, 'show'])->name('login.show');
        Route::post('/', [ConnexionController::class, 'login'])->name('login.connect');

        Route::get('/password', [ConnexionController::class, 'showPassword'])->name('password.show');
        Route::post('/password', [ConnexionController::class, 'reset'])->name('password.reset');
    });
});

// Route Auth -> Utilisateur authentifié (via Middleware)
Route::middleware('auth')->group(function () {
    Route::prefix('/auth')->group(function () {
        Route::get('/home', [ConnexionController::class, 'showHome'])->name('home.show');
    });
});
