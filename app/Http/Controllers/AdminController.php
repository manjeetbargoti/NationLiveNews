<?php

namespace App\Http\Controllers;

use Session;
Use App\User;
Use App\Posts;
Use App\PostCategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin Login function
    public function adminLogin(Request $request, $guard = null)
    {
        $userData = Auth::user();

        if (Auth::guard($guard)->check()) {
            return redirect('/admin/dashboard');
        }
        if($request->isMethod('post'))
        {
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => '1', 'status' => '1']))
            {
                return redirect('/admin/dashboard')->with(compact('userData'));
            }elseif(Auth::attempt(['phone' => $data['email'], 'password' => $data['password'], 'role' => '1', 'status' => '1']))
            {
                return redirect('/admin/dashboard')->with(compact('userData'));
            }
            else if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'role' => '2', 'status' => '1']))
            {
                return redirect('/dashboard')->with('flash_message_success', 'Welcome! User');
            }
            else
            {
                return redirect('/admin')->with('flash_message_error', 'Invalid Email Address or Password!');
            }
        }
        return view('admin.admin_login');
    }

    // After Login Dashbord Redirect
    public function dashboard()
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

        return view('admin.dashboard', compact('posts'));
        // return view('admin.dashboard');
    }

    // Admin Logout function
    public function logout()
    {
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Logged out Successfully!');
    }
}
