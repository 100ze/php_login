<?php
  // iniciando a sessão do usuário
  session_start();

  function logar($usuario, $senha){
    // verifica se as ambas as variáveis possuem valor
    if(!empty($usuario) && !empty($senha)){
      $_SESSION['logado'] = true;
      return true;
    } else {
      $_SESSION['logado'] = false;
      return false; 
    }
  }
?>
