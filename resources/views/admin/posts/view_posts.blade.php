@extends('layouts.adminLayouts.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Listed Posts</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">View Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
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
                        <table id="allusers-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Post Id</th>
                                  <th>Post Image</th>
                                  <th>Post Name</th>
                                  <th>Category</th>
                                  <th>Author</th>
                                  <th>Date</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0 ?>
                                @foreach($posts as $post)
                                @if($post->post_type == 1)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    @if(!empty($post->post_image))
                                    <td><img width="60px" class="thumb" src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}"></td>
                                    @elseif(!empty($post->video_id))
                                    <td><iframe width="60" height="60" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                                    @endif
                                    <td><a target="_blank" href="{{ url('/news/'.$post->post_url) }}">{{ $post->post_title }}</a></td>
                                    <td>{{ $post->cat_name }}</td>
                                    <td>{{ $post->auth_name }}</td>
                                    <td>{{ date('M d, Y', strtotime($post->created_at)) }}</td>
                                    <td>
                                        <a href="{{ url('/admin/post/eddit/'.$post->id) }}" class="label label-info label-xs">Edit</a>
                                        <a href="{{ url('/admin/post/delete/'.$post->id) }}" class="label label-danger label-xs">Delete</a>
                                    </td>
                                </tr>

                                <!-- Property Information Model -->
                                <div class="modal fade bs-example-modal-lg" id="{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="propertyView">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content row">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">{{ $post->post_title }} | Full Details</h4>
                                            </div>
                                            <div class="modal-body col-sm-12">
                                                <div class="col-sm-6">
                                                    @if(!empty($post->post_image))
                                                    <img width="320" class="img-responsive" src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image)}}">
                                                    @endif
                                                </div>
                                                <div class="col-sm-6">
                                                    <p><strong>Description:</strong> {!! str_limit($post->post_content, $limit=80) !!}</p>
                                                    <p><strong>Category:</strong> {{ $post->post_category }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /. post information Model -->
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Post Id</th>
                                    <th>Post Image</th>
                                    <th>Post Name</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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