<?php
require_once "config/Banco.php";

class Receita {
    public $id;
    public $titulo;
    public $ingredientes;
    public $instrucoes;
    public $criado_em;

    public function __construct($titulo = null, $ingredientes = null, $instrucoes = null) {
        $this->titulo = $titulo;
        $this->ingredientes = $ingredientes;
        $this->instrucoes = $instrucoes;
    }

    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getIngredientes() { return $this->ingredientes; }
    public function getInstrucoes() { return $this->instrucoes; }

    public function setTitulo($titulo) { $this->titulo = $titulo; }
    public function setIngredientes($ingredientes) { $this->ingredientes = $ingredientes; }
    public function setInstrucoes($instrucoes) { $this->instrucoes = $instrucoes; }

    public function save() {
        $conn = Banco::getConn();
        $sql = "INSERT INTO receitas (titulo, ingredientes, instrucoes) VALUES (:titulo, :ingredientes, :instrucoes)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':titulo' => $this->titulo,
            ':ingredientes' => $this->ingredientes,
            ':instrucoes' => $this->instrucoes
        ]);
        $this->id = $conn->lastInsertId();
    }

    public static function findAll() {
        $conn = Banco::getConn();
        $sql = "SELECT * FROM receitas ORDER BY id DESC";
        $stmt = $conn->query($sql);
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $receita = new Receita();
            $receita->id = $row['id'];
            $receita->titulo = $row['titulo'];
            $receita->ingredientes = $row['ingredientes'];
            $receita->instrucoes = $row['instrucoes'];
            $receita->criado_em = $row['criado_em'];
            $result[] = $receita;
        }
        return $result;
    }

    public static function findById($id) {
        $conn = Banco::getConn();
        $sql = "SELECT * FROM receitas WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $receita = new Receita();
            $receita->id = $row['id'];
            $receita->titulo = $row['titulo'];
            $receita->ingredientes = $row['ingredientes'];
            $receita->instrucoes = $row['instrucoes'];
            $receita->criado_em = $row['criado_em'];
            return $receita;
        }
        return null;
    }

    public function update() {
        $conn = Banco::getConn();
        $sql = "UPDATE receitas SET titulo = :titulo, ingredientes = :ingredientes, instrucoes = :instrucoes WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':titulo' => $this->titulo,
            ':ingredientes' => $this->ingredientes,
            ':instrucoes' => $this->instrucoes,
            ':id' => $this->id
        ]);
    }

    public static function deleteById($id) {
        $conn = Banco::getConn();
        $sql = "DELETE FROM receitas WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

}
?>