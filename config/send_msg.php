<?php
$conn = new mysqli('localhost', 'root', '', 'chat_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);

$user = $conn->real_escape_string($data['user']);
$message = $conn->real_escape_string($data['message']);

$sql = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
