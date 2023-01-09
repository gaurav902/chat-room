<?php
// Connect to the database
$db = new PDO("mysql:host=localhost;dbname=chat", "username", "password");

// Retrieve the chat messages from the database
$stmt = $db->query("SELECT * FROM messages ORDER BY id DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the messages as a JSON array
header("Content-Type: application/json");
echo json_encode($messages);
