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
    return redirect('site');
    //return view('frontend.site.index');
});


Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('site');
Route::get('/product-detail', [App\Http\Controllers\SiteController::class, 'productDetail'])->name('site.product.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin controller
Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
Route::get('admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
Route::post('admin/profile-update', [App\Http\Controllers\AdminController::class, 'profileUpdate'])->name('admin.profile.update');
Route::post('admin/password-update', [App\Http\Controllers\AdminController::class, 'passwordUpdate'])->name('admin.password.update');
Route::post('admin/profilephoto-update', [App\Http\Controllers\AdminController::class, 'profilePhotoUpdate'])->name('admin.profilephoto.update');
