<?php
modConnect();
mostrarProducte();
function mostrarProducte() {
    try {
        $stmt = $GLOBALS['conn']->prepare("SELECT * FROM producte");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // set the resulting array to associative
       echo "<div>";
        foreach($result as $row) {
        echo "<div>";
        $url = $row['foto'];
        echo "<td>".$row['nom']."</td><td>".$row['descripcio']."</td><td>".$row['preu']."</td><td>"."<img src=$url>"."</td><td>".$row['stock']."</td><td>".$row['menu']."</td>";
        echo "<div>" ;
        }
        echo "</div>";
        }
        catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
}

    
function modConnect()
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

    

?>