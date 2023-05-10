<?php
/* el controlador principal que dirije a los views, se encargara de llamar funciones
*/
echo "holasfasf";
require("./entities/Producte.php");
require("./entities/User.php");
function listUsers(){
    //va a ser una variable
    $users = getUsers();
    require("./view/viewListUsers.php");
}
?>