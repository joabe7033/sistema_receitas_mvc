<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Chef</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff8f0;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            background-color: #fff3e0;
        }

        .btn-primary {
            background-color: #d35400;
            border-color: #d35400;
        }

        .btn-primary:hover {
            background-color: #e67e22;
            border-color: #e67e22;
        }

        h2 {
            color: #d35400;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Junte-se à nossa Cozinha!</h2>
                        <p class="text-center text-muted">Cadastre-se para compartilhar e descobrir receitas deliciosas.</p>
                        <form action="index.php?p=vereficador" method="POST">
                            <input type="hidden" name="acao" value="cadastrar">
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Seu nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="nomeUsuario" class="form-label">Nome de Chef</label>
                                <input type="text" name="nomeUsuario" class="form-control" placeholder="Escolha seu nome na cozinha" required>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha Secreta</label>
                                <input type="password" name="senha" class="form-control" placeholder="Até 20 caracteres" maxlength="20" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar para a cozinha</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="index.php?p=home" class="btn btn-link">Voltar para o cardápio principal</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
