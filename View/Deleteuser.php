<?php
include "../Controller/UsersC.php";
if (isset($_GET['CIN'])){
    $userC=new UsersC();
    $userC->supprimeruser($_GET['CIN']);
    header('Location:Front/index.html');
}
