<?php
  function limparEntrada($entrada) {
    // retirando caracteres desnecessários
    $entrada = trim($entrada);
    // remover barras '\'
    $entrada = stripslashes($entrada);
    // remover código HTML
    $entrada = htmlspecialchars($entrada);

    return $entrada;
  }
?>
