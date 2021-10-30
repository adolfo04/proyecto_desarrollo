<?php

$server = 'localhost:8111';
$username = 'root';
$password = '';
$database = 'clinica';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>