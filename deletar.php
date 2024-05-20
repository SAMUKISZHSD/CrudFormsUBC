<?php
// Conexão com o banco de dados
require 'config.php';

// Verifica se o ID foi enviado
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deleta o usuário no banco de dados
    $query = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        // Redireciona para a página inicial
        header("Location: index.php");
    } else {
        echo "Erro: " . $conexao->error;
    }
} else {
    // Redireciona para a página inicial se o ID não foi enviado
    header("Location: index.php");
}
?>
