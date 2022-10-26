<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Dashboard 2 | UBold - Responsive Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- plugin css -->
  <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
    type="text/css" />

  <!-- Bootstrap css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- App css -->
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
  <!-- icons -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />

  <!-- third party css -->
  <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
    type="text/css" />
  <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />

  <!-- Plugins css -->
  <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
  <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

  <!-- Head js -->
  <script src="assets/js/head.js"></script>

</head>

<!-- body start -->

<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark"
  data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

  <!-- Begin page -->
  <div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
      <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

          <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
              href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
              <span class="pro-user-name ms-1">
                Geneva <i class="mdi mdi-chevron-down"></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user"></i>
                <span>My Account</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-log-out"></i>
                <span>Logout</span>
              </a>

            </div>
          </li>

          <!-- <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
              <i class="fe-settings noti-icon"></i>
            </a>
          </li> -->

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
          <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22">
              <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="20">
              <!-- <span class="logo-lg-text-light">U</span> -->
            </span>
          </a>

          <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-light.png" alt="" height="20">
            </span>
          </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
            <button class="button-menu-mobile waves-effect waves-light">
              <i class="fe-menu"></i>
            </button>
          </li>

          <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end Topbar -->