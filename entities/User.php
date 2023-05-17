<?php

function modConnectUser()
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
	} catch (PDOException $e) {
		return ["Connection failed" => $e->getMessage()];
	}
}

function getUsers()
{
	modConnectUser();
	try {
		$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); // set the resulting array to associative
		return $result;
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}


function getUser($id)
{
	modConnectUser();

	try {
		if ($id != null) {
			$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user WHERE id=" . $id);
		} else {
			$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user ORDER BY id ASC");
		}
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	} catch (PDOException $e) {
		return ["Error" => $e->getMessage()];
	}
}

function modDelete($id)
{
	modConnectUser();
	try {
		$sql = "DELETE FROM user WHERE id=" . $id;
		// use exec() because no results are returned
		if ($GLOBALS['conn']->exec($sql)) {
			return ["Success" => "Usuari eliminat correctament"];
		} else {
			return ["Error" => "L'usuari no s'ha eliminat"];
		}
	} catch (PDOException $e) {
		return ["Error" => $e->getMessage()];
	}

}

function modUpdateUser($id, $nom, $rol, $usuari, $password)
{
	modConnectUser();

	try {

		$frase = 'AvuiFaBonsolNosabran%Dequevaaquestacontrasenya-#^';
		$missatgeDigest = hash('sha512', $password . $frase);

		$sql = "UPDATE user SET nom='" . $nom . "', rol='" . $rol . "', usuari='" . $usuari . "', password='" . $missatgeDigest . "'  WHERE id='" . $id . "'";
		// use exec() because no results are returned
		if ($GLOBALS['conn']->exec($sql)) {
			return ["Success" => "Usuari modificat correctament"];

		} else {
			return ["Error" => "L'usuari no s'ha modificat"];
		}
	} catch (PDOException $e) {
		return ["Error" => $e->getMessage()];
	}

}


function modAddUser($nom, $rol, $usuari, $password)
{
	modConnectUser();
	//TODO mirar funcion que vaya con nombres
	$userExist = getUserByName($nom);

	if (!$userExist) {

		$frase = 'AvuiFaBonsolNosabran%Dequevaaquestacontrasenya-#^';
		$missatgeDigest = hash('sha512', $password . $frase);

		try {
			$sql = "INSERT INTO user (nom, rol, usuari, password) VALUES ('" . $nom . "', '" . $rol . "', '" . $usuari . "', '" . $missatgeDigest . "')";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Usuari afegit correctament"];
			} else {
				return ["Error" => "L'usuari no s'ha afegit"];
			}
		} catch (PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}
}

function getUserByName($nom)
{
	//Comprovar que funcione la funcion
	modConnectUser();

	$userExist = false;
	//TODO Arregla función se puede hacer un get users i tratar la info para ver si existe o no
	try {

		$stmt = $GLOBALS['conn']->prepare("SELECT * FROM user WHERE nom=" . $nom);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$userExist = $result->bindParam(':nom', $nom, PDO::PARAM_STR, 12);
		var_dump($userExist);
	} catch (PDOException $e) {
		return ["Error" => $e->getMessage()];
	}
	return $userExist;
}