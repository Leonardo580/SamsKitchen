<?php
include "../Controller/articlesC.php";
$articlesC=new articlesC();
session_start();
if (isset($_GET['CINAR'])){
    $articlesC->supprimeruser($_GET['CINAR']);
    header('Location:Displayarticles.php');
}
if (isset($_GET['CIN'])){
    $articlesC->supprimeruser($_GET['CIN']);
    header('Location:Front/index_SI.php?CIN='.$_SESSION["CIN"].'');
}
?>

