<?php
include "../config.php";
include "../Model/Users.php";

class UsersC
{
    function ajouteruser($user){
        $sql="INSERT into article values(:IDa,:titre,:categorie,:IDp)";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute([
                'IDa' => $user->getIDa(),
                'titre' => $user->gettitre(),
                'categorie' => $user->getcategorie(),
                'IDp' => $user->getIDp()
            ]);
        }catch (Exception $e){
            echo 'Error: '.$e->getMesscategorie();
        }
    }
    function afficherusers(){
        $db=config::getConnexion();
        try {
            return $db->query("select * from article");
        }catch (Exception $e){
            die('Error: '.$e->getMesscategorie());
        }
    }
    function supprimeruser($IDa){
        $db=config::getConnexion();
        $req=$db->prepare("delete from article where IDa=:IDa");
        $req->bindValue(':IDa',$IDa);
        try {
            $req->execute();
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    }
    function modifieruser($user,$IDa){
        try {
            $db=config::getConnexion();
            $query=$db->prepare("
            update article set
            (titre=:titre,
            categorie=:categorie,
            IDp=:IDp)
            where (IDa=:IDa)");
            $query->execute([
                'titre' => $user->gettitre(),
                'categorie' => $user->getcategorie(),
                'IDp' => $user->getIDp(),
                'IDa' => $IDa
            ]);
        }catch(PDOException $e) {
            echo "Error: ".$e->getMesscategorie();
        }
    }
    function rechercheuser($IDa){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from article where (IDa=:IDa)");
            $query->bindValue(':IDa',$IDa);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e ){
            die('Error: '.$e->getMesscategorie());
        }
    }
    function searchusers($IDa){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from article where (IDa like :IDa);");
            $IDa=$IDa."%";
            $query->bindValue(':IDa',$IDa);
            $query->execute();
            return $query->fetchAll();
        }catch (Exception $e ){
            die('Error: '.$e->getMesscategorie());
        }
    }




