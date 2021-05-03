<?php
include_once "../config.php";
include_once "../Model/Users.php";

class UsersC
{
    function ajouteruser($user){
        $sql="INSERT into users(FullName, Age, Email, Password,isActive) values(:FullName,:Age,:Email, :Password, :isActive)";
        $db=config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute([
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
                'isActive' =>$user->getIsActive(),
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
    function disableuser($cin){
        $ou=$this->rechercheuser($cin);
        $nu=new Users($ou->CIN,$ou->FullName,$ou->Age,$ou->Email, $ou->Password,false);
        $this->modifieruser($nu,$cin);
    }
    function getLastId(){
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT `AUTO_INCREMENT`
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'projet'
AND TABLE_NAME = 'users';");
           $query->execute();

            return (int)$query->fetch()['AUTO_INCREMENT'];
        }catch (Exception $e ){
            die('Error: '.$e->getMessage());
        }
    }
    function connexionUser($email,$password){
        $sql="SELECT * FROM users WHERE Email='" . $email . "' and Password = '". $password."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==0) {
                $message = "pseudo ou le mot de passe est incorrect";
            } else {
                $x=$query->fetch();
                $message = $x['CIN'];
            }
        }
        catch (Exception $e){
            $message= " ".$e->getMessage();
        }
        return $message;
    }

}