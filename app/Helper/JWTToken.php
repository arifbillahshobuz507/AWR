<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

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
            'userid' => $id,
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
            'userid' => $id
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function VerifyToken($token):string|object|array
    {
        try {
            if($token == null){
                return "unauthorized";
            } else{
                $key = env('JWT_KEY');
                $decode = JWT::decode($token, new Key($key, 'HS256'));
                return [
                    'email' => $decode->userEmail,
                    'user_id' => $decode->userid
                ];
            }

        } catch (Exception $e) {
            return "unauthorized";
        }
    }
}
