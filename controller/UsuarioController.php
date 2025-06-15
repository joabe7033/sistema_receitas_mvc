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
        include "view/Login.php";
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
        header("Location: index.php?p=login");
        exit;
    }
}
