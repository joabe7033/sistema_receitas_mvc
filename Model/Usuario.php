<?php 

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $usuario;
    private $senha;
    private $cpf;
    private $data_nascimento;
    private $token_recuperacao;
    private $data_token;
    private $data_cadastro;
    private $ultimo_acesso;
    private $ativo;

    public function __construct($id = null, $nome = null, $email = null, $usuario = null,
                                $senha = null, $cpf = null, $data_nascimento = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->data_cadastro = date('Y-m-d H:i:s');
        $this->ultimo_acesso = null;
        $this->ativo = true;
    }

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getUsuario() { return $this->usuario; }
    public function setUsuario($usuario) { $this->usuario = $usuario; }

    public function setSenha($senha) { $this->senha = $senha; }

    public function getCpf() { return $this->cpf; }
    public function setCpf($cpf) { $this->cpf = $cpf; }

    public function getDataNascimento() { return $this->data_nascimento; }
    public function setDataNascimento($data_nascimento) { 
        $this->data_nascimento = $data_nascimento; 
    }

    public function getTokenRecuperacao() { return $this->token_recuperacao; }
    public function setTokenRecuperacao($token_recuperacao) { 
        $this->token_recuperacao = $token_recuperacao; 
    }

    public function getDataToken() { return $this->data_token; }
    public function setDataToken($data_token) { 
        $this->data_token = $data_token; 
    }

    public function getDataCadastro() { return $this->data_cadastro; }

    public function getUltimoAcesso() { return $this->ultimo_acesso; }
    public function setUltimoAcesso($ultimo_acesso) { $this->ultimo_acesso = $ultimo_acesso; }

    public function isAtivo() { return $this->ativo; }
    public function setAtivo($ativo) { $this->ativo = $ativo; }

    public function salvar() {
        $conn = Banco::getConn();

        if ($this->id === null) {
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, usuario, senha, cpf, data_nascimento, data_cadastro, ativo)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
            $stmt->bindParam(1, $this->nome);
            $stmt->bindParam(2, $this->email);
            $stmt->bindParam(3, $this->usuario);
            $stmt->bindParam(4, $this->senha);
            $stmt->bindParam(5, $this->cpf);
            $stmt->bindParam(6, $this->data_nascimento);
            $stmt->bindParam(7, $this->data_cadastro);
            $stmt->bindParam(8, $this->ativo, PDO::PARAM_BOOL);

            if ($stmt->execute()) {
                $this->id = $conn->lastInsertId();
                return true;
            }
        } else {
            $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, email = ?, usuario = ?, cpf = ?, data_nascimento =?, ativo = ? WHERE id = ?");

            $stmt->bindParam(1, $this->nome);
            $stmt->bindParam(2, $this->email);
            $stmt->bindParam(3, $this->usuario);
            $stmt->bindParam(4, $this->cpf);
            $stmt->bindParam(5, $this->data_nascimento);
            $stmt->bindParam(6, $this->ativo, PDO::PARAM_BOOL);
            $stmt->bindParam(7, $this->id, PDO::PARAM_INT);

            return $stmt->execute();
        }

        return false;
    }

    public static function buscarPorId($id) {
        $conn = Banco::getConn();
        $sql = "SELECT *FROM usuarios WHERE id = :id LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_OBJ);

        if ($dados) {
            $usuario = new Usuario(
                $dados->id,
                $dados->nome,
                $dados->email,
                $dados->usuario,
                $dados->senha,
                $dados->cpf,
                $dados->data_nascimento
            );
            $usuario->setTokenRecuperacao($dados->token_recuperacao);
            $usuario->setDataToken($dados->data_token);
            $usuario->data_cadastro = $dados->data_cadastro;
            $usuario->setUltimoAcesso($dados->ultimo_acesso);
            $usuario->setAtivo($dados->ativo);

            return $usuario;

        }

        return null;
    }

    public static function listarTodos($filtros = []) {
        $conn = Banco::getConn();
        $sql = "SELECT * FROM usuarios WHERE 1=1";
        $params = [];

        if (!empty($filtros['nome'])) {
            $sql .= "AND nome LIKE :nome";;
            $params[':nome'] = '%' . $filtros['nome'] . '%';
        }
    }

     public function atualizar() {
        $conn = Banco::getConn();

        if (!empty($this->senha)) {
            $sql = "UPDATE usuarios SET
                        nome = :nome,
                        email = :email,
                        usuario = :usuario,
                        senha = :senha,
                        cpf = :cpf,
                        data_nascimento = :data_nascimento,
                        token_recuperacao = :token_recuperacao,
                        data_token = :data_token,
                        ultimo_acesso = :ultimo_acesso,
                        ativo = :ativo
                    WHERE id = :id";
        } else {
            $sql = "UPDATE usuarios SET
                        nome = :nome,
                        email = :email,
                        usuario = :usuario,
                        cpf = :cpf,
                        data_nascimento = :data_nascimento,
                        token_recuperacao = :token_recuperacao,
                        data_token = :data_token,
                        ultimo_acesso = :ultimo_acesso,
                        ativo = :ativo
                    WHERE id = :id";
        }
    }

    public function excluir() {
        if (!$this->ativo) {
            return false;
        }
        $conn = Banco::getConn();

        $sql = "UPDATE usuarios SET ativo = 0 WHERE id = :id";
        $stmt = $conn ->prepare($sql);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $this->ativo = false;
            return true;
        } 

        return false;
    }

    public static function autenticar($usuario, $senha) {
        
    }
}

?>