<?php
include "../config.php";
include "../Model/comments.php";

class commentsC
{
    function ajouterreview($r){
        $sql="insert into comm(rate, title, text, CIN) values(:rate, :title, :text ,:CIN)";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute([
                'rate' => $r->getRate(),
                'title' => $r->getTitle(),
                'text' => $r->getText(),
                'CIN' => $r->getCIN()
            ]);
        }catch (Exception $e){
            echo 'error' . $e->getMessage();
        }
    }
    function afficherreviews(){
        $db=config::getConnexion();
        try {
            return $db->query("select * from comm");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function sort(){
        $db=config::getConnexion();
        try {
            return $db->query("select * from comm order by rate desc ;");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function supprimerreview($CIN){
        $db=config::getConnexion();
        $req=$db->prepare("delete from comm where CIN=:CIN");
        $req->bindValue(':CIN',$CIN);
        try {
            $req->execute();
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function modifierreview($r,$CIN){
        try {
            $db=config::getConnexion();
            $query=$db->prepare(
                'update comm set
            rate=:rate,
            title=:title,
            text=:text
            where (CIN=:CIN)');
            $query->execute([
                'rate' => $r->getRate(),
                'title' => $r->getTitle(),
                'text' => $r->gettext(),
                'CIN' => $CIN
            ]);

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function recherchereview($CIN){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from comm where (CIN=:CIN)");
            $query->bindValue(':CIN',$CIN);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }
}