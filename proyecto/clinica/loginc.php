<?php

session_start();

if (isset($_SESSION['user_id'])) {
  
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, contraseña FROM usuarios WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['contraseña'])) {
    $_SESSION['user_id'] = $results['id'];
    require 'menu.php';
  } else {
    $message = 'Error, sin coincidencia';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ingresar</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


  <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Ingreso</h1>
  <form action="menuc.php" method="POST">
    <input name="email" type="text" placeholder="ingrese su usuario">
    <input name="password" type="password" placeholder="ingrese su contraseÃ±a">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>