<?php
    include "../Model/plat.php";
    include "../Controller/platC.php";
    // create Newplat
    // create an instance of the Controller
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    
    
            $Newplat = new plat(
                $_POST['nomplat'],
                $file,
                $_POST['recette'],
                $_POST['ingrediants'],
                $_POST['prix']
            );
            $NewplatC = new platC();
            $NewplatC->ajouterplat($Newplat);
           header('Location:affichageplat.php');

?>
