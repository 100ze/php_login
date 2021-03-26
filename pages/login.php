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
      // salvando o nome do usuário na sua sessão
      $_SESSION['usuario'] = $usuario;

      // redirecionando caso esteja logado
      header("location: logado.php");
      die();
    }
  }

  // cabeçalho
  require_once "../templates/cabecalho.php";
?>

<div class="w3-container w3-margin-top w3-padding s-center s-login">
  <header>
    <h1 class="">Login</h1>
  </header>

  <section>
    <form action="<?=$enderecoScriptPHP?>" method="post">
      <div class="w3-padding-16">
        Usuário: <br><input type="text" name="usuario"><br>
      </div>

      <div class="w3-padding-16">
        Senha: <br><input type="password" name="senha"><br>
      </div>

      <div class="w3-padding-16">
        <input type="submit">
      </div>
    </form>
  <section>
</div>

<?php
  // rodapé
  require_once "../templates/rodape.php";
?>
