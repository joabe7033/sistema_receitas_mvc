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

    public static function editarReceita() {
        Sessao::iniciar();

        require_once "model/Receita.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $titulo = $_POST['titulo'] ?? '';
            $ingredientes = $_POST['ingredientes'] ?? '';
            $instrucoes = $_POST['instrucoes'] ?? '';

            if (empty($id) || empty($titulo) || empty($ingredientes) || empty($instrucoes)) {
                Sessao::set('erro', 'Todos os campos são obrigatórios!');
                header("Location: index.php?p=editarReceita&id=$id");
                exit;
            }

            $receita = Receita::findById($id);
            $receita->setTitulo($titulo);
            $receita->setIngredientes($ingredientes);
            $receita->setInstrucoes($instrucoes);
            $receita->update();

            Sessao::set('sucesso', 'Receita atualizada com sucesso!');
            header("Location: index.php?p=areaUsuario");
            exit;
        }

        $id = $_GET['id'] ?? null;
        if (!$id) {
            header("Location: index.php?p=areaUsuario");
            exit;
        }

        $receita = Receita::findById($id);
        include "view/NovaReceita.php";
    }

    public static function excluirReceita() {
        Sessao::iniciar();

        require_once "model/Receita.php";

        $id = $_GET['id'] ?? null;
        if (!$id) {
            header("Location: index.php?p=areaUsuario");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['confirmar'] === 'sim') {
                Receita::deleteById($id);
                Sessao::set('sucesso', 'Receita excluída com sucesso!');
            }
            header("Location: index.php?p=areaUsuario");
            exit;
        }

        $receita = Receita::findById($id);
        include "view/ConfirmarExclusao.php";
    }
}?>