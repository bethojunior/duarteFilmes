<div class="row col l12 m12 s12 footer" id="footer">
    <?php 
        include("icon.php");
    ?>
    <div class="row col l6 m12 s12">
        <span class="spanFooter">Entre em contato: </span>
        <form method="POST" action="php/mail.php">
            <input id="nome" type="text" placeholder="Seu nome" name="nome" required>
            <input id="contato" type="text" placeholder="Seu contato (email ou telefone)" name="contato" required>
            <textarea id="texto" placeholder="Digite aqui" name="mensagem" required></textarea><br><br>
            <input onclick="modalMail()" class="btn right" type="submit" value="Enviar">
        </form><br><br>
    </div>

</div>

<div id="modalMail" class="modal bottom-sheet">
<div class="modal-content">
  <h4>Atenção</h4>
  <p>Você precisa preencher corretamente o formulário</p>
  <button onclick="closedModal()" class="btn-floating right">Ok</button>
</div>

</div>
      