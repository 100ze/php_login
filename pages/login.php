<?php
  $tituloAba = "Login";
  require_once "../templates/cabecalho.php";
?>

<header>
  <h1>Login</h1>
</header>

<section>
  <form action="logar.php" method="post">
  Usuário: <input type="text" name="usuario"><br>
  Senha: <input type="password" name="senha"><br>
  <input type="submit">
  </form>
<section>

<?php
  require_once "../templates/rodape.php";
?>
