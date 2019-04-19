
<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add New Category</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Add Category</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-9">
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
        <div class="box box-info">
          <!-- /.box-header -->
          <div class="box-body">
            <form method="post" name="add_category" id="add_category" action="<?php echo e(url('/admin/new-category')); ?>" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="Category Name">Category Name</label>
                    <input type="text" name="category_name" id="category_name" class="form-control">
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label>Category Level</label>
                      <select name="parent_cat" id="parent_cat" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <?php echo $category_dropdown; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">Url</span>
                    <input type="text" name="category_url" id="category_url" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Description">Description</label>
                  <textarea name="description" id="description" class="form-control my-editor"></textarea>
                </div>
                <div class="form-group">
                  <label>
                    <input type="checkbox" name="status" id="status" class="minimal-red" value="0"> Disable
                  </label>
                </div>
                          
                <div class="form-group">
                  <label for="Category Image">Category Image</label>
                  <input type="file" id="cat_image" name="cat_image">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                          
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Add Category</button>
                </div>
              </div>
            </form>
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
<?php /* /home/laiz37yervyw/resources/views/admin/posts/add_post_category.blade.php */ ?>