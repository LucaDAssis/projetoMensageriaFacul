<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST["nome"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($_POST["mensagem"]);



    if (empty($nome) || empty($email) || empty($mensagem)) {
        die("Por favor, preencha todos os campos do formulário.");
    }


    $conexao = new mysqli("http://localhost:63342/projetoMensageriaFacul/index.php", "root", "root");


    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }



    $conexao = new mysqli("localhost", "root", "root", "trampofacul");

    $conexao->query("CREATE DATABASE IF NOT EXISTS trampofacul");


    $conexao->select_db("trampofacul");


    $conexao->query("CREATE TABLE IF NOT EXISTS mensagens (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        mensagem TEXT NOT NULL
    )");


    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);


    $stmt->bind_param("sss", $nome, $email, $mensagem);


    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem: " . $conexao->error;
    }


    $stmt->close();
    $conexao->close();
}
?>
