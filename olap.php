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
              <h3 class="page-title"> <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-chart-bar"></i>
                </span>Data Olap </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Data</li>
                  <li class="breadcrumb-item active" aria-current="page">Data Olap</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin" style="position: absolute; margin-left: 20%; margin-top: 10%;">
                <a href="olapsales.php">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h3 class="mb-5" style="text-align: center;">Fact Sales Order</h3>
                  </div>
                </div>
                </a>
              </div>
              <div class="col-md-3 stretch-card grid-margin" style="position: absolute; margin-left: 40%; margin-top: 10%;">

                <a href="olappurchase.php">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h3 class="mb-5">Fact Purchase Order</h3>
                  </div>
                </div>
              </a>
              </div>
            </div>
            

                <!-- 
                    <div class="col-md-3 stretch-card grid-margin" style="margin-left: 300px;">
                    <a href="http://localhost:8080/mondrian/testpage.jsp?query=adw1">
                    <div class="card bg-gradient-primary card-img-holder text-white">
                   <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h3 class="mb-5" style="text-align: center;">Olap FactSales Order</h3>
                  </div>
                </div>
                 </a>
              </div> -->

                   <!--  <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="height:600px; width: 1000px;"></iframe> -->
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>