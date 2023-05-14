<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
			<div class="py-5 text-center">
				<h1>Aproximació a MVC</h1>
				<h3>CRUD amb PDO</h3>				
			</div>
			<div class="alert alert-warning text-center" role="alert">
					Vista d'edició d'un producte
				</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $producte[0]['id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nomProd" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nomProd" name="nomProd" value="<?php echo $producte[0]['nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
					<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripció</label>
						<div class="col-sm-10">
                        <textarea rows="10" class="form-control" id="descripcio" name="descripcio"><?php echo $producte[0]['descripcio']; ?></textarea>
						</div>
					</div>
                    <div class="form-group row">
						<label for="preu" class="col-sm-2 col-form-label font-weight-bold">Preu</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="preu" id="preu" required>
						</div>
					</div>
                    <div class="form-group row">
						<label for="foto" class="col-sm-2 col-form-label font-weight-bold">Foto</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="foto" name="foto" value="<?php echo $producte[0]['foto']; ?>">
						</div>
					</div>
                    <div class="form-group row">
						<label for="stock" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="stock" name="stock" value="<?php echo $producte[0]['stock']; ?>">
						</div>
					</div>
                    <div class="form-group row">
						<label for="menu" class="col-sm-2 col-form-label font-weight-bold">Menu</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="menu" name="menu" value="<?php echo $producte[0]['menu']; ?>">
						</div>
					</div>

                    <input type="hidden" name="action" value="upProd">

					<div class="text-right">

						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
    
</body>
</html>

	
