<?php
include "../Controller/articlesC.php";
$articlesC=new articlesC();
if (isset($_GET['CIN'])){
    $articlesC->supprimeruser($_GET['CIN']);
    header('Location:Displayarticles.php');
}
?>

