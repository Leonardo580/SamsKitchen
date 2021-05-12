<?php
include "../Controller/articlesC.php";
if (isset($_GET['CIN'])){
    $articlesC->supprimeruser($_GET['CIN']);
    header('Location: Displayarticles.php');
}
?>

