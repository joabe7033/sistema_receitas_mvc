<?php
require_once __DIR__ . '/../config/Sessao.php';
Sessao::iniciar();
if (!isset($receitas)) $receitas = [];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário - Receitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff8f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #ff7043;
        }
        .navbar-brand, .nav-link, .btn {
            color: #fff;
        }
        .card {
            border: none;
            background-color: #fff3e0;
        }
        .card-title {
            color: #e65100;
        }
        .btn-receita {
            background-color: #ff7043;
            color: white;
        }
        .btn-receita:hover {
            background-color: #f4511e;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Minhas Receitas</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=logout">Sair</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?p=logout&forget=1" class="btn btn-danger">Sair e Esquecer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nomeUsuario']); ?></h2>
            <a href="index.php?p=novaReceita" class="btn btn-receita">+ Criar Nova Receita</a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php if (!empty($receitas)): ?>
                <?php foreach ($receitas as $receita): ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($receita->titulo ?? '') ?></h5>
                                <p class="card-text"><?= nl2br(htmlspecialchars($receita->ingredientes ?? '')) ?></p>
                                <div class="d-flex justify-content-between">
                                     <a href="index.php?p=editarReceita&id=<?= $receita->getId() ?>" class="btn btn-sm btn-outline-warning">Editar</a>
                                     <a href="index.php?p=excluirReceita&id=<?= $receita->getId() ?>" class="btn btn-sm btn-outline-danger">Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col">
                    <div class="alert alert-info">Nenhuma receita cadastrada ainda.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>