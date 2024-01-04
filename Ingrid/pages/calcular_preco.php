<?php
    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

    if(!$codigo || !$quantidade) {
        echo "Informações inválidas";
        exit;
    } else {
        switch($codigo) {
            case 3456: {
                $valor = number_format($quantidade * 6);
                echo "Você pediu $quantidade coxinha(s) e vai pagar $valor";
                break;
            }
            case 3456: {
                $valor = number_format($quantidade * 10);
                echo "Você pediu $quantidade sushi(s) e vai pagar $valor";
                break;
            }

            case 3456: {
                $valor = number_format($quantidade * 8);
                echo "Você pediu $quantidade pastel(is) e vai pagar $valor";
                break;
            }

            default: {
                echo "Código inválido";
                break;
            }
        }
    }
?>