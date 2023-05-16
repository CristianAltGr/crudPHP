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

            if ($accio == 'show') {
                if($_SESSION["rol"] == "admin") {
                    loadShowUserView($_GET['id']);
                } else {
                    echo "T'has de loguejar com administrador";
                }
            } else if ($accio == 'edit') {

                if (isset($_GET['id'])) {
                    loadEditUserView($_GET['id']);
                } //aqui falta el else
            } else if ($accio == 'delete') {

                if (isset($_GET['id'])) {
                    deleteUser($_GET['id']);
                }
                loadMainView();

            } else if ($accio == 'new') {
                loadNewUserView();

            } else if ($accio == 'showProd' && isset($_SESSION["rol"])&& $_SESSION["rol"] == "editor") {
                loadShowProducteView($_GET['id']);

            } else if ($accio == 'editProd') {

                if (isset($_GET['id'])) {
                    loadEditProdView($_GET['id']);
                }
            } else if ($accio == 'deleteProd') {

                if (isset($_GET['id'])) {
                    deleteProd($_GET['id']);
                }
                loadMainView();
            } else if ($accio == 'newProd') {
                loadNewProdView();
            } elseif ($accio == 'login') {
                loadUserSesion();
            } elseif ($accio == 'logout') {
                loadLogoutSesion();
            } else {
                listProdDefault();
            }
            //POST
        } else if (isset($_POST['action'])) {
            if ($_POST['action'] == 'add') {
                $msg = null;

                if (isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari']) && isset($_POST['password'])) {
                    $msg = addUser($_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['password']);
                    header('Location: index.php');
                } else {
                }
                loadMainView();
            } else if ($_POST['action'] == 'up') {
                if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) {
                    upUser($_POST['id'], $_POST['nom'], $_POST['rol'], $_POST['usuari'], $_POST['password']);
                    echo "action up";
                    unset($_POST);
                } else {
                    loadMainView();

                }
                loadMainView();
            } else if ($_POST['action'] == 'addProd') {
                $msg = null;

                if (isset($_POST['nomProd']) && isset($_POST['descripcio']) && isset($_POST['preu']) && isset($_POST['foto']) && isset($_POST['stock']) && isset($_POST['menu']) && isset($_POST['mida'])) {
                    addProducte($_POST['nomProd'], $_POST['descripcio'], $_POST['preu'], $_POST['foto'], $_POST['stock'], $_POST['menu'], $_POST['mida']);
                }

                loadMainView();
            } else if ($_POST['action'] == 'upProd') {
                if (isset($_POST['nomProd']) && isset($_POST['descripcio']) && isset($_POST['preu']) && isset($_POST['foto']) && isset($_POST['stock']) && isset($_POST['menu']) && isset($_POST['mida'])) {
                    upProd($_POST['id'], $_POST['nomProd'], $_POST['descripcio'], $_POST['preu'], $_POST['foto'], $_POST['stock'], $_POST['menu'], $_POST['mida']);

                }
            } else if ($_POST['action'] == 'logUser' && isset($_POST['nameUser']) && $_POST['passwordUser']) {
                passUserSesion($_POST['nameUser'], $_POST['passwordUser']);
            } else {
                loadMainView();

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