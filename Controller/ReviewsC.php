<?php
include "../config.php";
include "../Model/Reviews.php";

class ReviewsC
{
    function ajouterreview($r){
        $sql="insert into reviews(rate, title, text, CIN) values(:rate, :title, :text ,:CIN)";
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
            return $db->query("select * from reviews");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function sort(){
        $db=config::getConnexion();
        try {
            return $db->query("select * from reviews order by rate desc ;");
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function supprimerreview($id){
        $db=config::getConnexion();
        $req=$db->prepare("delete from reviews where id=:id");
        $req->bindValue(':id',$id);
        try {
            $req->execute();
        }catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
    }
    function modifierreview($r,$id){
        try {
            $db=config::getConnexion();
            $query=$db->prepare(
                'update reviews set
            rate=:rate,
            title=:title,
            text=:text
            where (id=:id)');
            $query->execute([
                'rate' => $r->getRate(),
                'title' => $r->getTitle(),
                'text' => $r->gettext(),
                'id' => $id
            ]);

        }catch(PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
    function recherchereview($id){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("select * from reviews where (id=:id)");
            $query->bindValue(':id',$id);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }
}