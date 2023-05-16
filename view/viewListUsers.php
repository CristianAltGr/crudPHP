<section class="container col-10 border border-3 rounded">
	<div class="table-responsive-sm">
		<table id="usersTable" class="table table-striped">
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
			<tfoot>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>
	</div>
</section>
<script>
	$(document).ready(function () {
		$('#usersTable').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Catalan.json"
			}
		});
	});
		//Super importante poner el script de debajo en este punto no es un recurso que va al head sino no funciona
</script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>