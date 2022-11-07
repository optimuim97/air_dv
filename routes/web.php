<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::resource('availabilities', App\Http\Controllers\AvailabilityController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('dashboard/products', App\Http\Controllers\ProductController::class)
    ->names([
        'index' => 'dashboard.products.index',
        'store' => 'dashboard.products.store',
        'show' => 'dashboard.products.show',
        'update' => 'dashboard.products.update',
        'destroy' => 'dashboard.products.destroy',
        'create' => 'dashboard.products.create',
        'edit' => 'dashboard.products.edit'
    ]);