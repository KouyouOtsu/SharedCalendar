<?php
require 'config.php';


$id = $_POST['id'];

$stmt = $pdo->prepare('DELETE FROM events WHERE id = ?');
$stmt->execute([$id]);

echo json_encode(['status' => 'success']);
?>
