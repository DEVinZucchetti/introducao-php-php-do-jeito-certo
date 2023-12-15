<?php
    $nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
    $nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
    $nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);
    $nota4 = filter_input(INPUT_POST, 'nota4', FILTER_VALIDATE_FLOAT);

    if(!$nota1 || !$nota2 || !$nota3 || !$nota4){
        echo "Todos os campos precisam ser preenchidos";
    } else {
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        echo $media;
    }
?>