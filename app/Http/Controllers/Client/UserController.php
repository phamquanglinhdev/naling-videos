<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view("client.login");
    }
    public function logout(){
        $this->guard()->logout();
//
//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();

    }
}
