    <?php

include "../controller/IngredientC.php";

$rc=new IngredientC();
$list=$rc->trierIngredient();

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
                syrine
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addCom.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter une commande</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addLiv.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un livreur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichageCom.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des commandes </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichageLiv.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des livreurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                mehdi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un fournisseur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un ingredient</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des fournisseurs </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichage2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des ingredients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Mehrez
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
                <a href="addplat1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter un plat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichagerestaurant.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des restaurants </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="affichageplat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau des plats</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          </a>
          <li class="nav-item">
            <a href="Displayusers.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                display all users

              </p>
            </a></li>
          <li class="nav-item">
            <a href="Displayreviews_bk.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Display reviews

              </p>
            </a></li>
          <li class="nav-item">
            <a href="Stat.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Stat

              </p>
            </a></li>
          <li class="nav-item">
            <a href="Displayarticles.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                display all articles

              </p>
            </a></li>

        </ul>




      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Afficher les ingredients </h3>
        <a class="btn btn-primary" href="../views/tri2.php?prix=<?php echo $value['prix']; ?>">Trier</a>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="card card-primary card-outline">
              <div class="card-header">

        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">


       <section id="main-content">
      <section class="wrapper site-min-height">

        <div class="row">

          <div class="">
                                                                            <?php

                  include_once '../model/Ingredient.php';
                  include_once '../controller/IngredientC.php';

                  $ingredientC=new IngredientC();
                    $listeingredient=$ingredientC->afficherIngredient();

                  foreach ($listeingredient as $fg => $value):




                  ?>



                  <div class="card card-primary card-outline">
              <div class="card-header">
                  <h4>ingredient N<?php echo $value['code']; ?> </h4>
                  <hr>



                <ul class="pricing">
                  <li>Nom :<?php echo $value['nom']; ?></li>
                  <li>Quantite:<?php echo $value['quantite']; ?></li>
                  <li>Prix :<?php echo $value['prix']; ?></li>

                </ul>
                <a class="btn btn-primary" href="../controller/supprimerIngred.php?code=<?php echo $value['code']; ?>">Supprimer</a>

                <a class="btn btn-primary" href="modi2.php?code=<?php echo $value['code']; ?>">Modifier</a>

              </div>

            </div>
            <?php        endforeach;       ?>
            <!-- end col-4 -->

            <!-- end col-4 -->

            <!-- end col-4 -->
          </div>


          <!--  /col-lg-12 -->
        </div>

        <!--  /row -->
      </section>
      <!-- /wrapper -->
    </section>


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
