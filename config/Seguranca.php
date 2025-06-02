<?php 

class Seguranca {

    public static function gerarTokenCSRF() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    public static function validarTokenCSRF($token) {
        if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
            return false;
        }
        return true;
    }

    public static function sanitizarTexto($texto) {
        return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
    }

    public static function criptografarSenha($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public static function verificarSenha($hash, $senha) {
        return password_verify($hash, $senha);
    }

    public static function verificarLogado() {
        return isset($_SESSION['id_usuario']) && !empty($_SESSION['id_usuario']);
    }

    public static function protegerPagina() {
        if (!self::verificarLogado()) {
            header("Location: /login");
            exit;
        }
    }
}

?>