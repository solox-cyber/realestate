<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

// Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/agent-list', [DashboardController::class, 'agentlist'])->name('agent.list');
Route::get('/agent-new', [DashboardController::class, 'agentnew'])->name('agent.new');
Route::post('/agent-store', [DashboardController::class, 'agentstore'])->name('agent.store');
Route::get('/agents/{id}/edit', [DashboardController::class, 'agentedit'])->name('agents.edit');
Route::put('/agents/update/{id}', [DashboardController::class, 'agentupdate'])->name('agents.update');
Route::delete('/agents/{id}', [DashboardController::class, 'agentdelete'])->name('agents.destroy');

Route::get('/location', [DashboardController::class, 'locationlist'])->name('location.list');
Route::get('/location/new', [DashboardController::class, 'locationnew'])->name('location.new');
Route::post('/location-store', [DashboardController::class, 'locationstore'])->name('location.store');
Route::get('/location/{id}/edit', [DashboardController::class, 'locationedit'])->name('location.edit');
Route::put('/location/{id}', [DashboardController::class, 'locationupdate'])->name('location.update');
Route::delete('/location/{id}', [DashboardController::class, 'locationdestroy'])->name('location.destroy');


Route::get('/listing', [DashboardController::class, 'listinglist'])->name('listing.list');
Route::get('/listing/new', [DashboardController::class, 'listingnew'])->name('listing.new');
Route::post('/listing/store', [DashboardController::class, 'listingstore'])->name('listing.store');
Route::get('/listing/{listing}/edit', [DashboardController::class, 'listingedit'])->name('listing.edit');
Route::put('/listing/{id}', [DashboardController::class, 'listingupdate'])->name('listing.update');
Route::delete('/listing/{listing}', [DashboardController::class, 'listingdestroy'])->name('listing.destroy');

Route::get('/features', [DashboardController::class, 'listinglist'])->name('listing.list');
Route::get('/features/new', [DashboardController::class, 'listingnew'])->name('listing.new');
Route::post('/features/store', [DashboardController::class, 'listingstore'])->name('listing.store');
Route::get('/listing/{listing}/edit', [DashboardController::class, 'listingedit'])->name('listing.edit');
Route::put('/listing/{id}', [DashboardController::class, 'listingupdate'])->name('listing.update');
Route::delete('/listing/{listing}', [DashboardController::class, 'listingdestroy'])->name('listing.destroy');
// });
