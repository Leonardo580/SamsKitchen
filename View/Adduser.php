<?php
include_once "../Controller/UsersC.php";
include_once "../Model/Users.php";
session_start();
$err = "";
$u = null;
$uc = new UsersC();
if (isset($_POST['FullName']) && isset($_POST['Age']) && isset($_POST['Email']) && isset($_POST['Password']))
    if (!empty($_POST['FullName']) && !empty($_POST['Age']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
        if ($uc->searchmail($_POST['Email'])=="null") {
            $u = new Users(0, ($_POST['FullName']), ($_POST['Age']), ($_POST['Email']), ($_POST['Password']), true);
            $u->setCIN($uc->getLastId());
            $uc->ajouteruser($u);
            $_SESSION['e'] = $u->getEmail();

            $_SESSION['user'] = $u;
            header("Location:Front/index_SI.php?CIN=" . $u->getCIN() . "");
        }
        else
            echo "<script type='text/javascript'>alert('Email is already exist');</script>";
    } else {
        $err = "Missing Information";
        echo "<script type='text/javascript'>alert('$err');</script>";
    }
?>

