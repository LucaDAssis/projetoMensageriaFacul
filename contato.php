<?php
global $BASE_URL;
include_once("templates/header.php");

?>
    <main>
        <section id="contato">
            <h2>Entre em Contato Conosco!</h2>
            <form>
            <div class="form-group">
                    <label for="exampleInputPassword1">Seu Nome</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Seu Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sua Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </section>
    </main>

<?php
    include_once("templates/footer.php");

?>
