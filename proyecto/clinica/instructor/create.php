<?php

  require 'db.php';

  $message = '';

  if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['correo'])) {
   $sql = "INSERT INTO instructor (id, nombre, apellido, telefono, correo) VALUES (:id, :nombre, :apellido, :telefono, :correo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':correo', $_POST['correo']);

    if ($stmt->execute()) {
      $message = 'nuevo instructor ingresado';
      echo"Datos Guardados<br><a href='../menu.php'> menu </a>";
      

    } else {
      $message = 'campos invalidos';
    }
  }
?>
