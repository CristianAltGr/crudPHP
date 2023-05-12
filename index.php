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
    <header>
        <img id="fotoHeader"
            src="https://img.freepik.com/vector-gratis/plantilla-logotipo-shawarma-dibujado-mano_23-2149540555.jpg?w=740&t=st=1683742873~exp=1683743473~hmac=80bab058b93071ec91ddca945026be48ab704923dab962833344dd3265b55b0f"
            alt="logo kebab">
        <h1>Original Kebab House</h1>
    </header>
    <div class="container">
        <?php
        require("./controllers/defaultController.php");


        if (isset($_GET['action'])) {

            $accio = $_GET['action'];

            if ($accio == 'show') {
                loadShowUserView($_GET['id']);
            } else if ($accio == 'edit') {

                if (isset($_GET['id'])) {
                    loadEditUserView($_GET['id']);
                }
            } else if ($accio == 'delete') {

                if (isset($_GET['id'])) {
                    deleteUser($_GET['id']);
                }
                loadMainView();

            } else if ($accio == 'new') {
                loadNewUserView();
            }

        } else if (isset($_POST['action'])) {
            if ($_POST['action'] == 'add') {
                // Exemple de com utilitzar els missatges que el model ens retorna.
                // Aquests els desem a la variable $msg i els enviem a la vista principal
                $msg = null;

                if (isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) {
                    $msg = addUser($_POST['nom'], $_POST['rol'], $_POST['usuari']);
                } else {
                    echo "no va jefe";
                }
                loadMainView($msg);
            } else if ($_POST['action'] == 'up') {
                if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) {
                    upUser($_POST['id'], $_POST['nom'], $_POST['rol'], $_POST['usuari']);
                    echo "action up";
                    unset($_POST);
                } else {
                }
                loadMainView();
            } else {
                loadMainView();
            }

        } else {
            loadMainView();
        }
        ?>
    </div>
</body>
<footer>
    <p>
        Projecte M04 Crud amb PHP Adrian i Cristian &#169
    </p>
</footer>

</html>