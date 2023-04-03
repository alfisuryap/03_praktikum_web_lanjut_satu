<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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

//Soal No 1
Route::get('/', [HomeController::class, 'home']);

//Soal No 2
Route::prefix('list')->group(function (){
    Route::get('/product', [ProductController::class, 'product']);
    // http://127.0.0.1:8000/list/product
});

//Soal No 3
Route::get('/news/', [NewsController::class, 'News']);

//Soal No 4
Route::prefix('list')->group(function (){
    Route::get('/program', [ProgramController::class, 'program']);
    // http://127.0.0.1:8000/list/program
});
