<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/archive', [NewsController::class, 'all']);

Route::get('/archive/{id}', [NewsController::class, 'archive']);

Route::get('/one/{id}', [NewsController::class, 'viewnews']);

Route::get('/contact', [ContactController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
