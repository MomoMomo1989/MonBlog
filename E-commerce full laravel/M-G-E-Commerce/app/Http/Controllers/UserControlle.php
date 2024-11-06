<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControlle extends Controller
{
    //
    public function showRegister(){
        return view('user.inscription');
    }
    public function showLogin(){
        return view('user.Login');
    }

}
