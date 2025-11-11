<?php

namespace App\Http\Controllers\API;

use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Mail\SendOTP;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use function Laravel\Prompts\select;

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
            //check validation
            if ($validator->fails()) {
                return ResponseHelper::Out('failed', 'Validation Failed', $validator->errors(), 422);
            }
            //get user
            $user = User::where('email', $request->input('email'))->select('id','password', 'email')->first();
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
    // send otp
    public function sendOtp(Request $request):JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                return ResponseHelper::Out('failed', 'Validation Failed', $validator->errors(), 422);
            }
            $email= $request->input('email');
            $user = User::where('email', '=', $email)->select('id', 'email', 'otp', 'email_verified_at')->first();
            if ($user == null) {
                return ResponseHelper::Out('failed','unauthorized',null,401);
            }
            $otp = rand(100000, 999999);
            Mail::to($email)->send(new SendOTP($otp,$user->title));
            $user->update(['otp' => $otp,'email_verified_at' => Carbon::now()->addMinutes()]);
            return ResponseHelper::Out('success', 'OTP sent to your registered mail',$otp,200);
        } catch (Exception $e) {
            return ResponseHelper::Out('failed','Something went wrong',$e->getMessage(),500);
        }
    }
    //verify otp
    public function verifyOtp(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'otp' => 'required|min:6'
            ]);
            if ($validator->fails()) {
                return ResponseHelper::Out('failed', 'Validation Failed', $validator->errors(), 422);
            }
            $email = $request->input('email');
            $otp = $request->input('otp');
            //check authentication
            $user = User::where('email', '=', $email)
                ->where('otp', '=', $otp)
                ->select('id', 'email', 'otp', 'email_verified_at')
                ->first();
            if ($user == null) {
                return ResponseHelper::Out('failed', 'unauthorized', null, 401);
            }
            //Check if OTP expired
            if (Carbon::now()->greaterThan(Carbon::parse($user->email_verified_at))) {
                return ResponseHelper::Out('failed', 'OTP expired', null, 403);
            }
            //Create Token For Reset Password
            $token = JWTToken::CreateToken($email, $user->id);
            $user->update(['otp' => '0']);
            return ResponseHelper::Out('success', 'Otp verification successful!', $user, 200)
                ->cookie('token', $token, 525600);
        } catch (Exception $e) {
            return ResponseHelper::Out('failed', 'Something went wrong', $e->getMessage(), 500);
        }
    }


}
