<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('news/create', [EditorController::class, 'index'])->name('ck_index');
Route::post('news/post', [EditorController::class, 'store'])->name('ck_post');
Route::post('news/image_upload', [EditorController::class, 'upload'])->name('upload');

Route::get('news/{news_id}', [EditorController::class, 'detailNews'])->name('news.detail');