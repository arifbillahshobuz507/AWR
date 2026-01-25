<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    //success json response
    public static function success($msg, $data,$code=200 ): JsonResponse
    {
        return response()->json(['status' => 'success', 'message' => $msg, 'data' => $data, 'code'=> $code /*status code*/ ],$code);
    }
    // failed json response
    public static function error($msg,$error=null,$code=500): JsonResponse
    {
        return response()->json(['status' => 'failed', 'message' => $msg,'errors'=>$error, 'code'=> $code],$code);
    }
//    public static function Out($status, $message, $data, $code): JsonResponse{
//        return response()->json([
//            'status'=>$status,
//            'message'=>$message,
//            'data'=>$data,
//        ],'code'=>$code);
//    }
}
