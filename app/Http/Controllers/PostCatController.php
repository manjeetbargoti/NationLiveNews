<?php

namespace App\Http\Controllers;

Use DB;
Use Image;
Use Session;
Use App\Posts;
Use App\User;
Use App\PostCategory;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Input;

class PostCatController extends Controller
{

    protected $posts_per_page = 9;

    // Add Post Category
    public function addPostCat(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            if(empty($data['status'])){
                $status = 1;
            }else {
                $status = 0;
            }

            $category = new PostCategory;
            $category->category_name    = $data['category_name'];
            $category->category_url     = $data['category_url'];
            $category->parent_cat       = $data['parent_cat'];
            $category->description      = $data['description'];
            $category->status           = $status;

            // Upload Featured Images
            if($request->hasFile('cat_image')){
                $image_tmp = Input::file('cat_image');
                if($image_tmp->isValid()){
                    
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1, 99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/category_images/large/'.$filename;
                    // Resize image
                    Image::make($image_tmp)->resize(730, 464)->save($large_image_path);

                    // Store image in Services folder
                    $category->category_image = $filename;
                }
            }

            $category->save();

            return redirect()->back()->with('flash_message_success', 'Category Added Successfully!');
        }
        $category = PostCategory::get();

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

        return view('admin.posts.add_post_category', compact('category', 'category_dropdown'));
    }

    // View Categories
    public function viewCategory()
    {
        $category = PostCategory::get();

        return view('admin.posts.view_category', compact('category'));
    }

    // View Category Posts
    public function viewCategoryPost(Request $request, $url)
    {
        $categorypost = Posts::where(['post_category'=>$url])->orderBy('created_at', 'desc')->paginate(2);
        // $categorypost = json_decode(json_encode($categorypost));
        // echo "<pre>"; print_r($categorypost); die;
        $postcategory = PostCategory::where(['parent_cat'=>'0'])->get();
        $pcategory = PostCategory::where(['category_url' => $url])->get();

        $posts = Posts::orderBy('created_at', 'desc')->get();
        $posts = json_decode(json_encode($posts));

        foreach($categorypost as $key => $val)
        {
            $catg_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $categorypost[$key]->cat_name = $catg_name->category_name;
            $authorn = User::where(['id'=>$val->post_author])->first();
            $categorypost[$key]->auth_name = $authorn->name;
        }

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }

        return view('layouts.category_post', compact('posts', 'categorypost', 'postcategory', 'pcategory'));
    }
    public function searchResult(Request $request)
    {
        $search = $request->input('search');
        // return $query->where('post_title', 'like', '%' .$s. '%')->orwhere('post_category', 'like', '%' .$s. '%');
        $categorypost = Posts::latest()->search($search)->paginate(9);
        $postcategory = PostCategory::where(['parent_cat'=>'0'])->get();
        $pcategory = PostCategory::where(['category_url' => $search ])->get();

        $posts = Posts::orderBy('created_at', 'desc')->get();
        $posts = json_decode(json_encode($posts));

        foreach($categorypost as $key => $val)
        {
            $catg_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $categorypost[$key]->cat_name = $catg_name->category_name;
            $authorn = User::where(['id'=>$val->post_author])->first();
            $categorypost[$key]->auth_name = $authorn->name;
        }

        foreach($posts as $key => $val)
        {
            $cat_name = PostCategory::where(['category_url'=>$val->post_category])->first();
            $posts[$key]->cat_name = $cat_name->category_name;
            $author = User::where(['id'=>$val->post_author])->first();
            $posts[$key]->auth_name = $author->name;
        }

        return view('layouts.category_post', compact('posts', 'categorypost', 'postcategory', 'pcategory','search'));
    }
}
