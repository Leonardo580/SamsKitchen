<?php
include "../config.php";
include "../Model/articles.php";

class articlesC
{
    function ajouteruser($user){
        $sql="INSERT into arti values(:CIN,:FullName,:Age,:Email)";
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
            return $db->query("select * from arti");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function supprimeruser($CIN){
        $db=config::getConnexion();
        $req=$db->prepare("DELETE FROM arti where CIN=:CIN");
        $req->bindValue(':CIN',$CIN);
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
            'UPDATE arti set
            FullName=:FullName,
            Age=:Age,
            Email=:Email,
           
            where (CIN=:CIN)');
            $query->execute([
                'FullName' => $user->getFullName(),
                'Age' => (int)$user->getAge(),
                'Email' => $user->getEmail(),
                'CIN' => (int)$cin
            ]);

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    


    function rechercheuser($cin){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from arti where (CIN=:CIN)");
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
            $query=$db->prepare("select * from arti where (FullName like :CIN);");
            $cin=$cin."%";
            $query->bindValue(':CIN',$cin);
            $query->execute();
            return $query->fetchAll();
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }

}

