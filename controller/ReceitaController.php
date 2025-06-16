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
                MensagensController::exibir ('Todos os campos são obrigatórios!','erro',"index.php?p=novaReceita",2);
                exit;
            }

            require_once "model/Receita.php";
            $receita = new Receita($titulo, $ingredientes, $instrucoes);
            $receita->save();

            MensagensController::exibir ('Receita Cadastrada com sucesso!','sucesso',"index.php?p=areaUsuario",2);
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