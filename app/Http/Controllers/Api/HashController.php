<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HashController extends Controller
{
    public function HashPassword($password){
        return Hash::make($password);
    }
}
