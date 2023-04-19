<?php

require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelompok 3</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

  </head>
  <body>

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logoop.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logook.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <div class="nav-link" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.png" alt="image">
                </div>
                <div class="nav-profile-text" style="margin-left: 10px;">
                  <p class="mb-1 text-black">AdventureWorks</p>
                </div>
              </div>
              
            </li>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">AdventureWorks</span>
                  <span class="text-secondary text-small">Datawarehouse</span>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">
                <span class="menu-title">Employee</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">
                <span class="menu-title">Product</span>
                <i class="mdi mdi-cart-outline menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vendor.php">
                <span class="menu-title">Vendor</span>
                <i class="mdi mdi-cellphone-iphone menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sales.php">
                <span class="menu-title">Sales Person</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="olap.php">
                <span class="menu-title">Olap</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i> Quantity Order
                    </h4>
                    <?php
                      $jumlah = mysqli_query($conn,"select sum(OrderQty) as jumlah from factsalesorder");
                      $data = mysqli_fetch_row($jumlah);
                    ?>
                    <h2 class="mb-5"><?=number_format($data[0], 0, '', '.')?></h2>
                    <h6 class="card-text">Sales Order</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>Quantity Order 
                    </h4>
                    <?php
                      $jumlah = mysqli_query($conn,"select sum(OrderQty) as jumlah from factpurchaseorder");
                      $jumlahh = mysqli_fetch_row($jumlah);
                    ?>
                    <h2 class="mb-5"><?=number_format($jumlahh[0], 0, '', '.')?></h2>
                    <h6 class="card-text">Purchase Order</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-account mdi-24px float-right"></i>Employee
                    </h4>
                    <?php
                      $jumlahc = mysqli_query($conn,"select count(*) from employee");
                      $jumlahhh = mysqli_fetch_row($jumlahc);
                    ?>
                    <h2 class="mb-5"><?=$jumlahhh[0]; ?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-cart mdi-24px float-right"></i>Produk
                    </h4>
                    <?php
                      $jumlahp = mysqli_query($conn,"select count(*) from product");
                      $jumlahhp = mysqli_fetch_row($jumlahp);
                    ?>
                    <h2 class="mb-5"><?=$jumlahhp[0]; ?></h2>
                  </div>
                </div>
              </div>
            </div>
            
              <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">

                        <h4 class="card-title">Top 5 Category Product</h4><br><br>
                        <canvas id="myBarChart3"></canvas>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/chart.js/Chart.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="js/salesyear.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
