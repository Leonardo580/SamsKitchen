
<?php
 require('../config.php');
$db = config::getConnexion();
$code = $_GET['code'];
$sql = 'SELECT * FROM plat WHERE code=:code';
$stat = $db->prepare($sql);
$stat->execute([':code' => $code ]);
$r = $stat->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nomplat'])&&
    isset ($_POST['recette'])&&
    isset ($_POST['ingrediants'])&&
    isset ($_POST['prix'])
 ) {
   $nomplat = $_POST['nomplat'];
   $recette = $_POST['recette'];
   $ingrediants = $_POST['ingrediants'];
   $prix = $_POST['prix'];
  $sql = 'UPDATE plat SET nomplat=:nomplat ,recette=:recette, ingrediants=:ingrediants, prix=:prix WHERE code=:code';
  $stat = $db->prepare($sql);






  if ($stat->execute([':nomplat' => $nomplat, ':recette' => $recette,':ingrediants' => $ingrediants, ':prix' => $prix, ':code' => $code])) {
    header("Location: affichageplat.php");
  }
}

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
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

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
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
                <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addrestaurant.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un restaurant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addplat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un plat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichagerestaurant.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des restaurants </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="modifierplat.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modifier des plats</p>
                </a>
              </li>
            </ul>
          </li>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         
          
         
          
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>       
     </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Modifier un plat </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section id="main-content">
      <section class="wrapper">

        <div class="card card-primary card-outline">
              <div class="card-header">

        <h3><i class="fa fa-angle-right"></i> Modification un fournisseur</h3>

        
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            
            <div id="message"></div>
                <form class="cmxform form-horizontal style-form"  method="post" action="" id="myForm">
                  <div class="form-group ">
                    <label  class="control-label col-lg-2">Nomplat</label>
                    <div class="col-lg-10">

           <input class="form-control " value="<?= $r->nomplat; ?>"  name="nomplat" type="text" required />
                    </div>
                  </div>
                               <div class="form-group ">
                    <label  class="control-label col-lg-2">recette</label>
                    <div class="col-lg-10">

         <input class="form-control " value="<?= $r->recette; ?>"  name="recette" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label  class="control-label col-lg-2">ingrediants</label>
                    <div class="col-lg-10">

         <input class="form-control " value="<?= $r->ingrediants; ?>"  name="ingrediants" type="text" required />
                    </div>
                  </div>
                               <div class="form-group ">
                    <label  class="control-label col-lg-2">Prix</label>
                    <div class="col-lg-10">

           <input class="form-control " value="<?= $r->prix; ?>"  name="prix" type="float" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-primary"  type="submit">Modifier</button>
                      
                    </div>
                  </div>
                </form>
          </div>

        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
