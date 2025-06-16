<?php
// Arquivo: index.php

require_once "config/Banco.php";
require_once "controller/UsuarioController.php";
require_once "controller/VerificadorController.php";
require_once "controller/ReceitaController.php";

// Pega o valor da URL amigável, ex: site.com/cadastro
$pagina = $_GET['p'] ?? null;
$url = explode('/', $pagina); // separa por barras

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Roteamento usando match (PHP 8+)
match ($url[0]) {
    "cadastro" => UsuarioController::novoCadastro(),
    //"listar" => UsuarioController::listarUsuarios(), opcional
    "verificarCadastro"=>VerificadorController::verificarCadastro(),
    "verificarLogin"=>VerificadorController::verificarLogin(),
    "login"=>UsuarioController::login(),//view
    "areaUsuario"=>UsuarioController::areaUser(),
    "novaReceita" => ReceitaController::novaReceita(), // Exibe/cadastra nova receita
    default => UsuarioController::home(),
};
?>