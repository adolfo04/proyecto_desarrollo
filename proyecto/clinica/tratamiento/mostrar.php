<?php
$server = 'localhost:8111';
$username = 'root';
$password = '';
$database = 'clinica';
$mbd = new PDO("mysql:host=$server;dbname=$database", $username, $password);
// Utilizar la conexión aquí
$sth = $mbd->query('SELECT * FROM tratamiento');

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
    <tr><td>TRATAMIENTO</td></tr>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>tipo tratamiento</td>

		</tr>

	<?php
  foreach($sth as $row){
  ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['tipo_t']; ?></td>
		</tr>


<?php
  }

  ?>
  	</table>
    <br>
  <span><a href="../mdatos.php">volver</a></span> 
  </br>
  <br>
</body>
</html>