<?php

require 'db.php';

$message = '';

if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['tipo_t'])) {
 $sql = "INSERT INTO tratamiento (id, nombre, apellido, tipo_t) VALUES (:id, :nombre, :apellido, :tipo_t)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':tipo_t', $_POST['tipo_t']);

  if ($stmt->execute()) {
    $message = 'nuevo tratamiento ingresado';
    echo"Datos Guardados<br><a href='../menu.php'> menu </a>";
    

  } else {
    $message = 'campos invalidos';
  }
}
?>
