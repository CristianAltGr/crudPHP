<div class="container">
	<div class="py-5 text-center">
		<h1>Aproximació a MVC</h1>
		<h3>CRUD amb PDO</h3>
	</div>
	<div class="text-left">
		<form method="POST" action="./index.php">
			<div class="form-group row mt-3">
				<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nom" id="nom" required>
				</div>
			</div>
			<div class="form-group row mt-3">
				<label for="rol" class="col-sm-2 col-form-label font-weight-bold">Rol</label>
				<div class="col-sm-10">
					<select name="rol" id="rol" class="form-control" required>
						<option value="admin">Admin</option>
						<option value="editor">Editor</option>
					</select>
				</div>
			</div>
			<div class="form-group row mt-3">
				<label for="usuari" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="usuari" id="usuari" required>
				</div>
			</div>
			<div class="form-group row mt-3">
				<label for="password" class="col-sm-2 col-form-label font-weight-bold">Contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" id="password" required>
				</div>
			</div>
			<input type="hidden" name="action" value="add">
			<div class="text-right mt-5 d-flex justify-content-around ">
				<button type="submit" class="btn btn-primary col-4">Desar</button>
				<a class="btn btn-secondary col-4" role="button" href="./index.php">Sortir</a>
			</div>
		</form>
	</div>
</div>