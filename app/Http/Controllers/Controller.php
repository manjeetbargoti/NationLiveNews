<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\PostCategory;
use App\BreakingNews;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function breakingNews()
    {
        $bnews = BreakingNews::orderBy('created_at', 'desc')->get();
        $bnews = json_decode(json_encode($bnews));
        return $bnews;
    }

    public static function footerNews()
    {
        $posts = Posts::orderBy('created_at', 'desc')->get();
        $posts = json_decode(json_encode($posts));

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }

        return $posts;
    }

    public static function footerCat()
    {
        $cat_name = PostCategory::get();

        return $cat_name;
    }

}
