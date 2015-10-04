<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/voto.php");
	$arrayDevotos=voto::TraerTodoLosvotos();
	

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Provincia</th><th>Presidenciable</th><th>Sexo</th><th>Dni</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDevotos as $voto) {
	echo"<tr>
			<td><a onclick='Editarvoto($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='Borrarvoto($voto->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$voto->provincia</td>
			<td>$voto->presidenciable</td>
			<td>$voto->sexo</td>
			<td>$voto->dni</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>