<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Services\AppointmentServices;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public $appointmentServices;

    public function __construct(AppointmentServices $appointmentServices) 
    {
        $this->appointmentServices = $appointmentServices;
    }

    public function askAppointment(Request $request){
        $input = $request->all();
        $request->validate(Appointment::$rules);

        return $this->appointmentServices->ask($input);
    }

    public function confirmAppointment($uid){
        
        return $this->appointmentServices->confirm($uid);
    }

    //TODO Report Appointment
    public function reportAppointement(){

    }

    public function cancelAppointment($uid){
       return $this->appointmentServices->cancel($uid);
    }

}
