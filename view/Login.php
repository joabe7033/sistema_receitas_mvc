<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Receitas da Vovó</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS e Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    body {
        background-color: #fff8f0;
        background-image: url('https://images.unsplash.com/photo-1604908177063-527c6d0c40eb?auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        font-family: 'Segoe UI', sans-serif;
        height: 100vh;
    }

    .login-card {
        background-color: rgba(255, 248, 240, 0.97);
        border-radius: 1.2rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        padding: 2rem;
    }

    .login-title {
        font-family: 'Georgia', serif;
        color: #d35400;
    }

    .btn-login {
        background-color: #d35400;
        border: none;
    }

    .btn-login:hover {
        background-color: #e67e22;
    }

    .btn-link {
        color: #d35400;
        text-decoration: none;
    }

    .btn-link:hover {
        color: #e67e22;
        text-decoration: underline;
    }
</style>

</head>
<body class="d-flex justify-content-center align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login-card">
                    <h3 class="text-center login-title mb-4">
                        <i class="bi bi-egg-fried"></i> Login do Chef
                    </h3>

                    <form action="index.php?p=verificarLogin" method="post">
                        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">👨‍🍳 Nome de Usuário</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário" required>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">🔒 Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-login text-white">🍲 Entrar na Cozinha</button>
                        </div>

                        <div class="text-center mb-2">
                            <a href="index.php?p=recuperarSenha" class="btn btn-outline-third">Esqueceu a senha?</a>
                        </div>

                        <div class="text-center">
                            <a href="index.php?p=home" class="btn btn-outline-secondary">← Voltar para o cardápio principal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
