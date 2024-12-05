

<?php

$lastname = "Naim";
$firstname = "Hamidi";
$age = "24";



session_start();
$_SESSION['lastname']= "Naim";
$_SESSION['firstname']= "Hamidi";
$_SESSION['age']= 24;


if(isset($_POST['uname']) && !empty($_POST['uname'])){
$cookie_value=$_POST['uname'];
setcookie('user',$cookie_value);
}

if(isset($_POST['psw']) && !empty($_POST['psw'])){
    $cookie_value=$_POST['psw'];
    setcookie('user',$cookie_value);
    }



if(isset($_COOKIE['user'])&& !empty($_COOKIE['user'])) {
    echo "user is".$_COOKIE;
} else {
    echo "Cookies are not set";
}
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stylisé</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Informations du Client</h1>
        <form action="./index.php" method="post">



<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

        

        <input type="submit" value="Envoyer">

    </form>

        <div class="output">
            <?php
            if (isset($_POST["userAgent"])){
                echo "<p>🖥️ User Agent : " . htmlspecialchars($_POST["userAgent"]) .  ($_SERVER['HTTP_USER_AGENT'])."</p>";
            }
            if (isset($_POST["ipAddress"])){
                echo "<p>🌐 Adresse IP : " . htmlspecialchars($_POST["ipAddress"]) . $_SERVER['SERVER_ADDR'] . "</p>";
            }
            if (isset($_POST["serverName"])){
                echo "<p>📡 Nom du Serveur : " . htmlspecialchars($_POST["serverName"]) . $_SERVER['SERVER_NAME'] .  "</p>";
            }
           
            ?>
            <a href=<?= "./user.php?lastname=" . $lastname . "&firstname=" . $firstname . "&age=" . $age?>>afficher</a>
        </div>
    </div>
</body>
</html>