<?php
// Arquivo: index.php

require "Config/Banco.php";
require "Controller/UsuarioController.php";

// Pega o valor da URL amigável, ex: site.com/cadastro
$pagina = $_GET['p'] ?? null;
$url = explode('/', $pagina); // separa por barras

// Roteamento usando match (PHP 8+)
match ($url[0]) {
    "cadastro" => UsuarioController::novoCadastro(),
    "listar" => UsuarioController::listarUsuarios(),
    "cadastrar" => UsuarioController::cadastrarUsuario(),
    default => UsuarioController::home(),
};
?>

