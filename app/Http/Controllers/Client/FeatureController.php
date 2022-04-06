<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index($slug=null){
        if($slug==null){
            return view("errors.404");
        }
        $feature =  Feature::where("slug","=",$slug)->first();
        $list =  Feature::get();
        return view("client.feature",["feature"=>$feature,"list"=>$list]);
    }
}
