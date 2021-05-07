<?php
    include "../model/Fournisseur.php";
    include "../controller/FournisseurC.php";
   
 


 

    

    // create NewFournisseur
    
   
    // create an instance of the controller
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    
    
            $NewFournisseur = new Fournisseur(
                $_POST['nom'],
                $file,
                $_POST['numero'],
                $_POST['mail'],
                $_POST['adresse']
            );
            $NewFournisseurC = new FournisseurC();
            $NewFournisseurC->ajouterFournisseur($NewFournisseur);
           header('Location:affichage.php');
       

    



?>