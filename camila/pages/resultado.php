<?php
    $numero1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_INT);
    $numero2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_INT);
    $operador = filter_input(INPUT_POST, 'operador', FILTER_FLAG_EMPTY_STRING_NULL);

    if(!$numero1 || !$numero2) {
        echo "Preencha os campos corretamente";
    } else if($operador === 'soma') {
        $resultado = $numero1 + $numero2;
        echo "$numero1 + $numero2 = $resultado". "<br/>";
        
        echo "<hr />";
    } else if($operador === 'subtrai') {
        $resultado = $numero1 - $numero2;
        echo "$numero1 -$numero2 = $resultado". "<br/>";

        echo "<hr />";
    } else if($operador === 'multiplica') {
        $resultado = $numero1 * $numero2;
        echo "$numero1 * $numero2 = $resultado". "<br/>";

        echo "<hr />";
    } else if($operador === 'divide') {
        $resultado = $numero1 / $numero2;
        echo "$numero1 / $numero2 = $resultado". "<br/>";

        echo "<hr />";
    }

?>