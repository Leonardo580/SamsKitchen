<?php
include "../Controller/UsersC.php";
$c=substr($_GET['CIN'],11,4);
if (isset($c)){
    $userC=new UsersC();
    $userC->supprimeruser($c);
    header('Location:Front/index.html');
}
