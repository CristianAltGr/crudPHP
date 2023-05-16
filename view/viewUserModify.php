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
					Vista d'edició d'un user
				</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
						<div class="col-sm-10">
							<input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo $result[0]['id']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $result[0]['nom']; ?>">
						</div>
					</div>
					<div class="form-group row">
					<label for="ensenyament" class="col-sm-2 col-form-label font-weight-bold">Rol</label>
						<div class="col-sm-10">
							<?php
							$rol = $result[0]['rol']; 
							echo '<select name="rol" id="rol" class="form-control" required>';
							echo "<option value='admin'" . ($rol == 'admin' ? 'selected' : '') . ">Admin</option>";
							echo "<option value='editor'" . ($rol == 'editor' ? 'selected' : '') . ">editor</option>";
							echo "</select>";
							?>
						</div>
					</div>
                    <div class="form-group row">
						<label for="usuari" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="usuari" name="usuari" value="<?php echo $result[0]['usuari']; ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label font-weight-bold">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" name="password" value="<?php echo $result[0]['password']; ?>">
						</div>
					</div>
                    <input type="hidden" name="action" value="up">

					<div class="text-right">

						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
    
</body>
</html>

	
