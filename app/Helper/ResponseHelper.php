<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function Out($status, $message, $data, $code): JsonResponse{
        return response()->json([
            'status'=>$status,
            'message'=>$message,
            'data'=>$data,
        ],$code);
    }
}
