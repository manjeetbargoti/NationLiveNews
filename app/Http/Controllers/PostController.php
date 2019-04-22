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

class PostController extends Controller
{
    // Add New Post By Admin
    public function addNewPost(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $data = $request->all();

            $author = Auth::user()->id;

            // echo "<pre>"; print_r($data); die;

            if(empty($data['status'])){
                $status = 1;
            }else {
                $status = 0;
            }

            if(empty($data['feature_post'])){
                $feature = 0;
            }else {
                $feature = 1;
            }

            $posts = new Posts;
            $posts->post_title      = $data['post_title'];
            $posts->post_url        = $data['post_url'];
            $posts->post_content    = $data['description'];
            $posts->post_type       = $data['post_type'];
            $posts->post_status     = $status;
            $posts->feature_post    = $feature;
            $posts->post_category   = $data['post_category'];
            $posts->country         = $data['country'];
            $posts->state           = $data['state'];
            $posts->city            = $data['city'];
            $posts->video_id        = $data['video_id'];
            $posts->post_author     = $author;
            $posts->comment_status  = $data['allow_comment'];

            // Upload Featured Images
            if($request->hasFile('featured_image')){
                $image_tmp = Input::file('featured_image');
                if($image_tmp->isValid()){
                    
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1, 99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/post_images/large/'.$filename;
                    // Resize image
                    Image::make($image_tmp)->resize(730, 464)->save($large_image_path);

                    // Store image in Services folder
                    $posts->post_image = $filename;
                }
            }
            $posts->save();

            return redirect()->back()->with('flash_message_success', 'Post Published Successfully!');
        }

        $countryname = DB::table('countries')->pluck("name","id");

        $category = PostCategory::where(['parent_cat'=>'0', 'status'=>1])->get();
        $category_dropdown = '<option value="0" selected="selected">Parent</option>';

        foreach($category as $cat){
            $category_dropdown .= "<option value='".$cat->category_url."'><strong>".$cat->category_name."</strong></option>";
            $sub_category = PostCategory::where(['parent_cat'=>$cat->category_url, 'status'=>1])->get();
            foreach($sub_category as $sub_cat){
                $category_dropdown .= "<option value='".$sub_cat->category_url."'>&nbsp;--&nbsp;".$sub_cat->category_name."</option>";
                $sub_subcategory = PostCategory::where(['parent_cat'=>$sub_cat->category_url, 'status'=>1])->get();
                foreach($sub_subcategory as $sub_subcat){
                    $category_dropdown .= "<option value='".$sub_subcat->category_url."'>&nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;".$sub_subcat->category_name."</option>";
                }
            }
        }

        return view('admin.posts.add_new_post', compact('countryname', 'category_dropdown'));
    }

    // Getting State List according to Country
    public function getStateList(Request $request)
    {
        $states = DB::table("states")->where("country_id", $request->country_id)->pluck("name","id");
        return response()->json($states);
    }

    // Getting City List according to State
    public function getCityList(Request $request)
    {
        $cities = DB::table("cities")->where("state_id", $request->state_id)->pluck("name","id");
        return response()->json($cities);
    }

    // View News Posts
    public function viewPosts(Request $request)
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

        return view('admin.posts.view_posts', compact('posts'));
    }

    // View Single Post
    public function singlePost($url=null)
    {
        $posts = Posts::where(['post_url'=>$url])->get();
        $posts = json_decode(json_encode($posts));
        $users = User::get();
        $allposts = Posts::get();

        $metaTags = Posts::where(['post_url'=>$url])->get();

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $posts[$key]->cat_url = $cat_name->category_url;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }
        $postcategory = PostCategory::where(['parent_cat'=>'0'])->get();

        // echo "<pre>"; print_r($metaTags); die;

        return view('layouts.single_post', compact('posts', 'users', 'allposts', 'postcategory', 'metaTags'));
    }

    // Delete Post
    public function deletePost(Request $request, $id=null)
    {
        if(!empty($id))
        {
            Posts::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success', 'Post Deleted Successfully!');
        }
    }
    
    // Add Breaking News
    public function addBreakingNews(Request $request)
    {

        if($request->isMethod('post'))
        {
            $data = $request->all();

            // echo "<pre>"; print_r($data); die;

            if(empty($data['status'])){
                $status = 0;
            }else {
                $status = 1;
            }

            $bnews = new BreakingNews;

            $bnews->news_title  = $data['news_title'];
            $bnews->status      = $status;

            $bnews->save();

            return redirect()->back()->with('flash_message_success', 'Breaking News Added Successfully!');
        }
        return view('admin.news.add_breaking_news');
    }
    
    // News Nation Function
    public function newsNation()
    {
        $nationposts = Posts::where(['country'=>101])->orderBy('created_at', 'desc')->get();
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('frontend.nation_news', compact('nationposts', 'posts'));
    }

    // Edit Post
    public function editPost(Request $request, $id=null)
    {

        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $post = new Posts;

            if(!empty($id))
            {
                Posts::where(['id'=>$id])->update(['post_title'=>$data['post_title'], 'post_url'=>$data['post_url'], 
                'post_content'=>$data['description'], 'comment_status'=>$data['allow_comment'], 'post_type'=>$data['post_type'], 
                'video_id'=>$data['video_id'], 'post_category'=>$data['post_category'], 'country'=>$data['country'], 
                'state'=>$data['state'], 'city'=>$data['city']]);
                return redirect('/admin/posts')->with('flash_message_success', 'Post updated Successfully!');
            }
        }

        $postdetails = Posts::where(['id'=>$id])->first();
        $postdetails = json_decode(json_encode($postdetails));
        $countryname = DB::table('countries')->get();
        $statename = DB::table('states')->where(['country_id' => $postdetails->country])->get();
        $cityname = DB::table('cities')->where(['state_id' => $postdetails->state])->get();

        // Select Country Name
        $country_dropdown = "<option selected value=''>Select Country</option>";
        foreach ($countryname as $cname) {
            if ($cname->id == $postdetails->country) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $country_dropdown .= "<option value='" . $cname->id . "' " . $selected . ">" . $cname->name . "</option>";
        }

        // Select State Name
        $state_dropdown = "<option selected value=''>Select State</option>";
        foreach ($statename as $sname) {
            if ($sname->id == $postdetails->state) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $state_dropdown .= "<option value='" . $sname->id . "' " . $selected . ">" . $sname->name . "</option>";
        }

        // Select City Name
        $city_dropdown = "<option selected value=''>Select City</option>";
        foreach ($cityname as $cname) {
            if ($cname->id == $postdetails->city) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $city_dropdown .= "<option value='" . $cname->id . "' " . $selected . ">" . $cname->name . "</option>";
        }

        $category = PostCategory::where(['parent_cat'=>'0', 'status'=>1])->get();
        $category_dropdown = '<option value="0" selected="selected">Parent</option>';

        foreach ($category as $cat) {
            if ($cat->category_url == $postdetails->post_category) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $category_dropdown .= "<option value='" . $cat->category_url . "' " . $selected . ">" . $cat->category_name . "</option>";
        }

        return view('admin.posts.edit_post', compact('postdetails', 'category', 'category_dropdown', 'country_dropdown', 'state_dropdown', 'city_dropdown'));
    }

    // Uttar Pradesh News
    public function stateWiseNews(Request $request, $id=null)
    {
        $posts = Posts::where(['state'=>$id])->get();
        $posts = json_decode(json_encode($posts));
        $users = User::get();
        $allposts = Posts::get();

        // $metaTags = Posts::where(['id'=>$id])->get();

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $posts[$key]->cat_url = $cat_name->category_url;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }
        $postcategory = PostCategory::where(['parent_cat'=>'0'])->get();

        $lposts = Posts::orderBy('created_at', 'desc')->get();

        // echo "<pre>"; print_r($metaTags); die;

        return view('frontend.news.csc_news', compact('posts', 'users', 'allposts', 'postcategory', 'lposts'));
    }
}
