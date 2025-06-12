<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Cadastro de Usuário</h2>
                        <form action="index.php?p=cadastrar" method="POST">
                            <input type="hidden" name="acao" value="cadastrar">
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="nomeUsuario" class="form-label">Nome de Usuário</label>
                                <input type="text" name="nomeUsuario" class="form-control" placeholder="Escolha um nome de usuário" required>
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Máximo 20 caracteres" maxlength="20" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="/home" class="btn btn-link">Voltar para o início</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!-- fazer opcional
 [checar se o usário nao digitou caracter especial] 
 [formatar string para ser enviada ao banco]
 [Menssagem de erro se o usuário ultrapassar o numero de caracteres, clicou em registrar sem enviar nada, etc]
  -->