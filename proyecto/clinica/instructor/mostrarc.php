<?php
$server = 'localhost:8111';
$username = 'root';
$password = '';
$database = 'clinica';
$mbd = new PDO("mysql:host=$server;dbname=$database", $username, $password);
$sth = $mbd->query('SELECT * FROM instructor');

?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
	<tr><td>INSTRUCTORES</td></tr>
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>telefono</td>
			<td>correo</td>	
		</tr>

	<?php
  foreach($sth as $row){
  ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['telefono']; ?></td>
			<td><?php echo $row['correo']; ?></td>
		</tr>
<?php
  }
  ?>

	</table>
	<br>
  <span><a href="../menuc.php">volver</a></span> 
  </br>
</body>
</html>