<?php
  include_once("templates/header.php");
?>

<header id="global">

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">Nome:</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="nome" placeholder="Seu nome..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Sobrenome:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="sobrenome" placeholder="Seu sobrenome..">
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Mensagem:</label>
    </div>
    <div class="col-75">
      <textarea id="mensagem" name="subject" placeholder="Escreva aqui sua mensagem.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Enviar">
  </div>
  </form>
</div>

</header>

<?php
  include_once("templates/footer.php");
?>
