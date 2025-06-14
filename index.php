<?php
// Arquivo: index.php

require_once "config/Banco.php";
require_once "controller/UsuarioController.php";
require_once "controller/VerificadorController.php";

// Pega o valor da URL amigável, ex: site.com/cadastro
$pagina = $_GET['p'] ?? null;
$url = explode('/', $pagina); // separa por barras

// Roteamento usando match (PHP 8+)
match ($url[0]) {
    "cadastro" => UsuarioController::novoCadastro(),
    //"listar" => UsuarioController::listarUsuarios(), opcional
    "verificarCadastro"=>VerificadorController::verificarCadastro(),
    "verificarLogin"=>VerificadorController::verificarLogin(),
    "login"=>UsuarioController::login(),//view
    "areaUsuario"=>UsuarioController::areaUser(),
    default => UsuarioController::home(),
};
?>

