<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, contraseña) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'usuario creado';
 
  
    } else {
      $message = 'Las contraseñas no coinciden';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crear cuenta</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>nuevo usuario</h1>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="ingrese su correo">
      <input name="password" type="password" placeholder="ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirmar contraseña">
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
