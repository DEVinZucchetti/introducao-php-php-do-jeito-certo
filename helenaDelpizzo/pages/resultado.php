<?php 

  $numero = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);
  if(!$numero) {
    echo "Insira um valor válido";
  } else {
    for ($contador = 1; $contador <= 10; $contador++) {
        $resultado = $contador + $numero;
        echo "$numero + $contador = $resultado". "<br />";
    }
    echo "<hr />";
    for ($contador = 1; $contador <= 10; $contador++) {
        $resultado = $contador - $numero;
        echo "$numero - $contador = $resultado". "<br />";
    }
    echo "<hr />";
    for ($contador = 1; $contador <= 10; $contador++) {
        $resultado = $contador * $numero;
        echo "$numero * $contador = $resultado". "<br />";
    }
    echo "<hr />";
    for ($contador = 1; $contador <= 10; $contador++) {
        $resultado = number_format($contador / $numero, 2);
        echo "$numero / $contador = $resultado". "<br />";
    }
    echo "<hr />";
  }

?>