<?php

namespace App\Http\Controllers\UserInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home
    public function home()
    {
    return view('userInterface.layout.master');

    }
}
