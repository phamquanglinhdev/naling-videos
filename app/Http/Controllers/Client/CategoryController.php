<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return view("errors.404");
        }
        $category = Category::where("slug", "=", $slug)->first();

        if (isset($category->name)) {
            $categories = Category::where("coach", "=", $category->coach)->limit(6)->get();
            return view("client.movie-single", ["category" => $category, 'list' => $categories]);
        } else {
            return view("errors.404");
        }
    }

    public function play($slug = null, $episode = 1)
    {
        if (backpack_auth()->check()){
            if ($slug == null) {
                return view("errors.404");
            }
            $user = User::find(backpack_user()->id);
            if($user->role != 0){
                $category = $user->Categories()->where("slug","=",$slug)->first();
                if(!isset($category->name)){
                    return view("errors.200");
                }
            }
            $category = Category::where("slug", "=", $slug)->first();

            if (isset($category->name)) {
                $video = $category->Videos()->where('episode', '=', $episode)->first();

                if (isset($video->name)) {
                    $videos = $category->Videos()->get();
                    return view('client.play', ['video' => $video, 'list' => $videos]);
                } else {
                    return view("errors.404");
                }

            } else {
                return view("errors.404");
            }
        }else{
            return view("client.login");
        }
    }
}
