<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mensagens";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conexao falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM `mensagens`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo("ID: " . $row["id"] . " - Mensagem: " . $row["mensagem"] . "<br>");
    }
} else{
    echo "Nenhuma mensagem encontrada!";
}
$conn->close();
