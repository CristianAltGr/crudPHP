<div class="container">
	<div class="table-responsive-sm">
		<table id="productsTable" class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th class="align-middle">ID</th>
					<th class="align-middle">NOM</th>
					<th class="align-middle">DESCRIPCIO</th>
					<th class="align-middle">PREU</th>
					<th class="align-middle">FOTO</th>
					<th class="align-middle">STOCK</th>
					<th class="align-middle">MENU</th>
					<th class="align-middle">MIDES</th>
					<th class="align-middle text-right"><a class="btn btn-primary" role="button"
							href="?action=newProd">Afegir</a></th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($producte as $row) {

					echo "<tr>";
					echo "<td class='align-middle'>" . $row['id'] . "</td>";
					echo "<td class='align-middle'>" . $row['nom'] . "</td>";
					echo "<td class='align-middle'>" . $row['descripcio'] . "</td>";
					echo "<td class='align-middle'> " . $row['preu'] . "</td>";
					echo "<td class='align-middle'> <img src='" . $row['foto'] . "' class='imgProducte'></img></td>";
					echo "<td class='align-middle'>" . $row['stock'] . "</td>";
					echo "<td class='align-middle'>" . $row['menu'] . "</td>";
					echo "<td class='align-middle'>" . $row['mides'] . "</td>";

					echo "<td class='align-middle'>";
					echo "<a class='btn btn-success col-12' role='button' href='?action=showProd&id=" . $row['id'] . "'>Mostrar</a> ";
					echo "<a class='btn btn-warning col-12 mt-2 mb-2' role='button' href='?action=editProd&id=" . $row['id'] . "'>Editar</a> ";
					echo "<a class='btn btn-danger col-12' role='button' href='?action=deleteProd&id=" . $row['id'] . "'>Eliminar</a> ";
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
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<script>
		$(document).ready(function () {
			$('#productsTable').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Catalan.json"
				}
			});
		});
		//Super importante poner el script de debajo en este punto no es un recurso que va al head sino no funciona
	</script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</div>