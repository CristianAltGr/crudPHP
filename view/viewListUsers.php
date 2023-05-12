<section class="container col-10 border border-3 rounded">
	<div class="table-responsive-sm">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th class="align-middle">ID</th>
					<th class="align-middle">NOM</th>
					<th class="align-middle">ROL</th>
					<th class="align-middle">USUARI</th>
					<th class="align-middle text-right"><a class="btn btn-primary" role="button"
							href="?action=new">Afegir</a></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($users as $row) {
					echo "<tr>";
					echo "<td class='align-middle'>" . $row['id'] . "</td>";
					echo "<td class='align-middle'>" . $row['nom'] . "</td>";
					echo "<td class='align-middle'>" . $row['rol'] . "</td>";
					echo "<td class='align-middle'>" . $row['usuari'] . "</td>";

					echo "<td class='align-middle'>";
					echo "<a class='btn btn-success' role='button' href='?action=show&id=" . $row['id'] . "'>Mostrar</a> ";
					echo "<a class='btn btn-warning' role='button' href='?action=edit&id=" . $row['id'] . "'>Editar</a> ";
					echo "<a class='btn btn-danger' role='button' href='?action=delete&id=" . $row['id'] . "'>Eliminar</a> ";
					echo "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	</div>
</section>