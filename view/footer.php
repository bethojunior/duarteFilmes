<div class="row col l12 m12 s12 footer" id="footer">
    <?php 
        include("icon.php");
    ?>
    <div class="row col l6 m12 s12">
        <span class="spanFooter">Entre em contato: </span>
        <form method="POST" action="php/mail.php">
            <input type="text" placeholder="Seu nome" name="nome" required>
            <input type="text" placeholder="Seu contato (email ou telefone)" name="contato" required>
            <textarea placeholder="Digite aqui" name="mensagem" required></textarea><br><br>
            <input class="btn right " type="submit" value="Enviar">
        </form><br><br>
    </div>

</div>
