<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início - Receitas</title>

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

        .navbar-brand,
        .nav-link {
            color: #8b4513 !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ff6347 !important;
        }

        .hero-section {
            background: linear-gradient(rgba(255, 248, 240, 0.8), rgba(255, 248, 240, 0.8)), url('https://images.unsplash.com/photo-1543352632-f17173e90f23?auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat;
            padding: 100px 0;
            text-align: center;
            color: #d35400; /* Cor principal de destaque */
            border-bottom: 5px solid #ffa07a;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-family: 'Georgia', serif;
            margin-bottom: 20px;
            color: #8b4513;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #5a2d0d;
        }

        .btn-main {
            background-color: #d35400;
            border-color: #d35400;
            color: white;
            font-size: 1.1rem;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-main:hover {
            background-color: #e67e22;
            border-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .content-section {
            padding: 60px 0;
            text-align: center;
        }

        .content-section h2 {
            color: #d35400;
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-family: 'Georgia', serif;
        }

        .content-section p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto 30px auto;
            color: #5a2d0d;
        }

        footer {
            background-color: #ffefe0;
            border-top: 3px solid #ffa07a;
            padding: 30px 0;
            text-align: center;
            color: #8b4513;
            margin-top: auto;
        }
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
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
                        <a class="nav-link active" aria-current="page" href="index.php?p=home"><i class="bi bi-house-door"></i> Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=sobreNos"><i class="bi bi-info-circle"></i> Sobre Nós</a>
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

    <header class="hero-section">
        <div class="container">
            <h1 class="display-4">Receitas</h1>
            <p class="lead">Seu lar para as melhores receitas caseiras e tradicionais.</p>
        </div>
    </header>

    <main>
        <section class="content-section">
            <div class="container">
                <h2>Bem-vindo(a) ao Sabor da Tradição!</h2>
                <p>No **Receitas**, acreditamos que a cozinha é o coração do lar. Aqui você encontrará uma vasta coleção de receitas caseiras, desde os pratos clássicos da culinária brasileira até as delícias que atravessam gerações.</p>
                <p>Navegue por nossas categorias, descubra novas inspirações e, se desejar, **cadastre-se** para compartilhar suas próprias receitas com nossa comunidade de amantes da boa mesa!</p>
                <a href="index.php?p=cadastro" class="btn btn-main mt-4">Junte-se à Nossa Comunidade</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Receitas. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>