<?php
include "../Controller/commentsC.php";

$rc=new commentsC();

if (isset($_GET["CIN"])){
    $rc->supprimerreview($_GET["CIN"]);
    header('Location:Displaycomments.php');
}
