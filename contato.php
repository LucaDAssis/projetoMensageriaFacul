<?php
global $BASE_URL;
include_once("templates/header.php");
?>
    <main>
        <section id="contato">
            <h2>Entre em Contato Conosco!</h2>
            <form id="contactForm" action="<?= $BASE_URL?>config/processar_formulario.php" method="POST">
                <div class="form-group">
                    <label for="nomeInput">Seu Nome</label>
                    <input type="text" class="form-control" id="nomeInput" name="nome" placeholder="Seu Nome">
                </div>
                <div class="form-group">
                    <label for="emailInput">Endereço de email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="mensagemTextarea">Sua Mensagem</label>
                    <textarea class="form-control" id="mensagemTextarea" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </main>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            alert('Seu contato foi enviado!');
        });
    </script>

<?php
include_once("templates/footer.php");
?>
