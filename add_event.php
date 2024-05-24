<?php
require 'config.php';

try {
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = isset($_POST['end']) ? $_POST['end'] : NULL;
    $color = $_POST['color'];
    $allDay = true; 

    error_log("Title: $title, Start: $start, End: $end, Color: $color");

    $stmt = $pdo->prepare('INSERT INTO events (title, start, end, color, allDay) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$title, $start, $end, $color, $allDay]);

    echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>