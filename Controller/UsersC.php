<?php
include "../config.php";
require_once "../Model/Users.php";

class UsersC
{
    function ajouteruser($user){
        $sql="INSERT into users values(:CIN,:FullName,:Age,:Email)";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute([
                'CIN' => $user->getCIN(),
                'FullName' => $user->getFullName(),
                'Age' => $user->getAge(),
                'Email' => $user->getEmail()
            ]);
        }catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }
    }
    function afficherusers(){
        $db=config::getConnexion();
        try {
            return $db->query("select * from users");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function supprimeruser($cin){
        $db=config::getConnexion();
        $req=$db->prepare("delete from users where cin=:cin");
        $req->bindValue(':cin',$cin);
        try {
            $req->execute();
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function modifieruser($user,$cin){
        try {
            $db=config::getConnexion();
            $query=$db->prepare("
            update users set
            FullName=:FullName,
            Age=:Age,
            Email=:Eamil
            where (CIN=:CIN)");
            $query->execute([
                'FullName' => $user->getFullName(),
                'Age' => $user->getAge(),
                'Email' => $user->getEmail(),
                'CIN' => $cin
            ]);
        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function rechercheuser($id){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from users where (CIN=:CIN)");
            $query->execute();
            $user=$query->fetch();
            return $user;
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }
}