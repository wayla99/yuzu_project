<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAndRegisterController extends Controller
{
    public function loginAndRegister(){
        return view('auth.loginAndRegister');
    }
}
