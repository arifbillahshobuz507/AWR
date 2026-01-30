<?php

namespace App\Http\Controllers\UserInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Mail\SendOTP;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\select;


class AuthController extends Controller
{
    //user Login
    public function userLogin(Request $request)
    {
        return view('gust.pages.userLogin');
    }
    //user Registration
    public function userRegistration(Request $request)
    {
        return view('gust.pages.userRegistration');
    }
    //user Send OTP
    public function userSendOtp(Request $request)
    {
        return view('gust.pages.userSendOtp');
    }
    //user Verify OTP
    public function userVerifyOtp(Request $request)
    {
        return view('gust.pages.userVerifyOtp');
    }
    //user Reset Password
    public function userResetPassword(Request $request)
    {
        return view('gust.pages.userResetPassword');
    }
    // send otp
    public function sendOtp(Request $request): JsonResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email'
            ]);
            if ($validator->fails()) {
                return ResponseHelper::error('Validation Failed', $validator->errors(), 422);
            }
            $email = $request->input('email');
            $user = User::where('email', '=', $email)->select('id', 'title', 'email', 'otp', 'email_verified_at')->first();
            if ($user == null) {
                return ResponseHelper::error('unauthorized', null, 401);
            }
            $otp = rand(100000, 999999);
            Mail::to($email)->send(new SendOTP($otp, $user->title));
            $user->update(['otp' => $otp, 'email_verified_at' => Carbon::now()->addMinutes(5)]);
            Session::put('email',  $email);
            return ResponseHelper::success('OTP sent to your registered mail', $otp);
        } catch (Exception $e) {
            return ResponseHelper::error('Something went wrong', $e->getMessage(), 500);
        }
    }
}
