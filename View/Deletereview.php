<?php
include "../Controller/ReviewsC.php";

$rc=new ReviewsC();
session_start();
if (isset($_GET["id"])){
    $rc->supprimerreview($_GET["id"]);
    header('Location:Displayreviews.php?CIN='.$_SESSION['CIN'].'');
}
