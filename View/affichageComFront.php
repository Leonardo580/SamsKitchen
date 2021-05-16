<?php

include "../Controller/CommandesC.php";

$comc=new CommandesC();
$list=$comc->afficherCommande();
if (isset($_POST["sort"]))
    $list=$comc->sort();
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<script src="../user_check.js" ></script>
<style>
    body, html {height: 100%}
    body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
    .menu {display: none}
    .bgimg {
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("/w3images/pizza.jpg");
        min-height: 90%;
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button">ACCEUIL</a>
        <a href="#menu" class="w3-bar-item w3-button">MENU</a>
        <a href="#about" class="w3-bar-item w3-button">A PROPOS</a>
    </div>
    <h1>Liste des commandes</h1><hr>
  
    <table class="w3-table">
        <tr>
                        <th>Référence</th>
                        <th>Nom</th>
                        <th>Quantite</th>
                        <th>PrixC</th>
                        <th>TypeC</th>
                        <th>idLivr</th>
                        <th>Supprimer </th>
                        <th>Modifier</th>
        </tr>
        
        <?php foreach ($list as $l){ ?>
        <tr>
                        <td><?php echo $l['RefC'] ?></td>
                        <td><?php echo $l['nomC'] ?></td>
                        <td><?php echo $l['quantiteC'] ?></td>
                        <td><?php echo $l['prixC'] ?></td>
                        <td><?php echo $l['typeC'] ?></td>
                        <td><?php echo $l['IdLivr'] ?></td>
                        <td><a class="btn btn-outline-info" OnClick="return confirm('Voulez vous vraiment supprimer cette commandes ?');" href="../Controller/supprimerComFront.php?RefC=<?php echo $l['RefC']; ?>">Supprimer</a></td>
                        <td><a class="btn btn-outline-info" href="modiComFront.php?RefC=<?php echo $l['RefC']; ?>">Modifier</a></td>
                    </tr>
        <?php } ?>
    </table>



        <footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
        </footer>

        <script>
            // Tabbed Menu
            function openMenu(evt, menuName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("menu");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                }
                document.getElementById(menuName).style.display = "block";
                evt.currentTarget.firstElementChild.className += " w3-red";
            }
            document.getElementById("myLink").click();
        </script>

</body>
</html>