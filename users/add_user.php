<?php 
    require '../database/database.php';

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            $stmt = $conn->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            echo json_encode(['name' => $name, 'email' => $email, 'password' => $password]);
        } catch (PDOException $ex) {
            echo json_encode(['error' => $ex->getMessage()]);
        }
    } else {
        echo json_encode(['error' => 'O nome/email/senha é obrigatório']);
    }
?>
