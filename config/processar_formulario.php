<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se as variáveis do formulário estão definidas
    $nome = isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : null;
    $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : null;
    $mensagem = isset($_POST["mensagem"]) ? htmlspecialchars($_POST["mensagem"]) : null;

    // Verifica se alguma das variáveis está vazia
    if (empty($nome) || empty($email) || empty($mensagem)) {
        die("Por favor, preencha todos os campos do formulário.");
    }

    // Estabelece conexão com o banco de dados
    $conexao = new mysqli("localhost", "root", "root");

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    // Cria o banco de dados se não existir e seleciona-o
    $conexao->query("CREATE DATABASE IF NOT EXISTS trampofacul");
    $conexao->select_db("trampofacul");

    // Cria a tabela se não existir
    $conexao->query("CREATE TABLE IF NOT EXISTS mensagens (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        mensagem TEXT NOT NULL
    )");

    // Prepara a instrução SQL e insere os dados
    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("sss", $nome, $email, $mensagem);

    // Executa a instrução SQL e exibe uma mensagem de sucesso ou erro
    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem: " . $conexao->error;
    }

    // Fecha o statement e a conexão com o banco de dados
    $stmt->close();
    $conexao->close();
}

?>
?>
