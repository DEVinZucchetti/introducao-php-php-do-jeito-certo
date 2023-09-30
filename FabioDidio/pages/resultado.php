<?php
$valor1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_FLOAT);
$valor2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_FLOAT);
$operacao = filter_input(INPUT_POST, 'operacao');

if ($valor1 === null || $valor2 === null || $operacao === null) {
    echo "Informações incorretas";
} else {

    switch ($operacao) {
        case 'soma': {
                $resultado = $valor1 + $valor2;
                echo "O resultado é $resultado";
                break;
            }
        case 'subtracao': {
                $resultado = $valor1 - $valor2;
                echo "O resultado é $resultado";
                break;
            }
        case 'multiplicacao': {
                $resultado = $valor1 * $valor2;
                echo "O resultado é $resultado";
                break;
            }
        case 'divisao': {
                if ($valor2 != 0) {
                    $resultado = $valor1 / $valor2;
                    echo "O resultado é $resultado";
                } else {
                    echo "Erro: Divisão por zero não é permitida.";
                }
                break;
            }
        default: {
                echo "Operação incorreta";
                break;
            }
    }
}
?>
