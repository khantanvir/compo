<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'index'])->name('home');

Route::get('/list', [App\Http\Controllers\VendorController::class, 'list']);

Route::get('list/success', [App\Http\Controllers\VendorController::class, 'success']);
Route::get('list/info', [App\Http\Controllers\VendorController::class, 'info']);
Route::get('list/warning', [App\Http\Controllers\VendorController::class, 'warning']);
Route::get('list/danger', [App\Http\Controllers\VendorController::class, 'danger']);
