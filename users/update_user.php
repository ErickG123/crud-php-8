<?php 
    require '../database/database.php';

    if (isset($_POST['userId'])) {
        $userId = $_POST['userId'];

        try {
            $stmt = $conn->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE userId = :userId');
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':userId', $userId);
            $stmt->execute();
            echo json_encode(['success' => true]);
        } catch (PDOException $ex) {
            echo json_encode(['error' => $ex->getMessage()]);
        }
    } else {
        echo json_encode(['error' => 'O ID do usuário é obrigatório']);
    }
?>
