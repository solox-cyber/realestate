<?php

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
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/community', [HomeController::class, 'community'])->name('community');
Route::get('/agent', [HomeController::class, 'agent'])->name('agent');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/home-details', [HomeController::class, 'homeDetails'])->name('home-details');
