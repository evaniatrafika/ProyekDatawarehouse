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

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles-table.css" rel="stylesheet" />
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
                  <i class="mdi mdi-cart-outline"></i>
                </span>Data Product </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Master Data</li>
                  <li class="breadcrumb-item active" aria-current="page">Data Product</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i> Product Kategory
                    </h4>
                    <?php
                        
                        $jumlahc = mysqli_query($conn,"select count(distinct ProductCategory) from product ");
                      $jumlahhh = mysqli_fetch_row($jumlahc);
                                      ?>

                          <h2 class="mb-4"><?=$jumlahhh[0]; ?></h2>
                    <h6 class="card-text">Category</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i> Jumlah  Produk
                    </h4>
                    <?php
                        
                        $jumlahc = mysqli_query($conn,"select count(*) from product ");
                      $jumlahhh = mysqli_fetch_row($jumlahc);
                                      ?>

                          <h2 class="mb-4"><?=$jumlahhh[0]; ?></h2>
                    <h6 class="card-text">Product</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i> Product Best Seller
                    </h4>
                    <?php
                        $batas = 1;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
                 
                        $datap = mysqli_query($conn,"select sum(f.OrderQty) as total , p.ProductName as Nama from factsalesorder f join product p on f.ProductID = p.ProductID group by f.ProductID order by sum(f.OrderQty)");
                                $jumlah_data = mysqli_num_rows($datap);
                                $total_halaman = ceil($jumlah_data / $batas);


                        $ambildataemployee = mysqli_query($conn,"select sum(f.OrderQty) as total , p.ProductName as Nama from factsalesorder f join product p on f.ProductID = p.ProductID group by f.ProductID order by sum(f.OrderQty) desc  limit $halaman_awal, $batas");
                                        while($data = mysqli_fetch_array($ambildataemployee)){
                                      ?>

                          <h2 class="mb-4"> <?= number_format($data['total'], 0, '', '.')?></h2>
                          <h4> <?= $data['Nama']?></h2>
                        <?php 
                                   };
                                      ?>
                    <h6 class="card-text"></h6>
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"><i class="mdi mdi-chart-line mdi-24px float-right"></i> Product Purchase Best Seller
                    </h4>
                    <?php
                        $batas = 1;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
                 
                        $datap = mysqli_query($conn,"select sum(f.OrderQty) as total , p.ProductName as Nama from factpurchaseorder f join product p on f.ProductID = p.ProductID group by f.ProductID order by sum(f.OrderQty)");
                                $jumlah_data = mysqli_num_rows($datap);
                                $total_halaman = ceil($jumlah_data / $batas);


                        $ambildataemployee = mysqli_query($conn,"select sum(f.OrderQty) as total , p.ProductName as Nama from factpurchaseorder f join product p on f.ProductID = p.ProductID group by f.ProductID order by sum(f.OrderQty) desc  limit $halaman_awal, $batas");
                                        while($data = mysqli_fetch_array($ambildataemployee)){
                                      ?>

                          <h2 class="mb-4"> <?= number_format($data['total'], 0, '', '.')?>
                          </h2>
                          <h4> <?= $data['Nama']?></h2>
                        <?php 
                                   };
                                      ?>
                    <h6 class="card-text"></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">

                        <h4 class="card-title">Top 5 Category Product</h4><br><br>
                        <canvas id="myBarChart9"></canvas>
                      </div>
                    </div>
                </div>
              </div>
            <div class="row">
              <div class="col-lg-6 grid-margin">
                <div class="card">
                  <div class="card-body">

                        <h4 class="card-title">Top 5 Sales Order Product</h4><br><br>
                        <canvas id="myBarChart5"></canvas>
                      </div>
                    </div>
                  </div>

                <div class="col-lg-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Top 5 Purchase Order Total Product</h4><br><br>
                    <canvas id="myBarChart2"></canvas>
                  </div>
                </div>
              </div>
                </div>
                
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped" id="datatablesSimple">
                      <thead>
                        <tr>
                          <th> ID Produk </th>
                          <th> Nama Produk</th>
                          <th> Kode Produk</th>
                          <th> Produk Kategori</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $ambildataproduct = mysqli_query($conn,"select * from product ");
                                        while($data = mysqli_fetch_array($ambildataproduct)){
                                        $id = $data['ProductID'];
                                            $nama = $data['ProductName'];
                                            if($data['ProductCategory']== NULL){
                                              $kategori = "Tidak Ada Kategory";
                                            }else{
                                              $kategori = $data['ProductCategory'];
                                            };
                                            $title = $data['ProductNumber'];

                                        
                                      ?>
                        <tr>
                          <td class="py-1"><?= $id; ?></td>
                          <td><?= $nama; ?></td>
                          <td><?= $kategori; ?></td>
                          <td><?= $title; ?></td>
                        </tr>
                        <?php 
                                   };
                                      ?>
                                      
                      </tbody>
                    </table>
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
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="js/productsales.js"></script>
<script src="js/productpurchase.js"></script>
<script src="js/jumlahproduk.js"></script>
<script src="js/scripts-table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
    <!-- endinject -->
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>