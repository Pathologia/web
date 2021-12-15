<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\HistoryActionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\HistoryConnectionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RoleController;
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
    Route::get('/', [ViewController::class, 'redirectLogin'])->name('login.redirect');
    Route::prefix('/public')->group(function () {
        Route::get('/', [ViewController::class, 'show'])->name('login');
        Route::post('/', [ConnexionController::class, 'login'])->name('login.connect');

        Route::get('/password', [ViewController::class, 'showPassword'])->name('password.show');
        Route::post('/password', [UserController::class, 'reset'])->name('password.reset');
    });
});

// Route Auth -> Utilisateur authentifié (via Middleware)
Route::middleware('auth')->group(function () {
    Route::prefix('/auth')->group(function () {
        Route::get('/home', [ViewController::class, 'showHome'])->name('home.show');
        Route::get('/logout', [ConnexionController::class, 'logout'])->name('user.logout');

        Route::get('/resultats', [ResultController::class, 'show'])->name('resultats.show');

        Route::prefix('/user')->group(function () {
            Route::get('/me', [UserController::class, 'show'])->name('user.show');
            Route::put('/me', [UserController::class, 'update'])->name('user.update');
            Route::put('/me/password', [UserController::class, 'updatePassword'])->name('user.password.update');
        });

        Route::prefix('/admin')->group(function () {
            Route::get('/users', [UserController::class, 'create'])->name('users.create');
            Route::post('/users', [UserController::class, 'store'])->name('users.store');

            Route::get('/roles', [RoleController::class, 'show'])->name('roles.show');
            Route::post('/roles', [RoleController::class, 'create'])->name('roles.create');
            Route::put('/roles', [RoleController::class, 'update'])->name('roles.update');
            Route::delete('/roles', [RoleController::class, 'destroy'])->name('roles.destroy');

            Route::prefix('/logs')->group(function () {
            Route::get('/connexions', [HistoryConnectionController::class, 'show'])->name('historyconnections.show');
            Route::get('/activites', [HistoryActionController::class, 'show'])->name('historyactivitys.show');
            });
        });
    });
});

Route::middleware('signed')->group(function(){
    Route::get('public/verify/email/{email}/{id}', [UserController::class, 'emailVerify'])->name('signed.email.verify');
});
