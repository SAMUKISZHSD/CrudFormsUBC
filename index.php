<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Dark Mode CSS -->
    <link href="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/style.css" rel="stylesheet">
     <!-- Font Awesome icons do footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="icon" href="./img/5949930.png">
</head>

  <!-- <style>
        .navbar {
            margin-bottom: 20px;
        }
        .container_add, .container_view {
            margin-bottom: 30px;
        }
    </style>  -->

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">FORMULÁRIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="desenvolvedores.php">Desenvolvedores</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="container_add">
    <h2>Adicionar Usuário</h2>
    <form action="adicionar.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>


<div class="container_view">
    <h2>Usuários</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Inclua o arquivo de configuração para obter a conexão com o banco de dados
            require 'config.php';

            // Prepare a consulta SQL para buscar todos os usuários
            $sql = "SELECT * FROM Usuarios";
            $result = $conexao->query($sql);

            // Verifique se a consulta retornou algum resultado
            if ($result->num_rows > 0) {
                // Se sim, percorra cada linha de resultado
                while($usuario = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$usuario['ID']}</td>";
                    echo "<td>{$usuario['Nome']}</td>";
                    echo "<td>{$usuario['Idade']}</td>";
                    echo "<td>{$usuario['Email']}</td>";
                    echo "<td>";
                    echo "<a href='editar.php?id={$usuario['ID']}' class='btn btn-primary'>Editar</a> ";
                    echo "<a href='deletar.php?id={$usuario['ID']}' class='btn btn-danger'>Deletar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
            }

            // Feche a conexão com o banco de dados
            $conexao->close();
            ?>
        </tbody>
    </table>
</div>

</div>

<footer class="footer mt-auto py-3 bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Sobre</h5>
                <p>Projeto com foco no desenvolvimento de um CRUD para aula de programação web da Universidade Braz Cubas</p>
            </div>
            <div class="col-md-4">
                <h5>Links úteis</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Política de Privacidade</a></li>
                    <li><a class="text-muted" href="#">Termos de Uso</a></li>
                    <li><a class="text-muted" href="#">Contato</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Redes sociais</h5>
                <a href="#" style="margin-right: 10px;"><i class="fab fa-facebook-f"></i></a>
                <a href="#" style="margin-right: 10px;"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Dark Mode JS -->
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7"></script>
    <script>
        new Darkmode().showWidget();
    </script>
</body>
</html>
