
<?php
// Inclui a classe de conexão com o banco
require_once("Config/Banco.php");

if ($_POST['acao'] == 'cadastrar') {
    $nome = $_POST['nome'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $senha = $_POST['senha'];

    // Validação simples (opcional)
    if (empty($nome) || empty($nomeUsuario) || empty($senha)) {
        echo "Preencha todos os campos!";
        exit;
    }

    // Conexão
    $conn = Banco::getConn();

    // Query de inserção com segurança (prepared statement)
    $sql = "INSERT INTO usuario (nome, nomeUsuario, senha) VALUES (:nome, :nomeUsuario, :senha)";
    $stmt = $conn->prepare($sql);
    
    // Executa a query
    try {
        $stmt->execute([
            ':nome' => $nome,
            ':nomeUsuario' => $nomeUsuario,
            ':senha' => password_hash($senha, PASSWORD_DEFAULT) // Criptografando a senha
        ]);
        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
