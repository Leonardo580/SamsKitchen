<?php
include "../Controller/UsersC.php";
if (isset($_POST['CIN'])){
    $userC=new UsersC();
    $userC->supprimeruser($_POST['CIN']);
    header('Location:Front/index.html');
}
