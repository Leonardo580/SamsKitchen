<?php

require "../Controller/FournisseurC.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM Fournisseur WHERE `nom` like '%$search%' ";
$db = config::getConnexion();
$listefournisseur=$db->query($sql_1);

}

foreach ($listefournisseur as $fg => $value):
$output="




                  <h4>fournisseur N ".$value['id'];." </h4>


                  <li>Nom : ".$value['nom'];." </li>
                  <li>Numero: ".$value['numero'];." </li>
                  <li>Adresse : ".$value['adresse'];."</li>

                <a class=btn btn-primary href=../controller/supprimerFour.php?id= ".$value['id'];." >Supprimer</a>
                <a class=btn btn-primary href=modi.php?id= ".$value['id'];." >Modifier</a>


    ";
}
echo $output;

