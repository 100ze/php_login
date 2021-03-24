<?php
  // variáveis
  $tituloAba = "Login";
  $enderecoScriptPHPAtual = htmlspecialchars($_SERVER["PHP_SELF"]);

  // cabeçalho
  require_once "../templates/cabecalho.php";
?>

<header>
  <h1>Login</h1>
</header>

<section>
<form action="<?=$enderecoScriptPHPAtual?>" method="post">
  Usuário: <input type="text" name="usuario"><br>
  Senha: <input type="password" name="senha"><br>
  <input type="submit">
  </form>
<section>

<?php
  // rodapé
  require_once "../templates/rodape.php";
?>
