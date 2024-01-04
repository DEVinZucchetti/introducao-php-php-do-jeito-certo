<?php 
    $valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT);
    $valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT);
    $operador = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_INT);


    if(!$valor1 || !$valor2) {
        echo "Informe os dois valores para fazer a operação";
     } else {
        if ($operador === 1) {
            $resultado = $valor1 + $valor2;
            $resultado;
        }

        else if ($operador === 2) {
            $resultado = $valor1 - $valor2;
            $resultado;
        }

        else if ($operador === 3) {
            $resultado = $valor1 * $valor2;
            $resultado;
        }

        else {
            $resultado = $valor1 / $valor2;
            $resultado;
        }
    }

?>