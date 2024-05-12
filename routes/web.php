<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\frontend\HomeController;
use App\Models\Slider;
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

// frontend routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/all-products', [HomeController::class, 'all_products'])->name('all-products');
Route::get('products/{product}', [HomeController::class, 'product'])->name('product-details');

// backend routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::delete('sliders', [SliderController::class, 'destroy'])->name('sliders.destroy');
    Route::put('slider/{slider}/up', [SliderController::class, 'up'])->name('sliders.up');
    Route::put('slider/{slider}/down', [SliderController::class, 'down'])->name('sliders.down');
});

// dashboard login/logout
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('check-auth', [AuthController::class, 'checkAuth'])->name('checkAuth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
