<?php

use Symfony\Component\HttpFoundation\Response;

function setPhone($dial_code, $phone_number){
    return $dial_code."".$phone_number;
}

function setFullname($firstname, $lastname){
    return $firstname." ".$lastname;
}

function respJson($status,$message, $data){

    return response()->json([
        "status"=> $status,
        "message"=> $message,
        "data"=> $data
    ]);

}

function badReq(){
    return response()->json([
        "status"=> Response::HTTP_BAD_REQUEST,
        "message"=> "Bad Resquest"
    ]);
}

function notFound(){
    return response()->json([
        "status"=> Response::HTTP_NOT_FOUND,
        "message"=> "Not Found"
    ]);
}