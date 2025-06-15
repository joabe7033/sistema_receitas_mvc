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
    "cadastro"            => UsuarioController::novoCadastro(),
    // "listar"            => UsuarioController::listarUsuarios(),
    "verificarCadastro"   => VerificadorController::verificarCadastro(),
    "verificarLogin"      => VerificadorController::verificarLogin(),
    "login"               => UsuarioController::login(),
    "recuperarSenha"      => UsuarioController::recuperarSenhaForm(),
    "enviarRecuperacao"   => UsuarioController::enviarRecuperacao(),
    "resetarSenha"        => UsuarioController::resetarSenhaForm(),
    "salvarNovaSenha"     => UsuarioController::salvarNovaSenha(),
    "areaUsuario"         => UsuarioController::areaUser(),
    "logout"              => UsuarioController::logout(),
    default               => UsuarioController::home(),
};
?>
