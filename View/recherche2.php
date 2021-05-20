<?php

require "../Controller/IngredientC.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM Ingredient WHERE `nom` like '%$search%' ";
$db = config::getConnexion();
$listeingredient=$db->query($sql_1);

}

foreach ($listeingredients as $fg => $value):
$output=" 

                 
            
                
                  <h4>Ingredients N ".$value['code'];." </h4>
                  
           
                  <li>Nom : ".$value['nom'];." </li>
                  <li>Quantite: ".$value['quantite'];." </li>
                  <li>Prix : ".$value['prix'];."</li>
                  <li>Fournisseur : ".$value['idf'];."</li>

                <a class=btn btn-primary href=../controller/supprimerIngred.php?id= ".$value['code'];." >Supprimer</a>
                <a class=btn btn-primary href=modi2.php?id= ".$value['code'];." >Modifier</a>
                
             
    ";
}
echo $output;

