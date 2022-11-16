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
    
Route::resource('dashboard/availabilities', App\Http\Controllers\AvailabilityController::class)
    ->names([
        'index' => 'dashboard.availabilities.index',
        'store' => 'dashboard.availabilities.store',
        'show' => 'dashboard.availabilities.show',
        'update' => 'dashboard.availabilities.update',
        'destroy' => 'dashboard.availabilities.destroy',
        'create' => 'dashboard.availabilities.create',
        'edit' => 'dashboard.availabilities.edit'
    ]);

Route::resource('dashboard/catalogs', App\Http\Controllers\CatalogController::class)
    ->names([
        'index' => 'dashboard.catalogs.index',
        'store' => 'dashboard.catalogs.store',
        'show' => 'dashboard.catalogs.show',
        'update' => 'dashboard.catalogs.update',
        'destroy' => 'dashboard.catalogs.destroy',
        'create' => 'dashboard.catalogs.create',
        'edit' => 'dashboard.catalogs.edit'
    ]);

Route::resource('dashboard/service-types', App\Http\Controllers\ServiceTypeController::class)
    ->names([
        'index' => 'dashboard.serviceTypes.index',
        'store' => 'dashboard.serviceTypes.store',
        'show' => 'dashboard.serviceTypes.show',
        'update' => 'dashboard.serviceTypes.update',
        'destroy' => 'dashboard.serviceTypes.destroy',
        'create' => 'dashboard.serviceTypes.create',
        'edit' => 'dashboard.serviceTypes.edit'
    ]);

Route::resource('dashboard/services', App\Http\Controllers\ServiceController::class)
    ->names([
        'index' => 'dashboard.services.index',
        'store' => 'dashboard.services.store',
        'show' => 'dashboard.services.show',
        'update' => 'dashboard.services.update',
        'destroy' => 'dashboard.services.destroy',
        'create' => 'dashboard.services.create',
        'edit' => 'dashboard.services.edit'
    ]);

Route::resource('dashboard/currencies', App\Http\Controllers\CurrencyController::class)
    ->names([
        'index' => 'dashboard.currencies.index',
        'store' => 'dashboard.currencies.store',
        'show' => 'dashboard.currencies.show',
        'update' => 'dashboard.currencies.update',
        'destroy' => 'dashboard.currencies.destroy',
        'create' => 'dashboard.currencies.create',
        'edit' => 'dashboard.currencies.edit'
    ]);

Route::resource('dashboard/rates', App\Http\Controllers\RateController::class)
    ->names([
        'index' => 'dashboard.rates.index',
        'store' => 'dashboard.rates.store',
        'show' => 'dashboard.rates.show',
        'update' => 'dashboard.rates.update',
        'destroy' => 'dashboard.rates.destroy',
        'create' => 'dashboard.rates.create',
        'edit' => 'dashboard.rates.edit'
    ]);

Route::resource('dashboard/adresse-homes', App\Http\Controllers\AdresseHomeController::class)
    ->names([
        'index' => 'dashboard.adresseHomes.index',
        'store' => 'dashboard.adresseHomes.store',
        'show' => 'dashboard.adresseHomes.show',
        'update' => 'dashboard.adresseHomes.update',
        'destroy' => 'dashboard.adresseHomes.destroy',
        'create' => 'dashboard.adresseHomes.create',
        'edit' => 'dashboard.adresseHomes.edit'
    ]);

Route::resource('dashboard/address-desks', App\Http\Controllers\AddressDeskController::class)
    ->names([
        'index' => 'dashboard.addressDesks.index',
        'store' => 'dashboard.addressDesks.store',
        'show' => 'dashboard.addressDesks.show',
        'update' => 'dashboard.addressDesks.update',
        'destroy' => 'dashboard.addressDesks.destroy',
        'create' => 'dashboard.addressDesks.create',
        'edit' => 'dashboard.addressDesks.edit'
    ]);

Route::resource('dashboard/occupations', App\Http\Controllers\OccupationController::class)
    ->names([
        'index' => 'dashboard.occupations.index',
        'store' => 'dashboard.occupations.store',
        'show' => 'dashboard.occupations.show',
        'update' => 'dashboard.occupations.update',
        'destroy' => 'dashboard.occupations.destroy',
        'create' => 'dashboard.occupations.create',
        'edit' => 'dashboard.occupations.edit'
    ]);
Route::resource('dashboard/appointments', App\Http\Controllers\AppointmentController::class)
    ->names([
        'index' => 'dashboard.appointments.index',
        'store' => 'dashboard.appointments.store',
        'show' => 'dashboard.appointments.show',
        'update' => 'dashboard.appointments.update',
        'destroy' => 'dashboard.appointments.destroy',
        'create' => 'dashboard.appointments.create',
        'edit' => 'dashboard.appointments.edit'
    ]);
Route::resource('dashboard/custom-events', App\Http\Controllers\CustomEventController::class)
    ->names([
        'index' => 'dashboard.customEvents.index',
        'store' => 'dashboard.customEvents.store',
        'show' => 'dashboard.customEvents.show',
        'update' => 'dashboard.customEvents.update',
        'destroy' => 'dashboard.customEvents.destroy',
        'create' => 'dashboard.customEvents.create',
        'edit' => 'dashboard.customEvents.edit'
    ]);