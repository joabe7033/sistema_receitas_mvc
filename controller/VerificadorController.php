<?php

require_once "config/Sessao.php";

class VerificadorController
{
    static function verificarCadastro()
    {
        Sessao::iniciar();
        if (!Seguranca::validarTokenCSRF($_POST['csrf_token'] ?? '')) {
            die('Token CSRF inválido!');
        }

        if (
            $_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['acao']) &&
            $_POST['acao'] === 'cadastrar'
        ) {
            $nome = $_POST['nome'] ?? '';
            $nomeUsuario = $_POST['nomeUsuario'] ?? '';
            $senha = $_POST['senha'] ?? '';

            // Validação no Controller
            if (empty($nome) || empty($nomeUsuario) || empty($senha)) {
                echo "Preencha todos os campos!";
                exit;
            }

            // Redireciona para o arquivo responsável pelo cadastro (CadastrarUsuario.php)
            require_once("model/CadastrarUsuario.php");
            Usuario::cadastrarUsuario($nome, $nomeUsuario, $senha);
        }
    }

    public static function verificarLogin()
    {
        Sessao::iniciar();
        if (!Seguranca::validarTokenCSRF($_POST['csrf_token'] ?? '')) {
            die('Token CSRF inválido!');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $senha = $_POST['senha'] ?? '';

            if (empty($usuario) || empty($senha)) {
                echo "Preencha todos os campos!";
                exit;
            }

            $conn = Banco::getConn();
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE nomeUsuario = :usuario");
            $stmt->execute(['usuario' => $usuario]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($senha, $user['senha'])) {
                require_once "config/Sessao.php";
                Sessao::iniciar();
                $_SESSION['nomeUsuario'] = $user['nomeUsuario'];
                header("Location: index.php?p=areaUsuario");
                exit;
            } else {
                echo "Usuário ou senha inválidos!";
                exit;
            }
        }
    }
}
?>
