<?php

use App\Http\Controllers\back\Dashboard;
use App\Http\Controllers\back\Auth;
use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\front\Homepage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\ArticlesController;

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

Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function () {
    Route::get('giris', [AuthController::class, 'login'])->name('login');
    Route::post('giris', [AuthController::class, 'loginPost'])->name('login.post');
});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::get('panel', [Dashboard::class, 'index'])->name('dashboard');
    Route::post('makaleler/sil/{id}', [ArticlesController::class, 'sil'])->name('sil');
    Route::resource('makaleler', ArticlesController::class);
    Route::get('cikis', [AuthController::class, 'logout'])->name('logout');
});
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
