<?php 

abstract class BaseController {
    protected function view($view, $dados = []) {
        extract($dados);

        $arquivo = "View/{$view}.php";
        if (file_exists($arquivo)) {
            require $arquivo;
        } else {
            echo "View {$view} não encontrada";
        }
    }

    protected function redirecionar($url) {
        header("Location: {$url}");
        exit;
    }

    protected function getPost() {
        return $_POST;
    }

    protected function getGet() {
        return $_GET;
    }
    
}

?>