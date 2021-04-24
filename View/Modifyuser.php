<?php

include "../Controller/UsersC.php";
$err="";
$u=null;
$uc=new UsersC();
if (isset($_POST['CIN']) && isset($_POST['FullName']) && isset($_POST['Age']) && isset($_POST['Email']) && isset($_POST['Password']))
    if (!empty($_POST['CIN']) && !empty($_POST['FullName']) && !empty($_POST['Age']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
        $u = new Users(($_POST['CIN']), ($_POST['FullName']), ($_POST['Age']), ($_POST['Email']), ($_POST['Password']),true);
        $uc->modifieruser($u,$_GET['CIN']);
        print_r($_GET);
        print_r($_POST);
        //header("Location:Front/index_SI.php?CIN=".$_POST['CIN']."");
    }
    else {
        $err = "Missing Information";
        echo "<script type='text/javascript'>alert('" . $err . "');</script>";
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
    </div>
</div>
<div id="error">
    <?php echo $err; ?>
</div>

<?php
if (isset($_GET['CIN'])) {
    $user = $uc->rechercheuser($_GET['CIN']);
//var_dump($_SESSION['user']);
?>
<script>
      function check1() {

        let cin=document.getElementById('CIN').value;
        let Age=document.getElementById('Age').value;
        let Email=document.getElementById('Email').value;
        let Password=document.getElementById('Password').value;
        if (cin.toString().length!==4)
          alert("CIN must be 4 number");
        else if (Age<18)
          alert("you must be above 18 years old");
        else if (Email.match("^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$")==null)
          alert("Not a valid email address");
        else if (Password.match("^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$")==null)
          alert("your password is too weak");
        else return true;
        return false;

      }
    </script>
    <br>
    <br>
    <br>
<form action=""  method="post" onsubmit="return check1()">
    <p><label>CIN</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CIN"  maxlength="4" disabled value="<?php echo $user->CIN; ?>"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="hidden" placeholder="CIN"  name="CIN"  value="<?php echo $user->CIN; ?>"></p>
    <p><label>FullName</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="FullName" value="<?php echo $user->FullName; ?>"></p>
    <p><label>Age</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Age" required name="Age" value="<?php echo $user->Age; ?>"></p>
    <p><label>Email</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Your Email" required name="Email" value="<?php echo $user->Email; ?>"></p>
    <p><label>Password</label></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="Password" value="<?php echo $user->Password; ?>"></p>
    <p><button class="w3-button w3-light-grey w3-block" type="submit" >Modify</button></p>
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
