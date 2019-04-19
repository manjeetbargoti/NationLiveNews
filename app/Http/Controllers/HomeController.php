<?php

namespace App\Http\Controllers;

Use DB;
Use Image;
Use Session;
Use App\User;
Use App\Posts;
Use App\PostCategory;
Use App\BreakingNews;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'desc')->get();
        $posts = json_decode(json_encode($posts));
        $up = Posts::where(['state'=> 1584])->orderBy('created_at', 'desc')->get();
        $uk = Posts::where(['state'=> 1585])->orderBy('created_at', 'desc')->get();
        $ent = Posts::where(['post_category'=> 'entertainment'])->orderBy('created_at', 'desc')->get();
        $tech = Posts::where(['post_category'=> 'tech'])->orderBy('created_at', 'desc')->get();
        $crime = Posts::where(['post_category'=> 'crime'])->orderBy('created_at', 'desc')->get();

        $vposts = Posts::where(['post_type'=>2])->orderBy('created_at', 'desc')->get();
        $vposts = json_decode(json_encode($vposts));

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }

        foreach($vposts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $vposts[$key]->cat_name = $cat_name->category_name;
            $author = User::where(['id'=>$val->post_author])->first();
            $vposts[$key]->auth_name = $author->name;
        }

        $postcategory = PostCategory::where(['parent_cat'=>'0'])->get();
        $breakingnews = BreakingNews::where(['status'=>1])->orderBy('created_at', 'desc')->get();

        return view('home', compact('posts', 'vposts', 'postcategory', 'breakingnews','postcategory','up','uk','ent','tech','crime'));

        // return view('layouts.frontLayouts.front_header', compact('postcategory'));
    }
}
