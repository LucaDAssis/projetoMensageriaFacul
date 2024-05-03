<?php 

    include_once("templates/header.php");

?>
    <main>
        <section id="sobre">
            <h2>Sobre Nós</h2>
            <p>Joga Na Conta do Pai!</p>
        </section>
        <section id="servicos">
            <h2>Serviços</h2>
            <p>Jogar Na Conta do Pai!!</p>
        </section>
        <section id="contato">
            <h2>Entre em Contato</h2>
            <form action="<?= $BASE_URL?>config/processar_formulario.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

<?php 
    include_once("templates/footer.php");

?>
