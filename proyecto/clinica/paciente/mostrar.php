<?php
$server = 'localhost:8111';
$username = 'root';
$password = '';
$database = 'clinica';
$mbd = new PDO("mysql:host=$server;dbname=$database", $username, $password);
// Utilizar la conexión aquí
$sth = $mbd->query('SELECT * FROM pacientes');

// Ya se ha terminado; se cierra
?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
    <tr><td>PACIENTES</td></tr>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>fecha ingreso</td>
			<td>id tutor</td>
            <td>id encargado</td>	
		</tr>

	<?php
  foreach($sth as $row){
  ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['fecha_in']; ?></td>
			<td><?php echo $row['idtu']; ?></td>
            <td><?php echo $row['iden']; ?></td>
		</tr>
<?php
  }
  ?>

	</table>
    <br>
  <span><a href="../mdatos.php">volver</a></span> 
  </br>
</body>
</html>