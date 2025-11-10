<?php

namespace App\Http\Controllers\API;

use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //Create User
    public function registration(Request $request):JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return ResponseHelper::Out('failed', 'Validation Failed', $validator->errors(), 422);
            }
            $user = User::create([
                'title' => $request->input('title'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);
            return ResponseHelper::Out('success','User registered successfully',$user,201);
        } catch (Exception $e) {
            return ResponseHelper::Out('failed','Something went wrong',$e->getMessage(),500);
        }
    }
    //user login
    public function login(Request $request):JsonResponse
    {
        try{
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return ResponseHelper::Out('failed', 'Validation Failed', $validator->errors(), 422);
            }
            $user = User::where('email', $request->input('email'))->first();
            if (!$user || !Hash::check($request->input('password'), $user->password)) {
                return ResponseHelper::Out('failed','Invalid email or password',null,401);
            }
            // set token
            $token = JWTToken::CreateToken($user->email, $user->id);
            return ResponseHelper::Out('success', 'Login successful', $user, 200)->cookie('token', $token, 525600);
        } catch (Exception $e) {
            return ResponseHelper::Out('failed','Something went wrong',$e->getMessage(),500);
        }
    }
}
