<?php

class VereficadorController
{


    static function vereficarCadastro()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastrar') {
            $nome = $_POST['nome'] ?? '';
            $nomeUsuario = $_POST['nomeUsuario'] ?? '';
            $senha = $_POST['senha'] ?? '';

            // Validação no Controller
            if (empty($nome) || empty($nomeUsuario) || empty($senha)) {
                echo "Preencha todos os campos!";
                exit;
            }

            // Redireciona para o arquivo responsável pelo cadastro (CadastrarUsuario.php)
            require_once("Model/CadastrarUsuario.php");
            cadastrarUsuario($nome, $nomeUsuario, $senha);
        }
    }
}
?>