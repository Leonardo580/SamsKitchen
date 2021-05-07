<?php

include "../Controller/ReviewsC.php";

$rc=new ReviewsC();
$list=$rc->afficherreviews();
if (isset($_POST["sort"]))
    $list=$rc->sort();
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
    <h1>Display All</h1><hr>
    <form action="" method="post">
        <input type="hidden" name="sort" value="1">
        <input type="submit" value="Sort by rate" >
    </form>
    <table class="w3-table">
        <tr>
            <th>Id</th>
            <th>rate</th>
            <th>title</th>
            <th>text</th>
            <th>user's CIN</th>
            <th>Delete</th>
            <th>modifier</th>
        </tr>
        <?php
        foreach ($list as $l){
            if ($l['CIN']==$_GET['CIN']){
            ?>
        <tr>
            <td><?php echo $l['id'];?></td>
            <td><?php echo $l['rate'];?></td>
            <td><?php echo $l['title'];?></td>
            <td><?php echo $l['text'];?></td>
            <td><?php echo $l['CIN'];?></td>
            <td>
                <a href="Deletereview.php?id=<?PHP echo $l['id']; ?>"> Delete </a>
            </td>
            <td>
                <a href="Modifyreview.php?id=<?PHP echo $l['id']; ?>"> Modify </a>
            </td>
        </tr>
        <?php }} ?>
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

