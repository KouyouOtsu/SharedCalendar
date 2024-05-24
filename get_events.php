<?php
require 'config.php';

$stmt = $pdo->query('SELECT * FROM events');
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($events);
?>