<?php

use App\Http\Controllers\front\Homepage;
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

/*
|--------------------------------------------------------------------------
| Back Web Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Front Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [Homepage::class, 'index'])->name('homepage');
Route::get('/m/{slug}', [Homepage::class, 'single'])->name('single');
Route::get('/kategori/{category}', [Homepage::class, 'category'])->name('category');
Route::get('/s/{sayfa}', [Homepage::class, 'page'])->name('page');
Route::post('/m/{slug}/comment', [Homepage::class, 'comment_save'])->name('comment_save');
Route::post('/m/{slug}/comment-reply', [Homepage::class, 'comment_reply_save'])->name('comment_reply_save');
