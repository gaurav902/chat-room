<?php
// Connect to the database
$db = new PDO("mysql:host=localhost;dbname=chat", "username", "password");

// Insert the message into the database
$stmt = $db->prepare("INSERT INTO messages (message) VALUES (:message)");
$stmt->execute(array(":message" => $_POST["message"]));
