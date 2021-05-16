<?php
include_once "../Controller/CommandesC.php";
include_once "../Model/Commandes.php";

$error = "";


$NewCommande = null;

// create an instance of the Controller
$NewCommandeC = new CommandesC();
if (
  isset($_POST['RefC']) &&
  isset($_POST['nomC']) &&
  isset($_POST['quantiteC']) &&
  isset($_POST['prixC']) &&
  isset($_POST['typeC']) &&
  isset($_POST['IdLivr'])

) {
    if  (
      !empty($_POST['RefC']) &&
      !empty($_POST['nomC']) &&
      !empty($_POST['quantiteC']) &&
      !empty($_POST['prixC']) &&
      !empty($_POST['typeC'])&&
      !empty($_POST['IdLivr'])
        )

    {
        $NewCommande = new Commandes(
          ($_POST['RefC']),
          ($_POST['nomC']),
          ($_POST['quantiteC']),
          ($_POST['prixC']),
         ($_POST['typeC']),
         ($_POST['IdLivr'])
        );
        $NewCommandeC->ajouterCommande($NewCommande);
        header("Location:affichageComFront.php");
        //header("Location:Front/index_SI.php?RefC=".$_POST['RefC']."");
    }
    else
        $error = "Missing information";
}


?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
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
        <a href="Front/index_SI.html" class="w3-bar-item w3-button">ACCEUIL</a>
        <a href="" class="w3-bar-item w3-button">ARTICLE</a>
        <a href="Deleteuser.php" class="w3-bar-item w3-button">Delete Account</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Reviews</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="" class="w3-bar-item w3-button">Add</a>
                <a href="Displayreviews.php" class="w3-bar-item w3-button">Display All</a>
            </div>
        </div>

        
    </div>
</div>
<div id="error">
    <?php echo $err; ?>
</div>


<br>
<br>
<br>
<script>
    function check() {

        let RefC=document.getElementById('RefC').value;
        let NomC=document.getElementById('NomC').value;

        if (parseInt(RefC)>5)
            alert("Reference doit être inférieur à 5");
        else if (NomC.match("[0-9$-/:-?]"))
            alert("Nom Commande doit contenir des caractères seulement");
        else return true;
        return false;

    }
</script>
    <form action=""  method="post" onsubmit="return check()">
        <p><label>RefC</label></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="RefC" required  name="RefC" value="<?php echo $_GET['RefC'];?>"></p>
        <p><label>NomC</label></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="NomC" required  name="NomC" id="NomC"></p>
        <p><label>QuantiteC</label></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="quantiteC"  required name="quantiteC" id="quantiteC"></p>
        <p><label>PrixC</label></p>
        <p><input class="w3-input w3-padding-16 w3-border"  placeholder="prixC" required name="prixC" id="prixC"></p>
        <p><label>Type</label></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="typeC"  required name="typeC" id="typeC"></p>
        <p><label>IdLivr</label></p>
        <p><input class="w3-input w3-padding-16 w3-border"  placeholder="IdLivr" required name="IdLivr" id="IdLivr"></p>
        

        <p><button class="w3-button w3-light-grey w3-block" type="submit" >Ajouter Commande</button></p>
    </form>
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