<?php
$servername = "127.0.0.1";
$username = "root";
$dbname = "dbforms";

// Create connection
$conexao = new mysqli($servername, $username, '', $dbname);

// Check connection
if ($conexao->connect_error) {
  die("Deu ruim irmão: " . $conexao->connect_error);
}
?>
