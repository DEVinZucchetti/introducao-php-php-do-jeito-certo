<?php
    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT); // filter para permitir apenas números
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if (!$peso || !$altura) {
        echo "O peso e altura são obrigatórios"; // Retorno ao usuário
    } else {
        $imc = $peso / ($altura * $altura);
        echo "Peso: $peso Kg<br>";
    echo "Altura: $altura m<br>";
        echo "Seu IMC é ".number_format($imc, 2); // Formata para 2 casas decimais
    }
