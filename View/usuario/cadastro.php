<?php require 'View/templates/header.php'; ?>

<div class="auth-container">
    <h2>Cadastro</h2>
    
    <?php require 'View/templates/mensagens.php'; ?>
    
    <form action="/cadastro" method="post" class="form-auth">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
        
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="usuario">Nome de Usuário</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" required>
        </div>
        
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
        </div>
        
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        
        <div class="form-group">
            <label for="confirmar_senha">Confirmar Senha</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
    
    <div class="auth-footer">
        <p>Já tem uma conta? <a href="/login">Faça login</a></p>
    </div>
</div>

<?php require 'View/templates/footer.php'; ?>
