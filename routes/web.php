<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('check-auth', [AuthController::class, 'checkAuth'])->name('checkAuth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('test', function () {
    $test = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($test as $index => $item) {
        dump($index .  $item);
    }
});
