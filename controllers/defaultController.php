<?php
/* el controlador principal que dirije a los views, se encargara de llamar funciones
 */
require("./entities/Producte.php");
require("./entities/User.php");
listProducts();
function listUsers()
{
    //va a ser una variable
    $users = getUsers();
    require("./view/viewListUsers.php");
}

function listProducts() {
    $producte = getProducts();
    require("./view/viewListProducts.php");
}


function deleteUser($id)
{
    modDelete($id);
    require_once("./entities/User.php");


}
function upUser($id, $nom, $rol, $usuari)
{
    return modUpdateUser($id, $nom, $rol, $usuari);
}

function addUser($nom, $rol, $usuari)
{
    // para quitar los datos de $_POST, he probado con unset($_POST) pero no funciona
    //el header evita q cuando se actualize la pagina se repitan los mismos inserts
    return modAddUser($nom, $rol, $usuari);
}

function loadMainView()
{
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

function loadShowUserView($id)
{
    $users = getUser($id);
    require_once("./view/viewUser.php");
}


// PRODUCTE
function loadShowProducteView($id) {
    $producte = getProducte($id);
    require_once("./view/viewProduct.php");
}

function loadEditProdView($id) {
    $producte = getProducte($id);
    require_once("./view/viewProductModify.php");
}

function deleteProd($id) {
    modDeleteProd($id);
    require_once("./entities/Producte.php");

}


?>