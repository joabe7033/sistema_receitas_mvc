<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Receitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff8f0;
            font-family: 'Segoe UI', sans-serif;
            color: #333;
        }
        .navbar {
            background-color: #ffefe0;
            border-bottom: 3px solid #ffa07a;
            font-family: 'Georgia', serif;
        }
        .navbar-brand, .nav-link {
            color: #8b4513 !important;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #ff6347 !important;
        }
        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .card {
            background-color: #fff3e0;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #d35400;
        }
        footer {
            background-color: #ffefe0;
            border-top: 3px solid #ffa07a;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
            color: #8b4513;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?p=home"><i class="bi bi-egg-fried"></i> Receitas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=home"><i class="bi bi-house-door"></i> Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?p=sobreNos"><i class="bi bi-info-circle"></i> Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=dicas"><i class="bi bi-lightbulb"></i> Dicas de Cozinha</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots"></i> Mais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Opção 1</a></li>
                            <li><a class="dropdown-item" href="#">Opção 2</a></li>
                            <li><a class="dropdown-item" href="#">Opção 3</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=cadastro"><i class="bi bi-person-plus"></i> Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Busque uma receita..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card p-4">
            <h1 class="text-center mb-4">Sobre Nós</h1>
            <p>Bem-vindo ao **Receitas**! Somos uma plataforma dedicada a reunir e compartilhar as melhores receitas caseiras, aquelas que nos lembram do carinho e sabor da comida feita pela vovó.</p>
            <p>Acreditamos que a culinária é uma forma de expressar amor e conectar pessoas. Nosso objetivo é criar uma comunidade onde chefs amadores e entusiastas da cozinha possam compartilhar suas criações, aprender novas técnicas e descobrir pratos deliciosos de diversas culturas e tradições.</p>
            <p>Nosso acervo de receitas é construído por pessoas como você, que têm paixão por cozinhar e por saborear momentos especiais à mesa. Explore, crie e inspire-se!</p>
            <h2 class="mt-5 mb-3">Nossa Missão</h2>
            <p>Nossa missão é preservar a arte da culinária caseira, tornando-a acessível a todos, e fomentar uma comunidade vibrante de amantes da gastronomia.</p>
            <h2 class="mt-5 mb-3">Nossa Visão</h2>
            <p>Ser a maior e mais querida plataforma de receitas caseiras do Brasil, reconhecida pela qualidade, diversidade e pela paixão que conecta as pessoas à boa comida.</p>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Receitas. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>