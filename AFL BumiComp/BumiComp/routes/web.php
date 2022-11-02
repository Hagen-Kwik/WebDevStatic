<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allControllers;

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


Route::get('/', [allControllers::class, 'homeFunc']);

Route::get('/tentangkita', [allControllers::class, 'aboutFunc']);

Route::get('/laptop&pc', [allControllers::class, 'laptopFunc']);

Route::get('/harddisk', [allControllers::class, 'harddiskFunc']);

Route::get('/printer', [allControllers::class, 'printerFunc']);



