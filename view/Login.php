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

        /* Estilo do botão lembrar-me */
        .lembrar-btn {
            background-color: #fff7f2;
            color: #7a4a24;
            border: 2px solid #d35400;
            border-radius: 0.75rem;
            padding: 0.6rem 1rem;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 1px 5px rgba(0,0,0,0.08);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            user-select: none;
        }

        .lembrar-btn:hover {
            background-color: #fff1e6;
            color: #d35400;
            cursor: pointer;
        }

        input.btn-check:checked + .lembrar-btn {
            background-color: #d35400;
            color: white;
            border-color: #d35400;
            box-shadow: 0 0 0 0.15rem rgba(211, 84, 0, 0.4);
        }

        .check-icon {
            display: none;
        }

        input.btn-check:checked + .lembrar-btn .check-icon {
            display: inline;
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

                    <?php if (isset($_GET['erro'])): ?>
                        <div class="alert alert-danger text-center">
                            Usuário ou senha inválidos!
                        </div>
                    <?php endif; ?>

                    <form action="index.php?p=verificarLogin" method="post">
                        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

                        <div class="mb-3">
                            <label for="usuario" class="form-label">👨‍🍳 Nome de Usuário</label>
                            <div class="input-group">
                                <input type="text" name="usuario" id="usuario" class="form-control"
                                       placeholder="Digite seu usuário" value="" required>
                                <?php if (!empty($usuario_cookie)): ?>
                                    <button type="button" class="btn btn-outline-secondary" id="usar-usuario" title="Usar nome salvo">
                                        <i class="bi bi-person-check"></i>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">🔒 Senha</label>
                            <div class="input-group">
                                <input type="password" name="senha" id="senha" class="form-control"
                                       placeholder="Digite sua senha" value="" required>
                                <?php if (!empty($senha_cookie)): ?>
                                    <button type="button" class="btn btn-outline-secondary" id="usar-senha" title="Usar senha salva">
                                        <i class="bi bi-key"></i>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <input type="checkbox" class="btn-check" id="lembrar" name="lembrar" autocomplete="off"
                                   <?= !empty($usuario_cookie) ? 'checked' : '' ?>>
                            <label class="btn lembrar-btn w-100" for="lembrar">
                                <span class="check-icon">✔️</span> Lembrar-me
                            </label>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-login text-white px-4">Entrar na Cozinha</button>
                        </div>

                        <div class="text-center mb-2">
                            <a href="index.php?p=recuperarSenha" class="btn btn-link small">Esqueceu a senha?</a>
                        </div>
                        <div class="text-center">
                            <a href="index.php?p=home" class="btn btn-link small">← Voltar ao cardápio</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php if (!empty($usuario_cookie) || !empty($senha_cookie)): ?>
        <script>
            <?php if (!empty($usuario_cookie)): ?>
                document.getElementById('usar-usuario')?.addEventListener('click', function() {
                    document.getElementById('usuario').value = <?= json_encode($usuario_cookie) ?>;
                    document.getElementById('usuario').focus();
                });
            <?php endif; ?>

            <?php if (!empty($senha_cookie)): ?>
                document.getElementById('usar-senha')?.addEventListener('click', function() {
                    document.getElementById('senha').value = <?= json_encode($senha_cookie) ?>;
                    document.getElementById('senha').focus();
                });
            <?php endif; ?>
        </script>
    <?php endif; ?>

</body>
</html>
