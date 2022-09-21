<?php
$usuario = $_POST ["username"];
$contrasenia = $_POST ["password"];

$ckusername = "admin";
$ckpassword = "1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
   header ("location:https://www.potrerodigital.org");
}
else {
    header ("location:error.html");
}

?>