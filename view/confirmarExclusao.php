<?php
require_once __DIR__ . '/../config/Sessao.php';
Sessao::iniciar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmar Exclusão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Confirmar Exclusão</h2>
        <p>Tem certeza de que deseja excluir a receita <strong><?= htmlspecialchars($receita->getTitulo() ?? '') ?></strong>?</p>
        <form method="post" action="index.php?p=excluirReceita&id=<?= htmlspecialchars($receita->getId() ?? '') ?>">
            <button type="submit" name="confirmar" value="sim" class="btn btn-danger">Sim, excluir</button>
            <button type="submit" name="confirmar" value="nao" class="btn btn-secondary">Não, cancelar</button>
        </form>
    </div>
</body>
</html>