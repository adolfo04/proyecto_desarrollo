
<?php

  require 'db.php';

  $message = '';

  if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['fecha_in']) && !empty($_POST['idtu']) && !empty($_POST['iden'])) {
   $sql = "INSERT INTO pacientes (id, nombre, apellido, fecha_in, idtu, iden) VALUES (:id, :nombre, :apellido, :fecha_in, :idtu, :iden)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':fecha_in', $_POST['fecha_in']);
    $stmt->bindParam(':idtu', $_POST['idtu']);
    $stmt->bindParam(':iden', $_POST['iden']);

    if ($stmt->execute()) {
      $message = 'nuevo paciente ingresado';
      echo"Datos Guardados<br><a href='../menu.php'> menu </a>";

    } else {
      $message = 'campos invalidos';
    }
  }
?>