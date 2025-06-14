
<?php
require_once("Config/Banco.php");

function cadastrarUsuario($nome, $nomeUsuario, $senha)
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
    $sql = "INSERT INTO usuario (nome, nomeUsuario, senha) VALUES (:nome, :nomeUsuario, :senha)";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([
            ':nome' => $nome,
            ':nomeUsuario' => $nomeUsuario,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT)
        ]);

        // Inicia a sessão e guarda os dados
        session_start();
        $_SESSION['nome'] = $nome;
        $_SESSION['nomeUsuario'] = $nomeUsuario;

        // Redireciona após 2 segundos
        echo "<div style='text-align:center; font-family:sans-serif; margin-top:20px; color:green;'>
                Usuário cadastrado com sucesso! Redirecionando para área do usuario...
              </div>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'View/AreaUsuario.php';
                }, 2000);
              </script>";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}

?>
