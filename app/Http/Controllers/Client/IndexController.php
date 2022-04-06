<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Feature;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function gender()
    {
        $popular = Feature::orderBy("updated_at", "DESC")->limit(7)->get();
        $feature = Feature::orderBy("updated_at", "DESC")->get();
        if(backpack_auth()->check()){
            if(backpack_user()->role != 0){
                $own = User::find(backpack_user()->id)->Categories()->get();
            }
            else{
                $own = Category::get();
            }
        }else{
            $own = null;
        }
        if ($popular != null) {
            return view("client.index",
                [
                    "populars" => $popular,
                    "owns"=>$own,
                    'features'=>$feature,
                ]);
        }
    }
}
