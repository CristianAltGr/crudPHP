
<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Aproximació a MVC - CRUD PDO</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Aproximació a MVC</h1>
				<h3>CRUD amb PDO</h3>
			</div>
			<div class="alert alert-primary text-center" role="alert">
				Vista de creacio d'un producte
			</div>
			<div class="text-left">
				<form method="POST" action="./index.php">
					<div class="form-group row">
						<label for="nomProd" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nomProd" id="nomProd" required>
						</div>
					</div>
                    <div class="form-group row">
						<label for="descripcio" class="col-sm-2 col-form-label font-weight-bold">Descripcio</label>
						<div class="col-sm-10">
							<textarea rows="10" type="text" class="form-control" name="descripcio" id="descripcio" required></textarea>
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
							<input type="text" class="form-control" name="foto" id="foto" required>
						</div>
					</div>
                    <div class="form-group row">
						<label for="stock" class="col-sm-2 col-form-label font-weight-bold">Stock</label>
						<div class="col-sm-10">
							<select name="stock" id="stock" class="form-control" required>
								<option value="true">1</option>
								<option value="false">0</option>
						</select>
						</div>
					</div>
                    <div class="form-group row">
						<label for="menu" class="col-sm-2 col-form-label font-weight-bold">Menu</label>
						<div class="col-sm-10">
							<select name="menu" id="menu" class="form-control" required>
								<option value="true">1</option>
								<option value="false">0</option>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="mida" class="col-sm-2 col-form-label font-weight-bold">Mida</label>
						<div class="col-sm-10">
							<select name="mida" id="mida" class="form-control" required>
								<option value="m">M</option>
								<option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value ="xxl">XXL</option>
						</select>
						</div>
					</div>
					<input type="hidden" name="action" value="addProd">
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Desar</button>
						<a class="btn btn-secondary" role="button" href="./index.php">Sortir</a>
					</div>
				</form>				
			</div>
		</div>
	</body>
</html>