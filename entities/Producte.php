<?php



    
function modConnectProducte()
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

    function modificarProducte() {
        modConnectProducte();
    }

	function getProducts() {
		modConnectProducte();
		try {
			$stmt = $GLOBALS['conn']->prepare("SELECT * FROM producte");
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC); // set the resulting array to associative
			return $result;
			}
			catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
			}
	}

	function getProducte($id) {
		modConnectProducte();
			
			try {
				if ($id != null) {
					$stmt = $GLOBALS['conn']->prepare("SELECT * FROM producte WHERE id=" . $id); 
				}
				else {
					$stmt = $GLOBALS['conn']->prepare("SELECT * FROM producte ORDER BY id ASC"); 
				}
				$stmt->execute();
	
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
				return $result;
			}
			catch(PDOException $e) {
				return ["Error" => $e->getMessage()];
			}
	}

    function modDeleteProd($id) {
		modConnectProducte();
		try {
			$sql = "DELETE FROM producte WHERE id=".$id;
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)){
				return ["Success" => "Producte eliminat correctament"];
			}
			else {
				return ["Error" => "El producte no s'ha eliminat"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}

	function modAddProducte($nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides){
		modConnectProducte();
		
		try {
			$sql = "INSERT INTO producte (nom, descripcio, preu, foto, stock, menu, mides) VALUES ('" . $nomProd . "', '" . $descripcio . "', '" .$preu ."', '" . $foto ."', '" .$stock . "', '" . $menu . "', '" . $mides ."')";
			// use exec() because no results are returned
			if ($GLOBALS['conn']->exec($sql)) {
				return ["Success" => "Producte afegit correctament"];
			}
			else {
				return ["Error" => "El producte no s'ha afegit"];
			}
		}
		catch(PDOException $e) {
			return ["Error" => $e->getMessage()];
		}
	}

	function modUpProducte($id, $nomProd, $descripcio, $preu, $foto, $stock, $menu, $mides) {
		modConnectProducte();
			
			try {
				$sql = "UPDATE producte SET nom='" . $nomProd . "', descripcio='" . $descripcio . "', preu='" . $preu . "', foto='" . $foto . "', stock='" .$stock."', menu='".$menu ."', mides='" . $mides."'  WHERE id='" . $id . "'";
				// use exec() because no results are returned
				if ($GLOBALS['conn']->exec($sql)) {
					return ["Success" => "Producte modificat correctament"];
						
				}
				else {
					return ["Error" => "L'usuari no s'ha modificat"];
				}
			}
			catch(PDOException $e) {
				return ["Error" => $e->getMessage()];
			}
	
	}

?>
