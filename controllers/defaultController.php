<?php
/* el controlador principal que dirije a los views, se encargara de llamar funciones
 */
require("./entities/Producte.php");
require("./entities/User.php");

function listUsers()
{
    //va a ser una variable
    $users = getUsers();
    require_once("./view/viewListUsers.php");
}

function listProducts()
{
    $producte = getProducts();
    require_once("./view/viewListProducts.php");
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

function addUser($nom, $rol, $usuari, $password)
{
    // para quitar los datos de $_POST, he probado con unset($_POST) pero no funciona
    //el header evita q cuando se actualize la pagina se repitan los mismos inserts
    return modAddUser($nom, $rol, $usuari, $password);
}

function loadMainView()
{
    listUsers();
    listProducts();
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

function listProdDefault()
{
    $producte = getProducts();
    require_once("./view/viewListProductsDef.php");
}


// PRODUCTE
function loadShowProducteView($id)
{
    $producte = getProducte($id);
    require_once("./view/viewProduct.php");
}

function loadEditProdView($id)
{
    $producte = getProducte($id);
    require_once("./view/viewProductModify.php");
}

function deleteProd($id)
{
    modDeleteProd($id);
    require_once("./entities/Producte.php");

}

function loadNewProdView()
{
    require_once("./view/viewNewProduct.php");
}

function addProducte($nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides)
{
    modAddProducte($nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides);

}

function loadUserSesion()
{
    require_once("./view/viewLoginUser.php");
}

function passUserSesion($nom, $contrasenya)
{
    $users = getUsers();
    require_once("./controllers/login.php");
    checkUser($users, $nom, $contrasenya);
}

function upProd($id, $nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides)
{
    modUpProducte($id, $nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides);

}




?>