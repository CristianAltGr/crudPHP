<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/kebabcion.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Original Kebab House </title>
</head>

<body>
    <header class="bg-white py-3 mb-3 border-bottom border-gray d-flex justify-content-around align-items-center">
        <a href="./index.php">
            <img id="fotoHeader"
                src="https://img.freepik.com/vector-gratis/plantilla-logotipo-shawarma-dibujado-mano_23-2149540555.jpg?w=740&t=st=1683742873~exp=1683743473~hmac=80bab058b93071ec91ddca945026be48ab704923dab962833344dd3265b55b0f"
                alt="logo kebab">
        </a>
        <a href="./index.php">
            <h1>Original Kebab House</h1>
        </a>
        <?php
        session_start();
        echo '<div>';
        if (isset($_SESSION["name"])) {
            echo '<a href="?action=logout" class="btn btn-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true"> Log OUT</a>';
        } else {
            echo '<a href="?action=new" class="btn btn-secondary btn-sm m-1" tabindex="-1" role="button" aria-disabled="true"> Sign IN</a>';
            echo '<a href="?action=login" class="btn btn-secondary btn-sm m-1" tabindex="-1" role="button" aria-disabled="true"> Log IN</a>';
        }
        echo '</div>';
        ?>
    </header>
    <div class="container ">
        <?php
        require("./controllers/defaultController.php");

        if (isset($_GET['action'])) {

            $accio = $_GET['action'];

            if ($accio == 'login') { //Login l
                loadUserSesion();
            } elseif ($accio == 'logout') { //logout l 
                loadLogoutSesion();
            } else if ($accio == 'new') { //nuevo usurio l
                loadNewUserView();
            } else if ($accio == 'showProd' && isset($_GET['id'])) { // mostrar un prod l
                loadShowProducteView($_GET['id']);
            } else if (isset($_SESSION['rol'])) {

                if ($_SESSION['rol'] == "admin") {

                    if ($accio == 'show' && isset($_GET['id'])) { //mostrar un usuario pA
                        loadShowUserView($_GET['id']);

                    } else if ($accio == 'delete' && isset($_GET['id'])) { //Borrar user pA 
                        deleteUser($_GET['id']);

                    } else if ($accio == 'edit' && isset($_GET['id'])) { //Editar usuario pA 
                        loadEditUserView($_GET['id']);

                    } else {
                        listUsers();
                    }
                } else if ($_SESSION['rol'] == "editor") {

                    if ($accio == 'editProd' && isset($_GET['id'])) { // Editar producte pE
                        loadEditProdView($_GET['id']);
                    } else if ($accio == 'deleteProd' && isset($_GET['id'])) { // borrar producte pE
                        deleteProd($_GET['id']);
                    } else if ($accio == 'newProd') { // crear Prod pE
                        loadNewProdView();
                    } else {
                        listProducts();
                    }
                } else {
                    listProdDefault();
                }
            } else {
                listProdDefault();
            }
            //POST
        } else if (isset($_POST['action'])) {

            if ($_POST['action'] == 'logUser') {

                passUserSesion($_POST['nameUser'], $_POST['passwordUser']);

            } else if ($_POST['action'] == 'add' && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari']) && isset($_POST['password'])) { //post pA
        
                addUser($_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['password']);
                header('Location: ./index.php');

            } else if ($_SESSION['rol'] == "admin") {

                if ($_POST['action'] == 'up' && isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) { //update pA
        
                    upUser($_POST['id'], $_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['password']);
                    unset($_POST);

                } else {
                    header('Location: ./index.php');
                }
            } elseif ($_SESSION['rol'] == "editor") {

                if ($_POST['action'] == 'addProd' && isset($_POST['nomProd']) && isset($_POST['descripcio']) && isset($_POST['preu']) && isset($_POST['foto']) && isset($_POST['stock']) && isset($_POST['menu']) && isset($_POST['mida'])) { //añadir producto pE
        
                    addProducte($_POST['nomProd'], $_POST['descripcio'], $_POST['preu'], $_POST['foto'], $_POST['stock'], $_POST['menu'], $_POST['mida']);

                } else if ($_POST['action'] == 'upProd' && isset($_POST['nomProd']) && isset($_POST['descripcio']) && isset($_POST['preu']) && isset($_POST['foto']) && isset($_POST['stock']) && isset($_POST['menu']) && isset($_POST['mida'])) { // editar producto pE
        
                    upProd($_POST['id'], $_POST['nomProd'], $_POST['descripcio'], $_POST['preu'], $_POST['foto'], $_POST['stock'], $_POST['menu'], $_POST['mida']);

                } else {
                    header('Location: ./index.php');
                }
            } else {
                header('Location: ./index.php');
            }
        } elseif (isset($_SESSION["rol"])) {

            if ($_SESSION["rol"] == "admin") {
                listUsers();
            } elseif ($_SESSION["rol"] == "editor") {
                listProducts();
            } else {
                listProdDefault();
            }
        } else {
            listProdDefault();
        }
        ?>
    </div>
</body>
<footer class="bg-dark text-white mt-4 py-2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p>
                    Projecte M04 Crud amb PHP Adrian i Cristian &#169
                </p>
            </div>
        </div>
    </div>
</footer>

</html>