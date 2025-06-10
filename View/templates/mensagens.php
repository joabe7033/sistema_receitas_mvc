<?php if (isset($_GET['erro'])): ?>
    <div class="mensagem erro">
        <?php
        switch ($_GET['erro']) {
            case 'credenciais':
                echo 'Usuário ou senha incorretos.';
                break;
            case 'csrf':
                echo 'Token de segurança inválido. Tente novamente.';
                break;
            case 'salvar':
                echo 'Erro ao salvar. Verifique os dados e tente novamente.';
                break;
            case 'dados':
                echo 'Dados inválidos. Verifique e tente novamente.';
                break;
            case 'token':
                echo 'Token de recuperação inválido ou expirado.';
                break;
            case 'receitas':
                echo 'Não é possível excluir categoria com receitas associadas.';
                break;
            default:
                echo 'Ocorreu um erro. Tente novamente.';
        }
        ?>
    </div>
<?php endif; ?>

<?php if (isset($_GET['sucesso'])): ?>
    <div class="mensagem sucesso">
        <?php
        switch ($_GET['sucesso']) {
            case 'cadastro':
                echo 'Cadastro realizado com sucesso! Faça login para continuar.';
                break;
            case 'senha':
                echo 'Senha redefinida com sucesso! Faça login com sua nova senha.';
                break;
            case 'adicionar':
                echo 'Item adicionado com sucesso!';
                break;
            case 'atualizar':
                echo 'Item atualizado com sucesso!';
                break;
            case 'excluir':
                echo 'Item excluído com sucesso!';
                break;
            default:
                echo 'Operação realizada com sucesso!';
        }
        ?>
    </div>
<?php endif; ?>