<?php
    require_once "model/Receita.php";
    require_once "config/Sessao.php";

    class ReceitaController{
        public static function novaReceita() {
        require_once "config/Sessao.php";
        Sessao::iniciar();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'] ?? '';
            $ingredientes = $_POST['ingredientes'] ?? '';
            $instrucoes = $_POST['instrucoes'] ?? '';

            if (empty($titulo) || empty($ingredientes) || empty($instrucoes)) {
                Sessao::set('erro', 'Todos os campos são obrigatórios!');
                header("Location: index.php?p=novaReceita");
                exit;
            }

            require_once "model/Receita.php";
            $receita = new Receita($titulo, $ingredientes, $instrucoes);
            $receita->save();

            Sessao::set('sucesso', 'Receita cadastrada com sucesso!');
            header("Location: index.php?p=areaUsuario");
            exit;
        }

        require "view/NovaReceita.php";
    }

    public static function listarReceitas() {
        Sessao::iniciar();
        $receitas = Receita::findAll();
        include "view/AreaUsuario.php";
    }
}?>