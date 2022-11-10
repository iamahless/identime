<?php

use App\Http\Controllers\Api\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('user')->group(function () {
    Route::get('{ssn}/nin', [WalletController::class, 'getUserNinDetails'])->name('get-user-nin');
    Route::get('{ssn}/bvn', [WalletController::class, 'getUserBvnDetails'])->name('get-user-nin');
});
