<?php
include "../Controller/ReviewsC.php";

$rc=new ReviewsC();

if (isset($_GET["id"])){
    $rc->supprimerreview($_GET["id"]);
    header('Location:Displayreviews.php');
}
