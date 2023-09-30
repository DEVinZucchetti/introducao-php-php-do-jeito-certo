<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Resultado , initial-scale=1.0">
    <title>Resultado do IMC</title>
</head>
<body>
    <?php 
    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if(!$peso || !$altura) {
        echo "Preencha os dados corretamente";
        exit;
    } else {
        $imc = $peso / ($altura * $altura);
        echo "Seu IMC é " .number_format($imc, 2);  //função pow($altura, 2)
    }
    ?>
    
</body>
</html>