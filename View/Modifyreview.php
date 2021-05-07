<?php
include_once "../Controller/ReviewsC.php";
include_once "../Model/Reviews.php";
$err="";
$r=null;
$rc=new ReviewsC();
if (isset($_POST['rate']) && isset($_POST['title']) && isset($_POST['text']))
    if (!empty($_POST['rate']) && !empty($_POST['title']) && !empty($_POST['text'])){
        $r=new Reviews(0,$_POST['rate'], $_POST['title'], $_POST['text'],$_POST['CIN']);
        $rc->modifierreview($r,$_GET['id']);
        header("Location:Displayreviews.php?CIN=".$_POST['CIN']."");
    }
    else {
        $err = "Missing Information";
        echo "<script type='text/javascript'>alert('$err');</script>";
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
                <a href="#" class="w3-bar-item w3-button">Add</a>
                <a href="#" class="w3-bar-item w3-button">Display All</a>
            </div>
        </div>
    </div>
</div>
<div id="error">
    <?php echo $err; ?>
</div>
<?php
if (isset($_GET['id'])){
    $re=$rc->recherchereview($_GET['id']);
?>

<br>
<br>
<br>
<form action=""  method="post" >
    <p><label>Rate</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="rate" required  name="rate" value="<?php echo $re->rate;?>"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="hidden"  required  name="CIN" value="<?php echo $re->CIN;?>"></p>
    <p><label>Subject</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="title"  required name="title" value="<?php echo $re->title;?>"></p>
    <p><label>Text</label></p>
    <p><textarea rows="5" class="w3-input w3-padding-16 w3-border" type="text" placeholder="text" required name="text" ><?php echo $re->text;?></textarea></p>
    <p><button class="w3-button w3-light-grey w3-block" type="submit" >Modify Review</button></p>
</form>
<?php } ?>
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
