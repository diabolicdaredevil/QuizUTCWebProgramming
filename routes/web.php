<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/detail/{id}', [BookController::class, 'detail'])->name('detail');
Route::get('/category/{id}', [BookController::class, 'category'])->name('category');
Route::get('/publisher', [BookController::class, 'publisher'])->name('publisher');
Route::get('/publisherdetail/{id}', [BookController::class, 'publisherdetail'])->name('publisherdetail');
Route::get('/contact', [BookController::class, 'contact'])->name('contact');