<?php
  // verificando se o usuário está logado
  require_once "../utils/block.php";

  // guardando o nome do usuario
  $usuario = $_SESSION['usuario'];

  // cabeçalho
  $tituloAba = "Online";
  require_once "../templates/cabecalho.php";
?>

<header>
<h1><?=$usuario?> logou! ;)</h1>
</header>

<section>
  <img src="img/loritta_uwu.gif">
  <p>E é isso.</p>
<section>

<?php
  // rodapé
  require_once "../templates/rodape.php";
?>
