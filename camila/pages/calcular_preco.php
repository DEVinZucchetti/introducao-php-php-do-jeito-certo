<?php 
    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

    if(!$codigo || !$quantidade) {
        echo "Codigo não encontrado";
        exit;
    } else {
        switch($codigo) {
            case 3456: {
                $valor = number_format($quantidade * 8, 2);
                echo "Você pediu $quantidade Sanduiche e vai custar R$ $valor";
                break;
            }
            case 3457: {
                $valor = number_format($quantidade * 3, 2);
                echo "Você pediu $quantidade Sushi e vai custar R$ $valor";
                break;
            }
            case 3458: {
                $valor = number_format($quantidade * 23, 2);
                echo "Você pediu $quantidade Pizza e vai custar R$ $valor";
                break;
            }
            default: {
                echo "Código não encontrado.";
                break;
            }
        }
    }
?>