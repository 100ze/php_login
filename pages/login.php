<?php
  // variáveis
  $tituloAba = "Login";
  // armazenando endereço atual do script php
  // em execução
  $enderecoScriptPHP = htmlspecialchars($_SERVER["PHP_SELF"]);

  // cabeçalho
  require_once "../templates/cabecalho.php";
?>

<header>
  <h1>Login</h1>
</header>

<section>
<form action="<?=$enderecoScriptPHP?>" method="post">
  Usuário: <input type="text" name="usuario"><br>
  Senha: <input type="password" name="senha"><br>
  <input type="submit">
  </form>
<section>

<?php
  // rodapé
  require_once "../templates/rodape.php";
?>
