<?php
class Task {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function register($nome, $data) {
            $stmt = $this->conn->prepare("INSERT INTO tbTask (nome, data) VALUES (:nome, :data");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':data', $data);
            
            $stmt->execute();

            echo "Tarefa registrada";
        }
        }

?>