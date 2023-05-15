<?php

function checkUser($users, $nom, $contrasenya)
{
    session_start();
    //rebem paramtres form
    $rol = "";
    //param logica user
    $frase = 'AvuiFaBonsolNosabran%Dequevaaquestacontrasenya-#^';
    $missatgeDigest = hash('sha512', $contrasenya . $frase);
    $login = false;
    $i = 0;

    while (!$login && count($users) > $i) {
        echo "vuelta";
        if ($users[$i]['nom'] == $nom && $users[$i]['password'] == $missatgeDigest) {
            $login = true;
            $rol = $users[$i]["rol"];
            echo "exito";
        }
        $i++;
    }

    if ($login) {
        $_SESSION["name"] = $nom;
        $_SESSION["rol"] = $rol;
    }

    if (isset($_SESSION["rol"]) && $_SESSION["rol"] = "admin") {
        header("Location: ./index.php?action=show");
    } elseif (isset($_SESSION["rol"]) && $_SESSION["rol"] = "editor") {
        header("Location: ./index.php?action=showProd");
    } else {
        header("Location: ./index.php");
    }
}

function logoutUser()
{
    session_start();
    session_unset();
    session_destroy();
    header("Location: ./index.php");
}
?>