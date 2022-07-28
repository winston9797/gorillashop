<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\SiteInfooController;
use App\Models\siteInfoo;
use App\Http\Controllers\HomeShowController;
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


Route::resource('/', HomeShowController::class);

Route::resource('/admin', PostController::class)->middleware('auth');
Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/settings', SiteInfooController::class)->middleware('auth');
Route::resource('/pages', PageController::class)->middleware('auth');

Auth::routes();

