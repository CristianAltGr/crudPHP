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

    

?>