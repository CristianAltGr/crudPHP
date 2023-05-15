<?php

require_once("./entities/User.php");
$users = getUsers();

//rebem paramtres form
$user = isset($_POST["name"]) ? $_POST["name"] : "Desconegut";
$contrasenya = isset($_POST["pass"]) ? $_POST["password"] : "Desconegut";
$frase = 'AvuiFaBonsolNosabran%Dequevaaquestacontrasenya-#^';
$missatgeDigest = hash('sha512', $contrasenya . $frase);
$login = false;
$rol;
//  EN ESTA PÀGINA COMPROVAMOS SI EL USUARIO EXISTE EN NUESTRA BD I REDIRIGIMOS A HOME DE CADA UNO TMB SI NO EXISTE 

while (current($users) !== FALSE) {

    if (key($users) == $user && $missatgeDigest == $users[key($users)]) {
        $login = true;
        $rol = $users["rol"];
    }
    next($users);
}

if ($login) {
    $_SESSION["name"] = isset($_POST["name"]) ? $_POST["name"] : $_SESSION["name"];
    $_SESSION["rol"] = $rol;
    header("Location: ./index.php");
} else {
    exit();
}
?>