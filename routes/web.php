<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\Business\HomeController as BusinessHomeController;
use App\Http\Controllers\Dashboard\User\HomeController as UserHomeController;
use App\Http\Controllers\Dashboard\User\WalletController;
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

Route::get('/', function () {
    return view('welcome');
})->name('get-home');

Route::prefix('auth')->group(function () {
    Route::get('register', [AuthController::class, 'getRegister'])->name('get-register');
    Route::post('register', [AuthController::class, 'postRegister'])->name('post-register');
    Route::get('login', [AuthController::class, 'getLogin'])->name('get-login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('post-login');
    Route::get('logout', [AuthController::class, 'getLogout'])->name('get-logout');
});


Route::prefix('dashboard/user')->middleware(['auth', 'is.default.user'])->group(function () {
    Route::get('/', [UserHomeController::class, 'index'])->name('dashboard-user');
    Route::post('create-nin-wallet', [WalletController::class, 'createNinWallet'])->name('create-nin-wallet');
    Route::post('create-bvn-wallet', [WalletController::class, 'createBvnWallet'])->name('create-bvn-wallet');
});

Route::prefix('dashboard/business')->middleware(['auth', 'is.business.user'])->group(function () {
    Route::get('/', [BusinessHomeController::class, 'index'])->name('dashboard-business');
});
