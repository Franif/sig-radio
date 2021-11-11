<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIG RADIO | User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/balmon.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a> -->
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
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
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li> -->
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
      <a href="#" class="brand-link">
        <img src="dist/img/balmon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BALMON BATAM</span>
      </a>

      <!-- Sidebar -->
      <div class="user-panel mt-1 pb-2 mb-2 d-flex">
</div>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
          <div class="image">
            <img src="dist/img/dua.JPG" class="rouded" width="230px" height="130px"> <br>
          </div>

          <!-- <div class="info">
            <a href="#" class="d-block">Putri Nurzaini</a>
          </div> -->
        <!-- </div> -->
<div class="user-panel mt-1 pb-2 mb-2 d-flex">
</div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <!-- <li class="nav-item menu-open"> -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <!-- <li class="nav-header">OLAH DATA</li> -->
          <li class="nav-header">OLAH DATA</li>
            <li class="nav-item">
              <a href="klien_read.php" class="nav-link ">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Client
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            </li>
                  <!-- <i class="right fas fa-angle-left"></i> -->
            
            <li class="nav-item">
              <a href="stasiun_read.php" class="nav-link ">
                <i class="nav-icon fas fa-broadcast-tower"></i>
                <p>
                  Stasiun
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengukuran_read.php" class="nav-link ">
                <i class="nav-icon fas fa-ruler"></i>
                <p>
                  Pengukuran
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="profile_read.php" class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Data Karyawan
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="koordinator_read.php" class="nav-link ">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                  Koordinator
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="tim_read.php" class="nav-link ">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Tim
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a href="rekap_read.php" class="nav-link ">
                <i class="nav-icon far fa-clipboard"></i>
                <p>
                  Rekap Kerja
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="user_read.php" class="nav-link active ">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>
                  User
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
    </aside>
