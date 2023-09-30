<?php
 
 $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
 $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

 if(!$codigo || !$quantidade) {
    echo "Informações incorretas";
    exit;
 } else {

    switch($codigo) {
        case 123: {
            $valor = number_format($quantidade * 5, 2);
            echo "Você pediu $quantidade Sanduíches(s) e vai pagar R$$valor";
            break;
        }
        case 456: {
            $valor = number_format($quantidade * 7, 2);
            echo "Você pediu $quantidade Batata(s) e vai pagar R$$valor";
            break;
        }
        case 789: {
            $valor = number_format($quantidade * 10, 2);
            echo "Você pediu $quantidade Sorvete(s) e vai pagar R$$valor";
            break;
        }
        default: {
            echo "Código não localizado";
            break;
        }

    }
 }

?>