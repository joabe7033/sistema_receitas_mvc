<?php
// Arquivo: index.php

require "Config/Banco.php";
require "Controller/UsuarioController.php";
require "Controller/VereficadorController.php";

// Pega o valor da URL amigável, ex: site.com/cadastro
$pagina = $_GET['p'] ?? null;
$url = explode('/', $pagina); // separa por barras

// Roteamento usando match (PHP 8+)
match ($url[0]) {
    "cadastro" => UsuarioController::novoCadastro(),
    //"listar" => UsuarioController::listarUsuarios(), opcional
    "vereficador"=>VereficadorController::vereficarCadastro(),
    "login"=>UsuarioController::login(),//view
    "areaUsuario"=>UsuarioController::areaUser(),
    default => UsuarioController::home(),
};
?>

