<?php

class UsuarioController
{
    public static function home()
    {
        include "view/Home.php";
    }

    public static function novoCadastro()
    {
        include "view/Cadastro.php";
    }

    public static function login()
    {
        include "view/Login.php";
    }

    public static function areaUser()
    {
        include "view/AreaUsuario.php";
    }
}
