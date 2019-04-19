<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>NN Nation Live</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/all.css')); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.css')); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/select2/dist/css/select2.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/custom.css')); ?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">

<?php echo $__env->make('layouts.adminLayouts.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.adminLayouts.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.adminLayouts.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('bower_components/chart.js/Chart.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<!-- InputMask -->
<script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.date.extensions.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/input-mask/jquery.inputmask.extensions.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e(asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo e(asset('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>

<!-- CK Editor -->
<!-- <script src="<?php echo e(asset('bower_components/ckeditor/ckeditor.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script> -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<!-- Custom js for Admin -->
<script src="<?php echo e(asset('dist/js/custom.js')); ?>"></script>

</body>
</html>
<?php /* /home/laiz37yervyw/resources/views/layouts/adminLayouts/admin_design.blade.php */ ?>