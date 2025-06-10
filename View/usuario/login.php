<?php require 'View/templates/header.php'; ?>

<div class="auth-container">
    <h2>Login</h2>
    
    <?php require 'View/templates/mensagens.php'; ?>
    
    <form action="/login" method="post" class="form-auth">
        <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
        
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="/recuperar-senha" class="link-auth">Esqueceu a senha?</a>
        </div>
    </form>
    
    <div class="auth-footer">
        <p>Não tem uma conta? <a href="/cadastro">Cadastre-se</a></p>
    </div>
</div>

<?php require 'View/templates/footer.php'; ?>
