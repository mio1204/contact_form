<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contact');

// 確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

// DB挿入、メール送信
Route::post('/process', [ContactController::class, 'process'])->name('process');

// 完了ページ
Route::get('/complete', [ContactController::class, 'complete'])->name('complete');

