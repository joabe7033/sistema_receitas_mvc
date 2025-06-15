<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
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
                        <h2 class="text-center mb-4">Redefinir Senha</h2>
                        <form action="index.php?p=salvarNovaSenha" method="post">
                            <input type="hidden" name="token" value="<?= htmlspecialchars($_GET['token'] ?? '') ?>">
                            <div class="mb-3">
                                <label class="form-label">Nova Senha</label>
                                <input type="password" name="nova_senha" class="form-control" placeholder="Digite a nova senha" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Redefinir Senha</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="index.php?p=home" class="btn btn-outline-secondary">
                        ← Voltar para o cardápio principal
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
