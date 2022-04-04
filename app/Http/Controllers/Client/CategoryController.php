<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        if ($slug == null) {
            return view("errors.404");
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
    }
}
