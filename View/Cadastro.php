<h1>Cadastro de Usuário</h1>

<form action="?page=Cadastrar" method="$_POST">
    <input type ="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <label>Nome de Usuário</label>
        <input type="text" name="nomeUsuario" class="form-control" placeholder="Escolha um nome de usuário">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha, ela não deve ter mais de 20 caracteres">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<!-- fazer opcional
 [checar se o usário nao digitou caracter especial] 
 [formatar string para ser enviada ao banco]
 [Menssagem de erro se o usuário ultrapassar o numero de caracteres, clicou em registrar sem enviar nada, etc]
  -->