<?php
/* el controlador principal que dirije a los views, se encargara de llamar funciones
*/
require("./entities/Producte.php");
require("./entities/User.php");
function listUsers(){
    //va a ser una variable
    $users = getUsers();
    require("./view/viewListUsers.php");
}


function deleteUser($id) {
    modDelete($id);
    require_once("./entities/User.php");


}
function upUser($id, $nom, $rol, $usuari)
	{
		return modUpdateUser($id, $nom, $rol, $usuari);
	}

    function addUser($nom, $rol, $usuari) {
        return modAddUser($nom, $rol, $usuari);
    }
function loadMainView() {
    listUsers();
}

function loadEditUserView($id)
	{
		$result = getUser($id);
		require_once("./view/viewUserModify.php");
	}

    function loadNewUserView()
	{
		require_once("./view/viewNewUser.php");
	}



?>