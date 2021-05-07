<?php
session_start();
include_once '../Model/Users.php';
include_once '../Controller/UsersC.php';
$message="";
$userC = new UsersC();
if (isset($_POST["Email"]) &&
    isset($_POST["Password"])) {
    if (!empty($_POST["Email"]) &&
        !empty($_POST["Password"]))
    {   $message=$userC->connexionUser($_POST["Email"],$_POST["Password"]);
        $_SESSION['e'] = $_POST["Email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){

            header('Location:Front/index_SI.php?CIN='.$message.'');}
        else{
            $message='pseudo ou le mot de passe est incorrect';
            header('Location:Front/index.html');
        }}
    else
        $message = "Missing information";
}
?>