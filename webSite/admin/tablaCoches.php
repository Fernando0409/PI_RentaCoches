<?php
	require_once '../php/config.php';
	$sql = "SELECT id, marca, modelo, year, cambio, kilometraje, placas, precio, estado FROM autos";
	$result = mysqli_query($conn, $sql);
?>

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Marca</td>
				<td>Modelo</td>
				<td>A&ntilde;o</td>
				<td>Cambio</td>
				<td>kilometraje</td>
				<td>Placas</td>
				<td>Precio</td>
				<td>Estado</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Marca</td>
				<td>Modelo</td>
				<td>A&ntilde;o</td>
				<td>Cambio</td>
				<td>kilometraje</td>
				<td>Placas</td>
				<td>Precio</td>
				<td>Estado</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody>
			<?php while($mostrar = mysqli_fetch_row($result)){ ?>
			<tr>
				<td><?php echo $mostrar[1] ?></td>
				<td><?php echo $mostrar[2] ?></td>
				<td><?php echo $mostrar[3] ?></td>
				<td><?php echo $mostrar[4] ?></td>
				<td><?php echo $mostrar[5] ?></td>
				<td><?php echo $mostrar[6] ?></td>
				<td><?php echo $mostrar[7] ?></td>
				<td><?php echo $mostrar[8] ?></td>
				<td style="text-align: center;">
					<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit" 
					onclick="agregarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-pencil-square-o"></span>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-xs" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
						<span class="fa fa-trash"></span>
					</span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>