<?php 

class Sessao {
    public static function iniciar() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /*public static function set($chave, $valor) {
        $_SESSION[$chave] = $valor;
    }

    public static function get($chave) {
        return isset($_SESSION[$chave]) ? $_SESSION[$chave] : null;
    }*/

    public static function remove($chave) {
        if (isset($_SESSION[$chave])){
            unset($_SESSION[$chave]);
        }
    }

     public static function destruir() {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Limpa as variáveis de sessão
    $_SESSION = [];

    // Destrói a sessão
    session_destroy();

    // Remove o cookie da sessão (opcional, mas recomendado)
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
}


    public static function setCookie($nome, $valor, $expira = 0) {
        setcookie($nome, $valor, $expira, "/");
    }

    public static function getCookie($nome) {
        return isset($_COOKIE[$nome]) ? $_COOKIE[$nome] : null;
    }

    public static function removeCookie($nome) {
        setcookie($nome, "", time() - 3600, "/");
    }
    
} 

?>