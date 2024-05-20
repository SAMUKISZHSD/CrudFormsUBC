<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuário</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Dark Mode CSS -->
    <link href="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/style.css" rel="stylesheet">
    <!-- Font Awesome icons do footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="icon" href="./img/5949930.png">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">FORMULÁRIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <?php
        // Conexão com o banco de dados
        require 'config.php';

        // Verifica se o ID foi enviado
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Busca o usuário no banco de dados
            $query = "SELECT * FROM usuarios WHERE id = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $usuario = $result->fetch_assoc();

            // Verifica se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                $email = $_POST['email'];

                // Atualiza o usuário no banco de dados
                $query = "UPDATE usuarios SET nome = ?, idade = ?, email = ? WHERE id = ?";
                $stmt = $conexao->prepare($query);
                $stmt->bind_param('sisi', $nome, $idade, $email, $id);
                $stmt->execute();

                // Redireciona para a página inicial
                header("Location: index.php");
            }
        } else {
            // Redireciona para a página inicial se o ID não foi enviado
            header("Location: index.php");
        }
        ?>

        <!-- Formulário de edição -->
        <form action="editar.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario['Nome']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade"
                    value="<?php echo $usuario['Idade']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo $usuario['Email']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>

    <footer class="footer mt-auto py-3 bg-dark text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre nós</h5>
                    <p>Algumas informações sobre a empresa.</p>
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