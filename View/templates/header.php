<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Sistema de Receitas' ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'config/Seguranca.php';?>
    <header>
        <div class="container">
            <h1><a href="/">Sistema de Receitas</a></h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/categorias">Categorias</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <?php if (Seguranca::verificarLogado()): ?>
                        <li><a href="/dashboard">Meu Painel</a></li>
                        <li><a href="/logout">Sair</a></li>
                    <?php else: ?>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/cadastro">Cadastre-se</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">