<?php
include_once "../Controller/UsersC.php";
include_once "../Model/Users.php";
$err="";
$u=null;
$uc=new UsersC();
if (isset($_POST['CIN']) && isset($_POST['FullName']) && isset($_POST['Age']) && isset($_POST['Email']) && isset($_POST['Password']))
    if (!empty($_POST['CIN']) && !empty($_POST['FullName']) && !empty($_POST['Age']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
        $u = new Users(($_POST['CIN']), ($_POST['FullName']), ($_POST['Age']), ($_POST['Email']), ($_POST['Password']),true);
        $uc->ajouteruser($u);
        header('Location:Front/index_SI.html');
    }
else {
    $err = "Missing Information";
    echo "<script type='text/javascript'>alert('$err');</script>";
}
?>

