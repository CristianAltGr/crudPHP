<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Original Kebab House </title>
</head>

<body>
    <!-- Falta header-->
    <?php
    require("./controllers/defaultController.php");

    if (isset($_GET['action'])) {

    } else if (isset($_POST['action'])) {

    } else {
        listUsers();
    }

    ?>
</body>
<footer>
    <p>
        Projecte M04 Crud amb PHP Adrian i Cristian &#169
    </p>
</footer>

</html>