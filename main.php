<?php
include('connect.php');
$dato = mysql_query("SELECT * FROM usuarios");
$usuarios = mysql_fetch_array($dato);
?>
<h1>{{dato}}</h1>
<hr />
<table class="table table-striped">
	<tr>
		<th>ID</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
	</tr>
	<?php
	do{
	?>
		<tr>
			<td><?php echo $usuarios['id'];?></td><td><?php echo $usuarios['nombre'];?></td><td><?php echo $usuarios['apellidoPaterno'];?></td><td><?php echo $usuarios['apellidoMaterno'];?></td>
		</tr>
		<?php
	}while($usuarios = mysql_fetch_array($dato));
	?>
	
</table>