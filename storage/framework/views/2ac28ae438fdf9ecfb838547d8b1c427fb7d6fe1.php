
<?php $__env->startSection('content'); ?>

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
                        <form method="post" action="<?php echo e(url('/admin/add-breaking-news')); ?>" enctype="multipart/form-data" name="add_news" id="add_news" novalidate="novalidate">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-sm-12 col-lg-9">
                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Post Title">Breaking News</label>
                                            <textarea type="textarea" name="news_title" id="news_title" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>
                                                <input name="status" id="status" type="checkbox" class="flat-green" value="1"> Enable
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                        <div class="form-group btn-justify">
                                            <input type="submit" class="btn btn-info btn-md btn-block" value="Publish">
                                        </div>
                                    </div>
                                    
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayouts.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/laiz37yervyw/resources/views/admin/news/add_breaking_news.blade.php */ ?>