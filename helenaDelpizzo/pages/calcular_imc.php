<?php 
  $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
  $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

  if(!$peso || !$altura) {
    echo "O peso e a altura sao necessarios";
    exit;
  } else {
    $imc = $peso / ($altura * $altura);
    echo "O seu IMC e" .number_format($imc, 2);
  }




?>