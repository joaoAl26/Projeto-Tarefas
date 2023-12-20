<?php
class User {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function register($nome, $email, $genero, $senha, $confirmarSenha, $tipoUsu) {
        // Verifique se as senhas coincidem
        if ($senha !== $confirmarSenha) {
            echo "As senhas não coincidem. Tente novamente.";
            return;
        }

        try {
            // Hash da senha
            $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

            // Insira no banco de dados
            $stmt = $this->conn->prepare("INSERT INTO tbuser (nome, email, senha, genero, tipoUsu) VALUES (:nome, :email, :senha , :genero, :0");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':senha', $hashed_senha);
            $stmt->bindParam(':tipoUsu', $tipoUsu);


            $stmt->execute();

            echo "Registro bem-sucedido!";
        } catch (PDOException $e) {
            echo "Erro no registro: " . $e->getMessage();
        }
    }
    
    public function login($email, $senha) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM tbuser WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $email = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($email && password_verify($senha, $email['senha'])) {
                
                session_start();
                $_SESSION['email'] = $email['email'];
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro no login: " . $e->getMessage();
        }
    }
    public function logout() {
        try {
            session_start();
            session_destroy();
        } catch (PDOException $e) {
            echo "Erro no logout: " . $e->getMessage();
        }
    }
}
?>


