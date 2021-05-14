<?php
$bdd=new PDO('mysql:host=localhost;dbname=projet;', 'root', '');
$allplat= $bdd->query('SELECT * FROM plat ORDER BY code');
if(isset($_GET['s']) AND !empty($_GET['s'])){
    $recherche =htmlspecialchars($_GET['s']);
    $allplat =$bdd->query('SELECT nomplat FROM plat where nomplat like "%',$recherche,'%" ORDER BY code DESC');
} 
?>