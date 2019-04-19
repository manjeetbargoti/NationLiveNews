<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Listed Property</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">View Property</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
            <?php if(Session::has('flash_message_success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong><?php echo session('flash_message_success'); ?></strong>
                </div>
            <?php endif; ?>   
            <?php if(Session::has('flash_message_error')): ?> 
                <div class="alert alert-error alert-dismissible">
                    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong><?php echo session('flash_message_error'); ?></strong>
                </div>
            <?php endif; ?>
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
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++ ?>
                                <tr>
                                    <td><?php echo e($i); ?></td>
                                    <td><img width="60px" class="thumb" src="<?php echo e(asset('/images/backend_images/post_images/large/'.$post->post_image)); ?>"></td>
                                    <td><a target="_blank" href="<?php echo e(url('/'.$post->post_url)); ?>"><?php echo e($post->post_title); ?></a></td>
                                    <td><?php echo e($post->cat_name); ?></td>
                                    <td><?php echo e($post->auth_name); ?></td>
                                    <td><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></td>
                                    <td>
                                        <a href="<?php echo e(url('/admin/post/eddit/'.$post->id)); ?>" class="label label-info label-xs">Edit</a>
                                        <a href="<?php echo e(url('/admin/post/delete/'.$post->id)); ?>" class="label label-danger label-xs">Delete</a>
                                    </td>
                                </tr>

                                <!-- Property Information Model -->
                                <div class="modal fade bs-example-modal-lg" id="<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="propertyView">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content row">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><?php echo e($post->post_title); ?> | Full Details</h4>
                                            </div>
                                            <div class="modal-body col-sm-12">
                                                <div class="col-sm-6">
                                                    <?php if(!empty($post->post_image)): ?>
                                                    <img width="320" class="img-responsive" src="<?php echo e(asset('/images/backend_images/post_images/large/'.$post->post_image)); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p><strong>Description:</strong> <?php echo str_limit($post->post_content, $limit=80); ?></p>
                                                    <p><strong>Category:</strong> <?php echo e($post->post_category); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /. post information Model -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayouts.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\Laravel\NationLive\resources\views/admin/posts/view_posts.blade.php */ ?>