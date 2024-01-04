<?php

    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if(!$peso || !$altura) {
        echo "Para o cálculo do IMC, é necessário termos as informações de peso e altura";
        exit;
    } else {
        $imc = $peso/ ($altura * $altura);
        echo "IMC: ".number_format($imc, 2);
    }
?>
