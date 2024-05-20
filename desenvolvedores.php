<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desenvolvedores</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="icon" href="./img/5949930.png">
</head>

<body class="darkmode">

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

    <div class="container mt-5">
        <div class="row">
            <!-- Desenvolvedor 1 -->
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/perfilex1.jpg" alt="Desenvolvedor 1">
                    <div class="card-body">
                        <h5 class="card-title">Felipe</h5>
                        <p class="card-text">Desenvolvedor Front-end</p>
                    </div>
                </div>
            </div>
            <!-- Desenvolvedor 2 -->
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/perfilex1.jpg" alt="Desenvolvedor 2">
                    <div class="card-body">
                        <h5 class="card-title">Samuel</h5>
                        <p class="card-text">Desenvolvedor Full-Stack</p>
                    </div>
                </div>
            </div>
            <!-- Desenvolvedor 3 -->
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/perfilex1.jpg" alt="Desenvolvedor 3">
                    <div class="card-body">
                        <h5 class="card-title">Jean</h5>
                        <p class="card-text">Desenvolvedor Back-end</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer mt-auto py-3 bg-light text-center footer-dark bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre</h5>
                    <p>Projeto com foco no desenvolvimento de um CRUD para aula de programação web da Universidade Braz
                        Cubas</p>
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