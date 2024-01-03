<?php 
    require '../database/database.php';

    try {
        $stmt = $conn->query('SELECT * FROM users');
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($users);
    } catch (PDOException $ex) {
        echo json_encode(['error' => $ex->getMessage()]);
    }
?>
