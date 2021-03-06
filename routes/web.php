<?php

use App\Http\Controllers\BillingPortalController;
use App\Http\Controllers\BoatsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('user/billing-portal', BillingPortalController::class)->name('billing-portal');
    Route::resource('boats', BoatsController::class);
});
