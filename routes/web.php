<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'landing'])->name('landing');

Route::get('/about-us', [MainController::class, 'about'])->name('about');

Route::get('/shop', [MainController::class, 'shop'])->name('shop');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/sneaker/{id}', [MainController::class, 'sneaker'])->name('sneaker');

