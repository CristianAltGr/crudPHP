<div class="container">
	<div class="py-5 text-center">
		<h1>Aproximació a MVC</h1>
		<h3>CRUD amb PDO</h3>
	</div>
	<div class="text-left">
		<form method="POST" action="./index.php">
			<div class="form-group row">
				<label for="id" class="col-sm-2 col-form-label font-weight-bold">Id</label>
				<div class="col-sm-10">
					<input type="text" readonly class="form-control-plaintext" id="id" name="id"
						value="<?php echo $result[0]['id']; ?>" required>
				</div>
			</div>
			<div class="form-group row mt-3">
				<label for="nom" class="col-sm-2 col-form-label font-weight-bold">Nom</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $result[0]['nom']; ?>"
						required>
				</div>
			</div>
			<div class="form-group row mt-3">
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
			<div class="form-group row mt-3">
				<label for="usuari" class="col-sm-2 col-form-label font-weight-bold">Usuari</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="usuari" name="usuari"
						value="<?php echo $result[0]['usuari']; ?>" required>
				</div>
			</div>
			<div class="form-group row mt-3">
				<label for="password" class="col-sm-2 col-form-label font-weight-bold">New password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password"
						placeholder="Escriu la teva nova contrasenya" required>
				</div>
			</div>
			<input type="hidden" name="action" value="up">

			<div class="text-right mt-5 d-flex justify-content-around">
				<button type="submit" class="btn btn-primary col-4">Desar</button>
				<a class="btn btn-secondary col-4" role="button" href="./index.php">Sortir</a>
			</div>
		</form>
	</div>
</div>