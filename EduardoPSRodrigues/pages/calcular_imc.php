<?php

    /* Criando as variáveis peso e altura e capturando via o método post
    Em seguinda, o código faz uma filtragem da variável para garantir que é um número tipo flutuante  */
    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    /* Se os valores forem falsos, aparece uma mensagem de erro, do contrário faz o cálculo e mostra na tela. */
    if(!$peso || !$altura) {
        echo "O peso e a altura são necessários";
        exit;
    } else {
        $imc = $peso / ($altura * $altura);
        echo "O seu imc é ".number_format($imc, 2);
    }
?>