<?php

use App\Http\Controllers\MovieController as MovieController;
use App\Http\Controllers\HomeController as HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/movie', [MovieController::class, 'index'])->name('index_movies');
