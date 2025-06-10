<?php 

require_once __DIR__ . '/../Model/Receita.php';

class UsuarioController extends BaseController {
    public function login() {
        if (Seguranca::verificarLogado()) {
            $this->redirecionar('/dashboard');
            return;
        }

        $this->view('usuario/login', [
            'csrf_token' => Seguranca::gerarTokenCSRF()
        ]);
    }

    public function autenticar() {
        $post = $this->getPost();

        if (!Seguranca::validarTokenCSRF($post['csrf_token'])) {
            $this->redirecionar('/login?erro=csrf');
        }

        $usuario = Seguranca::sanitizarTexto($post['usuario']);
        $senha = $post['senha'];

        if (Usuario::autenticar($usuario, $senha)) {
            $this->redirecionar('/dashboard');
        } else {
            $this->redirecionar('/login?erro=credenciais');
        }
    }

    public function cadastro() {
        $this->view('usuario/cadastro', [
            'csrf_token' => Seguranca::gerarTokenCSRF()
        ]);

    }

    public function salvar() {
        $post = $this->getPost();

        if (!Seguranca::validarTokenCSRF($post['csrf_token'])) {
            $this->redirecionar('/cadastro?erro=csrf');
        }

        $nome = Seguranca::sanitizarTexto($post['nome']);
        $email = Seguranca::sanitizarTexto($post['email']);
        $usuario = Seguranca::sanitizarTexto($post['usuario']);
        $senha = Seguranca::sanitizarTexto($post['senha']);
        $cpf = Seguranca::sanitizarTexto($post['cpf']);
        $data_nascimento = Seguranca::sanitizarTexto($post['data_nascimento']);

        $usuario = new Usuario(null, $nome, $email, $usuario,
                              Seguranca::criptografarSenha($senha),
                              $cpf, $data_nascimento);

        if ($usuario->salvar()) {
            $this->redirecionar('/login?sucesso=cadastro');
        } else {
            $this->redirecionar('/cadastro?erro=salvar');
        }
    }

    public function recuperarSenha() {
        $this->view('usuario/recuperar_senha', [
            'csrf_token' => Seguranca::gerarTokenCSRF()
        ]);
    }

    public function validarRecuperacao() {
        $post = $this->getPost();

        if (!Seguranca::validarTokenCSRF($post['csrf_token'])) {
            $this->redirecionar('/recuperar-senha?erro=csrf');
        }

        $cpf = Seguranca::sanitizarTexto($post['cpf']);
        $data_nascimento = Seguranca::sanitizarTexto($post['data_nascimento']);

        //$usuario = Usuario::validarRecuperacao($cpf, $data_nascimento);
    }

    

    public function dashboard() {
        Seguranca::protegerPagina();

        $id_usuario = Sessao::get('id_usuario');
        //$receitas = Receita::listarPorUsuario($id_usuario);

        $this->view('usuario/dashboard', [
            //'receitas' => $receitas
        ]);
    }

}

?>