<?php
require 'config.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];

$sql = "INSERT INTO Usuarios (Nome, Idade, Email) VALUES (?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('sis', $nome, $idade, $email);

if ($stmt->execute()) {
    header('Location: index.php');
} else {
    echo 'Erro: ' . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
