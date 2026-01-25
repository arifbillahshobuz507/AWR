<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\JsonResponse;

class JWTToken
{
    public static function CreateToken($userEmail,$id):string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'School Management System',
            'iat' => time(),
            'exp' => time() + 60*60*30,
            'userEmail' => $userEmail,
            'userId' => $id,
        ];
        return JWT::encode($payload, $key, 'HS256');
    }
    public static function CreateTokenForVerify($userEmail, $id):string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'School Management System',
            'iat' => time(),
            'exp' => time() + 60 * 60*60,
            'userEmail' => $userEmail,
            'userId' => $id
        ];
        return JWT::encode($payload, $key, 'HS256');
    }
    public static function VerifyToken($token):JsonResponse
    {
        try {
            if($token == null){
                return ResponseHelper::error('unauthorized', null, 401);
            } else{
                $key = env('JWT_KEY');
                $decode = JWT::decode($token, new Key($key, 'HS256'));
                return ResponseHelper::success('Token verification successful!', $decode);
            }
        } catch (Exception $e) {
            return ResponseHelper::error('unauthorized', null, 401);
        }
    }
}
