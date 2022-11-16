<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Availability;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\AvailabilityServices;

class AvailabilityController extends Controller
{

    public $availabilityServices;

    public function __construct(AvailabilityServices $availabilityServices){
        $this->availabilityServices = $availabilityServices;
    }

    /** * Availabilities*/
        public function defineAvailability(Request $request){
            $input = $request->all();
            $request->validate(Availability::$rules);
            return $this->availabilityServices->add($input);
        }

        public function showAvailability($id){
            return $this->availabilityServices->show($id);
        }

        public function deleteAvailability($id){
            return $this->availabilityServices->delete($id);
        }

        public function editAvailability(Request $request, $id){
            $input = $request->all();
            return $this->availabilityServices->update($input, $id);
        }

        public function reportAvailability(Request $request, $id){

            $availability = Availability::find($id);
            

            if(empty($availability)){
                return respJson(
                    Response::HTTP_NOT_FOUND,
                    "Not found", 
                    null
                );
            }

            $availability->update($request->all());

            // TODO send Mail
            

            return respJson(
                Response::HTTP_CREATED,
                "Created", 
                $availability
            );
        }
    /** * End Availabilities*/

}
