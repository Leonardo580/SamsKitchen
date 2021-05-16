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
            echo "<h1>Check your email to verify your account</h1>";
            $msg="<html>
<head>
  <title>Sam's Kitchen</title>
</head>
<body>
  <a href='localhost/Integ/View/Front/index_SI.php?CIN= ". $u->getCIN() . " '>Click here to verify your account</a>
</body>
</html>";
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            mail($_POST["Email"],"Sam's Kitchen", $msg,$headers);
            //header("Location:Front/index_SI.php?CIN=" . $u->getCIN() . "");
        }
        else
            echo "<script type='text/javascript'>alert('Email is already exist');</script>";
    } else {
        $err = "Missing Information";
        echo "<script type='text/javascript'>alert('$err');</script>";
    }
?>

