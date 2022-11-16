<?php

namespace App\Services;

use App\Models\Availability;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class AvailabilityServices{
    public function add($input){
        $input['user_id'] = auth('api')->user()->id;
        $input['start_time'] = Carbon::parse($input['start_time']);
        $input['end_time'] = Carbon::parse($input['end_time']);
        
        $availability = new Availability();
        $availability->start_date = $input['start_date'];
        $availability->end_date = $input['end_date'];
        $availability->start_time_date = $input['start_time_date'];
        $availability->start_time = $input['start_time'];
        $availability->end_time_date = $input['end_time_date'];
        $availability->end_time = $input['end_time'];
        $availability->user_id = $input['user_id'];
        $availability->save();

        // TODO send Mail

        return respJson(
            Response::HTTP_CREATED,
            "Created", 
            $availability
        );
    }

    public function show($id){
        $availability = Availability::find($id);

        if(empty($availability)){
            return notFound();
        }

        return respJson(
            Response::HTTP_FOUND,
            "Details", 
            $availability
        );
    }

    public function delete($id){
        $availability = Availability::find($id);

        if(empty($availability)){
            return notFound();
        }

        $availability->delete();

        // TODO send Mail

        return respJson(
            Response::HTTP_NO_CONTENT,
            "Deleted", 
            $availability
        );
    }

    public function update($input, $id){
        $availability = Availability::find($id);
        
        if(empty($availability)){
            return notFound();
        }

        $input['start_time'] = Carbon::parse($input['start_time']);
        $input['end_time'] = Carbon::parse($input['end_time']);
        

        $availability->update($input);

        // TODO send Mail

        return respJson(
            Response::HTTP_OK,
            "updated", 
            $availability
        );
    }

}