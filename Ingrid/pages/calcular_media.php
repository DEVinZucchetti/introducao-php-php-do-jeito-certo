<?php 

    $valor1 = filter_var($_POST['valor1'], FILTER_VALIDATE_FLOAT);
    $valor2 = filter_var($_POST['valor2'], FILTER_VALIDATE_FLOAT);

    if(!$valor1 || !$valor2) {
        echo "Para calcular a média, é necessário que dois valores sejam digitados";
        exit;
    } else {
        $media = ($valor1 + $valor2)/ 2;
        echo "Resultado: ".number_format($media);
    }
?>