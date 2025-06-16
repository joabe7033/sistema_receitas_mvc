<?php

require_once 'config/Sessao.php';
require_once 'config/Seguranca.php';

class UsuarioController
{
    public static function home()
    {
        Sessao::iniciar();
        include "view/Home.php";
    }

    public static function novoCadastro()
    {
        Sessao::iniciar();
        $csrf_token = Seguranca::gerarTokenCSRF();
        include "view/Cadastro.php";
    }

    public static function login()
    {
        Sessao::iniciar();
        $csrf_token = Seguranca::gerarTokenCSRF();
        $usuario_cookie = Sessao::getCookie('usuario') ?? '';
        $senha_cookie = Sessao::getCookie('senha') ?? '';
        include "view/Login.php";
    }

    public static function recuperarSenhaForm()
    {
        Sessao::iniciar();
        include "view/RecuperarSenha.php";
    }

    public static function enviarRecuperacao()
    {
        Sessao::iniciar();
        $cpf = $_POST['cpf'] ?? '';
        $data_nascimento = $_POST['data_nascimento'] ?? '';
        require_once "model/Usuario.php";
        $usuario = Usuario::buscarPorCpfDataNascimento($cpf, $data_nascimento);

        if ($usuario) {
            $token = bin2hex(random_bytes(32));
            Usuario::salvarTokenRecuperacao($usuario->id, $token);
            echo "Acesse o link para redefinir sua senha: ";
            echo "<a href='index.php?p=resetarSenha&token=$token'>Redefinir senha</a>";
        } else {
            echo "Dados não conferem!";
        }
    }

    public static function resetarSenhaForm()
    {
        Sessao::iniciar();
        $token = $_GET['token'] ?? '';
        include "view/ResetarSenha.php";
    }

    public static function salvarNovaSenha()
    {
        Sessao::iniciar();
        $token = $_POST['token'] ?? '';
        $novaSenha = $_POST['nova_senha'] ?? '';
        require_once "model/Usuario.php";
        $usuario = Usuario::buscarPorToken($token);

        if ($usuario) {
            Usuario::atualizarSenha($usuario->id, $novaSenha);
            echo "Senha redefinida com sucesso! <a href='index.php?p=login'>Faça login</a>";
        } else {
            echo "Token inválido ou expirado!";
        }
    }

    public static function areaUser()
    {
        Sessao::iniciar();
        // Verifica se o usuário está logado
        if (!isset($_SESSION['nomeUsuario'])) {
            header('Location: index.php?p=login'); // ou onde estiver sua tela de login
            exit;
        }
        include "view/AreaUsuario.php";
    }

    public static function logout()
    {
        Sessao::iniciar();
        Sessao::destruir();
        if (isset($_GET['forget']) && $_GET['forget'] == '1') {
            Sessao::removeCookie('usuario');
            Sessao::removeCookie('senha');
        }

        header("Location: index.php?p=login");
        exit;
    }
}
