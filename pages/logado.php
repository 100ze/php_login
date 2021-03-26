<?php
  // verificando se o usuário está logado
  require_once "../utils/block.php";

  // guardando o nome do usuario
  $usuario = $_SESSION['usuario'];

  // cabeçalho
  $tituloAba = "Online";
  require_once "../templates/cabecalho.php";
?>
<div class="w3-container w3-margin-top w3-padding s-center s-loritta s-text">
  <header>
    <h1 class="s-title"><?=$usuario?> logou! ;)</h1>
  </header>

  <section>
    <img src="img/loritta_uwu.gif">
    <p>E é isso.</p>
  <section>
</div>

<?php
  // rodapé
  require_once "../templates/rodape.php";
?>
