<?php

class UsuarioController
{
    public static function home()
    {
        include "View/Home.php";
    }

    public static function novoCadastro()
    {
        include "View/Cadastro.php";
    }

    public static function listarUsuarios()
    {
        include "View/ListarUsuario.php";
    }

    public static function cadastrarUsuario()
    {
        include "Model/CadastrarUsuario.php";
    }
}
