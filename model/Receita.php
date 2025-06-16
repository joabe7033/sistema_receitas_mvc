<?php
require_once "config/Banco.php";

class Receita {
    private $id;
    private $titulo;
    private $ingredientes;
    private $instrucoes;

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
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Receita');
    }


}
?>