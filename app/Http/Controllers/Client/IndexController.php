<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function gender(){
        $popular = Category::orderBy("updated_at","DESC")->limit(7)->get();
        if($popular!=null){
            return view("client.index",["populars"=>$popular]);
        }
    }
}
