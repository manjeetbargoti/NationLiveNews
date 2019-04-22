<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{{ Auth::user()->name }}}</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-users"></i> <span>Users</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-circle-o text-yellow"></i>All Users</a></li>
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-circle-o text-yellow"></i>Add User</a></li>
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-circle-o text-yellow"></i>Add User Type</a></li>
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-circle-o text-yellow"></i>View User Type</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-gears"></i> <span>Post</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/admin/posts') }}"><i class="fa fa-circle-o text-red"></i>View Posts</a></li>
        <li><a href="{{ url('/admin/new-post') }}"><i class="fa fa-circle-o text-red"></i>Add Post</a></li>
        <li><a href="{{ url('/admin/category') }}"><i class="fa fa-circle-o text-red"></i>View Category</a></li>
        <li><a href="{{ url('/admin/new-category') }}"><i class="fa fa-circle-o text-red"></i>Add Category</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><i class="fa fa-building  "></i> <span>Breaking News</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-circle-o text-aqua"></i>View News</a></li>
        <li><a href="{{ url('/admin/add-breaking-news') }}"><i class="fa fa-circle-o text-aqua"></i>Add News</a></li>
      </ul>
    </li>
    <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-envelope"></i> <span>Mail</span></a></li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>