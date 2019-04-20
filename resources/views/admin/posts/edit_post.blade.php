@extends('layouts.adminLayouts.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add New Post</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-dismissible">
                        <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
                @endif
                <div class="box box-purple">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="post" action="{{ url('/admin/edit-post/'.$postdetails->id) }}" enctype="multipart/form-data" name="edit_post" id="edit_post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-12 col-lg-9">
                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Post Title">Post Title</label>
                                            <input type="text" name="post_title" id="post_title" class="form-control" value="{{ $postdetails->post_title }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Post Url</span>
                                                <input type="text" name="post_url" id="post_url" class="form-control" value="{{ $postdetails->post_url }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label for="Description">Description</label>
                                                <textarea name="description" id="description" class="form-control my-editor">{{ $postdetails->post_content }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Allow Comments</label>
                                            <select name="allow_comment" id="allow_comment" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option @if($postdetails->comment_status=='1') selected @endif value="1">Yes</option>
                                                <option @if($postdetails->comment_status=='0') selected @endif value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Post Type</label>
                                            <select name="post_type" id="blog_post_type" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option @if($postdetails->post_type=='1') selected @endif value="1">Standerd (Image/Text)</option>
                                                <option @if($postdetails->post_type=='2') selected @endif value="2">Video Post</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>
                                                <input name="feature_post" id="feature_post" type="checkbox" class="flat-green" @if($postdetails->feature_post=='1') checked @endif value="1"> Featured  <small class="text-purple pl-1">( If you check this set Featured Post )</small>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 @if($postdetails->post_type == 1) hidden @else show @endif" id="YoutubeVideoId">
                                        <div class="form-group">
                                            <label for="Video ID">Video ID</label>
                                            <input name="video_id" id="video_post" type="text" class="form-control" value="{{ $postdetails->video_id }}">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Post Category</label>
                                            <select name="post_category" id="post_category" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <?php echo $category_dropdown; ?>
                                            </select>
                                        </div>
                                    </div>
                                
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <label>Country</label>
                                        <select name="country" id="country" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        @if(!empty($country_dropdown))
                                            <?php echo $country_dropdown; ?>
                                        @else
                                            <option value="" selected>Select Country</option>
                                            @foreach($countryname as $key => $country)
                                            <option value="{{ $key }}">{{ $country }}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <label for="State">State</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="state" id="state" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            @if(!empty($state_dropdown))
                                                <?php echo $state_dropdown; ?>
                                            @else
                                                <option value selected>Select State</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                        <label for="City">City</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="city" id="city" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <?php echo $city_dropdown; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group btn-justify">
                                            <input type="submit" class="btn btn-info btn-md btn-block" value="Publish">
                                        </div>
                                    </div>

                                    <!-- <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Post Image">Featured Image</label>
                                            <input type="file" name="featured_image" id="featured_image">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div> -->
                                    
                                </div>
                            </div> <!-- Rows -->
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection