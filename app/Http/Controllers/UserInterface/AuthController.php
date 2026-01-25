<?php

namespace App\Http\Controllers\UserInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
