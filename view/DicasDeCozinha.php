<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicas de Cozinha - Receitas</title>
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
            margin-bottom: 30px; /* Espaço entre os cards de dica */
        }
        h1, h2 {
            color: #d35400;
        }
        .tip-icon {
            font-size: 2rem;
            color: #ffa07a;
            margin-right: 15px;
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
                        <a class="nav-link" href="index.php?p=sobreNos"><i class="bi bi-info-circle"></i> Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?p=contato"><i class="bi bi-lightbulb"></i> Dicas de Cozinha</a>
                    </li>
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
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-5">Dicas de Cozinha</h1>
        <p class="text-center lead mb-5">Aprimore suas habilidades culinárias com truques e conselhos práticos!</p>

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-lightbulb tip-icon"></i> Corte Sem Chorar!</h2>
                    <p>Para evitar as lágrimas ao cortar cebolas, congele-as por 15 minutos antes de picar ou corte-as debaixo d'água corrente. A baixa temperatura ou a água reduzem a liberação dos compostos que irritam os olhos.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-egg-fill tip-icon"></i> Teste a Frescura dos Ovos</h2>
                    <p>Coloque um ovo em um copo com água: se ele afundar e ficar deitado, está fresco. Se afundar e ficar em pé, ainda está bom, mas não tão fresco. Se flutuar, é melhor descartar.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-journal-check tip-icon"></i> Revitalize Ervas Murchas</h2>
                    <p>Se suas ervas frescas estão murchas, pique-as finamente e coloque em uma forma de gelo com azeite ou água. Congele! Você terá porções prontas para usar em sopas, molhos e refogados.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-tools tip-icon"></i> Afie Facas com Cerâmica</h2>
                    <p>Se não tem um amolador, a base áspera de uma xícara ou prato de cerâmica pode servir! Passe a lâmina da faca suavemente no sentido contrário ao corte, com um ângulo de 20 graus.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-thermometer-half tip-icon"></i> Carne Mais Suculenta</h2>
                    <p>Deixe a carne atingir a temperatura ambiente por uns 30 minutos antes de cozinhar. Isso garante um cozimento mais uniforme e ajuda a manter os sucos dentro, resultando em uma carne mais macia e saborosa.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="d-flex align-items-center mb-3"><i class="bi bi-droplet-half tip-icon"></i> Sal no Arroz para Soltar</h2>
                    <p>Adicione algumas gotas de suco de limão ou vinagre à água do cozimento do arroz. Isso ajuda os grãos a ficarem mais soltinhos e evita que grudem uns nos outros.</p>
                </div>
            </div>
        </div>

        <p class="text-center mt-5">Gostou das dicas? Fique de olho para mais segredos culinários!</p>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Receitas. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>