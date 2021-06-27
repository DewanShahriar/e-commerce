<?php

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

Route::get('/', function () {
    return view('frontend.site.index');
});

Route::get('/product-details', function () {
    return view('frontend.site.productDetails');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');

