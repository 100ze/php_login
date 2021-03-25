<?php
  require_once "../app/limparEntrada.php";
  require_once "../app/logar.php";

  // variáveis
  $tituloAba = "Login";
  // armazenando endereço atual do script php
  // em execução
  $enderecoScriptPHP = limparEntrada($_SERVER["PHP_SELF"]);

  // verificando se o usuário enviou algum dado
  if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    // limpando entradas
    $usuario = limparEntrada($_POST['usuario']);
    $senha = limparEntrada($_POST['senha']);
    
    // logando o usuário e armazenando o sucesso
    // ou falha
    $logado = logar($usuario, $senha);

    if($logado){
      // redirecionando caso esteja logado
      header("location: logado.php");
      die();
    }
  }

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
