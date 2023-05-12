<?php
function modConnect1()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projecte_uf4";

    try {
        $GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return ["Connection" => "Success"];
    }
    catch(PDOException $e) {
        return ["Connection failed" => $e->getMessage()];
    }
}

function getUsers() {
        try {
            $stmt = $GLOBALS['conn']->prepare("SELECT * FROM user");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // set the resulting array to associative
            return $result;
            }
            catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            }
}


function getUser($id) {
    modConnect();
		
		try {
			if ($id != null) {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user WHERE id=" . $id); 
			}
			else {
				$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user ORDER BY id ASC"); 
			}
			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			return $result;
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
}

function modDelete($id) {
    modConnect1();
    try {
        $sql = "DELETE FROM user WHERE id=".$id;
        // use exec() because no results are returned
        if ($GLOBALS['conn']->exec($sql)){
            return ["Success" => "Usuari eliminat correctament"];
        }
        else {
            return ["Error" => "L'usuari no s'ha eliminat"];
        }
    }
    catch(PDOException $e) {
        return ["Error" => $e->getMessage()];
    }

}

function modUpdateUser($id, $nom, $rol, $usuari) {
    modConnect();
		
		try {
			$sql = "UPDATE user SET nom='" . $nom . "', rol='" . $rol . "', usuari='" . $usuari . "'  WHERE id='" . $id . "'";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari modificat correctament"];
			}
			else {
				return ["Error" => "L'usuari no s'ha modificat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}

}
