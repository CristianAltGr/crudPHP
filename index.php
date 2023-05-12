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
    
    if(isset($_GET['action'])) {
        
        $accio = $_GET['action'];

        if ($accio == 'show') {
            echo "show";

        } else if($accio == 'edit') {

            if (isset($_GET['id'])) {
				loadEditUserView($_GET['id']);
			}
            echo "edit";

        } else if($accio == 'delete') {

            if (isset($_GET['id'])) {
				deleteUser($_GET['id']);
			}
            loadMainView();

        } else if ($accio == 'new') {
            loadNewUserView();
            echo "new";
        }
        
    }else if (isset($_POST['action'])){
        if ($_POST['action'] == 'add')
		{
			// Exemple de com utilitzar els missatges que el model ens retorna.
			// Aquests els desem a la variable $msg i els enviem a la vista principal
			$msg = null;
			
			if (isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) {
				$msg = addUser($_POST['nom'], $_POST['rol'], $_POST['usuari']);
			} else {  
				echo "no va jefe";
			}
			loadMainView($msg);
		}
		else if ($_POST['action'] == 'up')
		{
			if (isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['rol']) && isset($_POST['usuari'])) {
				upUser($_POST['id'], $_POST['nom'], $_POST['rol'], $_POST['usuari']);
                echo "action up";
			} else {
            }
			loadMainView();
		}
		else
		{
			loadMainView();
		}
	
    } else {
        loadMainView();
    }

    
    

    ?>
</body>
<footer>
    <p>
        Projecte M04 Crud amb PHP Adrian i Cristian &#169
    </p>
</footer>

</html>