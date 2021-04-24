<?php
include "../config.php";
include "../Model/Users.php";

class UsersC
{
    function ajouteruser($user){
        $sql="INSERT into users values(:CIN,:FullName,:Age,:Email, :Password, :isActive)";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute([
                'CIN' => $user->getCIN(),
                'FullName' => $user->getFullName(),
                'Age' => $user->getAge(),
                'Email' => $user->getEmail(),
                'Password' => $user->getPassword(),
                'isActive' => true
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
            $query=$db->prepare(
            'update users set
            FullName=:FullName,
            Age=:Age,
            Email=:Email,
            Password=:Password,
            isActive=:isActive
            where (CIN=:CIN)');
            $query->execute([
                'FullName' => $user->getFullName(),
                'Age' => (int)$user->getAge(),
                'Email' => $user->getEmail(),
                'Password' => $user->getPassword(),
                'isActive' =>true,
                'CIN' => (int)$cin
            ]);

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function rechercheuser($cin){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from users where (CIN=:CIN)");
            $query->bindValue(':CIN',$cin);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }
    function searchusers($cin){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from users where (FullName like :CIN);");
            $cin=$cin."%";
            $query->bindValue(':CIN',$cin);
            $query->execute();
            return $query->fetchAll();
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }

}