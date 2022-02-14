<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DMGT | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/summernote/summernote-bs4.min.css'); ?>">



  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/summernote/summernote-bs4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/theme/plugins/summernote/summernote.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.8.18/themes/base/minified/jquery.ui.all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.8.18/themes/base/minified/jquery.ui.datepicker.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('public/theme/dist/img/AdminLTELogo.png');?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
        
         
        
          <a href="<?php echo base_url('auth/profile');?>" class="dropdown-item">
            <i class="fas fa-users mr-2"> My Profile</i> 
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('auth/logout');?>" class="dropdown-item">
            <i class="fas fa-users mr-2">  Log Out</i> 
            <span class="float-right text-muted text-sm"></span>
          </a>

         <!--  <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <!-- <img src="layout/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light"> D3-Yacht On Board</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url('admin');?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                D3-Yacht On Board
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
            <?php if($session['role'] == 1):  ?>
              <li class="nav-item">
                <a href="<?php echo base_url('/');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                 
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/addManager');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-All - Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Captian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Crew</p>
                </a>
              </li> 
              
 
            </ul>
           </li> 
           <?php elseif ($session['role'] == 2): ?>

            <li class="nav-item">
                <a href="<?php echo base_url('');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Captian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Crew</p>
                </a>
              </li> 

            <?php elseif($session['role'] == 3): ?>
              <li class="nav-item">
                <a href="<?php echo base_url('');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage-Crew</p>
                </a>
              </li> 
             <?php endif; ?>
             


          
        </ul>
      </nav> 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?= $this->renderSection("main_content"); ?>

  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Dmgt.ae</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper --> 

<!-- jQuery -->
<script src="<?php echo base_url('public/theme/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('public/theme/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('public/theme/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('public/theme/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('public/theme/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('public/theme/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('public/theme/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('public/theme/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('public/theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

<!-- overlayScrollbars -->
<script src="<?php echo base_url('public/theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('public/theme/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('public/theme/dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('public/theme/dist/js/pages/dashboard.js'); ?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('public/theme/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>

<script src="<?php echo base_url('public/theme/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('public/theme/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script src="<?php echo base_url('public/theme/plugins/summernote/summernote.js'); ?>"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- Sweetalert library file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<?= $this->renderSection("script_content"); ?>
</body>
</html>