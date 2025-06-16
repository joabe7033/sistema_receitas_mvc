<?php
    require_once "config/Sessao.php";
    require_once "controller/MensagensController.php"; // Precisa incluir o controller!

    Sessao::iniciar();
    $erro = Sessao::get('erro');
    Sessao::remove('erro');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Nova Receita</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <h2 class="mb-4">Cadastrar Nova Receita</h2>
            
            <form method="post" action="index.php?p=novaReceita">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da Receita</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="ingredientes" class="form-label">Ingredientes</label>
                    <textarea class="form-control" id="ingredientes" name="ingredientes" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="instrucoes" class="form-label">Instruções</label>
                    <textarea class="form-control" id="instrucoes" name="instrucoes" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Salvar Receita</button>
                <a href="index.php?p=areaUsuario" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</html>