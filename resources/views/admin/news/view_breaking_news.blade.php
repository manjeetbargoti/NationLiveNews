@extends('layouts.adminLayouts.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Breaking News</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Breaking News</li>
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
                                  <th>Id</th>
                                  <th>Breaking News</th>
                                  <th>Date</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0 ?>
                                @foreach($breakingNews as $bn)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $bn->news_title }}</td>
                                    <td>{{ date('M d, Y', strtotime($bn->created_at)) }}</td>
                                    <td>
                                        <a title="Delete" href="{{ url('/admin/news/delete/'.$bn->id) }}" class="label label-danger label-xs"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <!-- /. post information Model -->
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                  <th>Id</th>
                                  <th>Breaking News</th>
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