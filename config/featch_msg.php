<?php
$conn = new mysqli('localhost', 'root', '', 'chat_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = $conn->query($sql);

$messages = array();
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);

$conn->close();
?>
