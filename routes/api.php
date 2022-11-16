<?php

use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\AvailabilityController;
use App\Http\Controllers\AuthApi\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Auth
Route::post('sign-in',[AuthController::class, "login"]);
Route::post('sign-up',[AuthController::class, "register"]);

Route::group(

    ['middleware' => 'auth:api'], 

    function ($router) {
        
        Route::get('me',[AuthController::class, "me"]);
        Route::post('logout',[AuthController::class, "logout"]);
        Route::post('refresh',[AuthController::class, "refresh"]);

        //Availability
        Route::post('add-availability',[AvailabilityController::class, "defineAvailability"]);
        Route::delete('delete-availability/{id}',[AvailabilityController::class, "deleteAvailability"]);
        Route::patch('edit-availability/{id}',[AvailabilityController::class, "editAvailability"]);
        Route::post('report-availability',[AvailabilityController::class, "reportAvailability"]);

        //Appointment
        Route::post('ask-appointment',[AppointmentController::class, "askAppointment"]);
        Route::post('show-appointment',[AppointmentController::class, "showAppointment"]);
        Route::post('confirm-appointment/{uid}',[AppointmentController::class, "confirmAppointment"]);
        Route::post('cancel-appointment/{uid}',[AppointmentController::class, "cancelAppointment"]);

    }

);

Route::resource('services', App\Http\Controllers\API\ServiceAPIController::class)
    ->except(['create', 'edit']);

Route::resource('cars', App\Http\Controllers\API\CarAPIController::class)
    ->except(['create', 'edit']);