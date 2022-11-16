<?php

namespace App\Services;

use App\Models\Appointment;
use Symfony\Component\HttpFoundation\Response;

class AppointmentServices{
    
    public function ask($input){
        $appointment = Appointment::create($input);
        return respJson(Response::HTTP_CREATED, "Created", $appointment);
    }

    public function confirm($uid){
        $appointment = Appointment::where("unique_id",$uid)->first();

        if(empty($appointment)){
            return notFound();
        }

        $appointment->is_confirmed = true;
        $appointment->save();

        return respJson(
            Response::HTTP_OK, 
            "Confirmed",
            $appointment
        );


        return respJson(Response::HTTP_OK, 'Confirmed', $appointment);
    }

    public function cancel($uid){
        $appointment = Appointment::where('unique_id', $uid)->first();

        if(empty($appointment)){
            return notFound();
        }

        $appointment->is_confirmed = false;
        $appointment->is_cancel = true;
        $appointment->save();

        return respJson(
            Response::HTTP_OK, 
            "Canceled",
            $appointment
        );

    }

    public function show($uid){

        $appointment = Appointment::where('unique_id', $uid)->first();

        if(empty($appointment)){
            return notFound();
        }

        $appointment->is_confirmed = true;
        $appointment->save();

        return respJson(
            Response::HTTP_OK, 
            "Details",
            $appointment
        );
    }

}