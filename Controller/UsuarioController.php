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

    public static function login ()
    {
        include "View/Login.php";
    }

    public static function areaUser()
   {
        include "View/AreaUsuario.php";
   } 
}
