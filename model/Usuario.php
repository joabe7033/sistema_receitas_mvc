<?php
require_once "config/Banco.php";
require_once "config/Sessao.php";

class Usuario
{
    public static function cadastrarUsuario($nome, $nomeUsuario, $senha, $cpf, $data_nascimento)
    {
        $conn = Banco::getConn();

        // Verifica se já existe usuário ou nome igual
        $sqlCheck = "SELECT COUNT(*) FROM usuario WHERE nome = :nome OR nomeUsuario = :nomeUsuario";
        $stmtCheck = $conn->prepare($sqlCheck);
        $stmtCheck->execute([
            ':nome' => $nome,
            ':nomeUsuario' => $nomeUsuario
        ]);

        if ($stmtCheck->fetchColumn() > 0) {
            echo "Nome ou nome de usuário já cadastrado.";
            header("refresh:2; url=index.php?p=home");
            return;
        }

        // Cadastro
        $sql = "INSERT INTO usuario (nome, nomeUsuario, senha, cpf, data_nascimento) VALUES (:nome, :nomeUsuario, :senha, :cpf, :data_nascimento)";
        $stmt = $conn->prepare($sql);

        try {
            $stmt->execute([
                ':nome' => $nome,
                ':nomeUsuario' => $nomeUsuario,
                ':senha' => password_hash($senha, PASSWORD_DEFAULT),
                ':cpf' => $cpf,
                ':data_nascimento' => $data_nascimento
            ]);

            // Inicia a sessão e guarda os dados
            Sessao::iniciar();
            $_SESSION['nome'] = $nome;
            $_SESSION['nomeUsuario'] = $nomeUsuario;
            $_SESSION['cpf'] = $cpf;
            $_SESSION['data_nascimento'] = $data_nascimento;

            // Redireciona após 2 segundos
            echo "<div style='text-align:center; font-family:sans-serif; margin-top:20px; color:green;'>
                    Usuário cadastrado com sucesso! Redirecionando para área do usuario...
                  </div>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'index.php?p=areaUsuario';
                    }, 2000);
                  </script>";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    }

    public static function buscarPorCpfDataNascimento($cpf, $data_nascimento) {
        $conn = Banco::getConn();
        $sql = "SELECT * FROM usuario WHERE cpf = :cpf AND data_nascimento = :data_nascimento LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function salvarTokenRecuperacao($id, $token) {
        $conn = Banco::getConn();
        $sql = "UPDATE usuario SET token_recuperacao = :token, data_token = NOW() WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function buscarPorToken($token) {
        $conn = Banco::getConn();
        $sql = "SELECT * FROM usuario WHERE token_recuperacao = :token LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':token', $token);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function atualizarSenha($id, $novaSenha) {
        $conn = Banco::getConn();
        $hash = password_hash($novaSenha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuario SET senha = :senha, token_recuperacao = NULL, data_token = NULL WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':senha', $hash);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
