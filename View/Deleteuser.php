<?php
include "../Controller/UsersC.php";
include "../Controller/ReviewsC.php";
session_start();

if (isset($_GET['CIN'])){
    {
        $userC = new UsersC();
        //$userC->supprimeruser($_GET['CIN']);
        $userC->disableuser($_GET['CIN']);
      session_start();
      session_destroy();
        header('Location:Front/index.html');
    }
}
else if (isset($_GET['id'])){
    $rc=new ReviewsC();
    $uc=new UsersC();
    $list=$rc->afficherreviews();
    foreach ($list as $l){
        if ($l['CIN']==$_GET['id'])
            $rc->supprimerreview($l['id']);
    }
    $uc->supprimeruser($_GET['id']);

    header('Location:Displayusers.php');

}
else if (isset($_SESSION['user'])){
    $u=$_SESSION['user'];
    $uc=new UsersC();
    $uc->disableuser($u->getCIN());
    session_destroy();
    header('Location:Front/index.html');
}
