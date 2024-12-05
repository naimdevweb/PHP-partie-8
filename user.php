<?php
// if(isset($_GET['lastname'],$_GET['firstname'], $_GET['age']))
// {
   
//     echo $_GET['lastname' ]. "<br>";
//     echo $_GET['firstname' ] . "<br>";
//     echo $_GET['age' ] . "<br>";


   
    
// }
session_start();
echo ($_SESSION['lastname'].$_SESSION['firstname'].$_SESSION['age']);

?>