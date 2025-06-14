<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <!-- Bootstrap e Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff8f0;
        }

        .navbar {
            background-color: #ffefe0;
            border-bottom: 3px solid #ffa07a;
            font-family: 'Georgia', serif;
        }

        .navbar-brand,
        .nav-link {
            color: #8b4513 !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ff6347 !important;
        }

        .btn-outline-success {
            color: #fff;
            background-color: #ff6347;
            border-color: #ff6347;
        }

        .btn-outline-success:hover {
            background-color: #e5533e;
            border-color: #e5533e;
        }

        .dropdown-menu {
            background-color: #fff8f0;
        }

        .dropdown-item:hover {
            background-color: #ffe4d1;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-egg-fried"></i> Veja receitas e compartilha a sua!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=home"><i class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=cadastro"><i class="bi bi-person-plus"></i> Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                  <!--  <li class="nav-item">
                        <a class="nav-link" href="index.php?p=listar"><i class="bi bi-card-list"></i> Listar Usuário</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-journal"></i> Receitas</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i> Mais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Opção 1</a></li>
                            <li><a class="dropdown-item" href="#">Opção 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Opção 3</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busque uma receita..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
