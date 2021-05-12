<?php
include_once "../Controller/articlesC.php";
include_once "../Model/articles.php";
session_start();
$err="";
$u=null;
$uc=new articlesC();
if (isset($_POST['CIN']) && isset($_POST['FullName']) && isset($_POST['Age']) && isset($_POST['Email']))
if (!empty($_POST['CIN']) && !empty($_POST['FullName']) && !empty($_POST['Age']) && !empty($_POST['Email'])) {
        $u = new articles(($_POST['CIN']), ($_POST['FullName']), ($_POST['Age']), ($_POST['Email']));
        $uc->ajouteruser($u);
        $_SESSION['user']=$u;
        header("Location:Front/index_SI_az.php?CIN=".$_POST['CIN']."");
    }
else {
    $err = "Missing Information";
    echo "<script type='text/javascript'>alert('$err');</script>";
}
?>

