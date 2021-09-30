<?php $session = \Config\Services::session();
if(!$session->get('isUserLogin')){
    // echo "<script> location.href='".base_url()."'; </script>";
    echo "<script> location.href='/'; </script>";
}
?>
<div class="wrapper">

  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">
      <!-- Sidebar toggle button-->
      <div>
        <ul class="nav">
          <li class="btn-group nav-item">
            <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button">
              <i class="nav-link-icon mdi mdi-menu"></i>
            </a>
          </li>
        </ul>
      </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
          <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
              <img src="https://i.pinimg.com/originals/3f/34/b2/3f34b2b917029cc9a0caddaa0a4454fb.png" alt="">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                <!-- <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a> -->
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="<?=base_url('logout')?>"><i class="ti-lock text-muted mr-2"></i> Logout</a> -->
                <a class="dropdown-item" href="/logout"><i class="ti-lock text-muted mr-2"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <div class="user-profile">
        <div class="ulogo">
          <a href="/admin/dashboard">
            <!-- logo for regular state and mobile devices -->
            <div class="d-flex align-items-center justify-content-center">
              <img src="/images/logo-dark.png" alt="">
              <h5><b>Tulong Manilenyo</b> Tapalodo</h5>
            </div>
          </a>
        </div>
      </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <!-- <a href="<?//=base_url('admin/Dashboard')?>"> -->
          <a href="/admin/dashboard">
            <i data-feather="sliders"></i>
            <span>Tapalodo</span>
          </a>
        </li>

          <li class="treeview">
          <a href="#users">
            <i data-feather="user"></i>
            <span>Mga Gumagamit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/users"><i class="ti-more"></i>Listahan ng Gumagamit</a></li>
            <li><a href="/admin/users/new"><i class="ti-more"></i>Magdagdag ng Gumagamit</a></li>
          </ul>
        </li>

       

        <li class="treeview">
          <a href="#citizen">
            <i data-feather="users"></i>
            <span>Kalingkod</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/citizen"><i class="ti-more"></i>Mga Kalingkod</a></li>
            <li><a href="/admin/citizen/new"><i class="ti-more"></i>Magdagdag ng Kalingkod</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#citizen">
            <i data-feather="file-text"></i>
            <span>Letra ng Garantiya</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/guarantee-letter"><i class="ti-more"></i>Mga Letra ng Garantiya</a></li>
            <li><a href="/admin/guarantee-letter/new"><i class="ti-more"></i>Bagong Letra ng Garantiya</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#citizen">
            <i data-feather="book"></i>
            <span>Libing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/burial"><i class="ti-more"></i>Listahan ng Nakalibing</a></li>
            <!-- <li><a href="/admin/burial/new"><i class="ti-more"></i>Magdagdag ng Libing</a></li> -->
          </ul>
        </li>

        <li>
          <a href="/logout">
            <i data-feather="log-out"></i>
            <span>Mag Log Out</span>
          </a>
        </li>

      </ul>
    </section>
  </aside>