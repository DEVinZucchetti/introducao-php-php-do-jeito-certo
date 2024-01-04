<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="resultado.php">
      <label>Digite aqui o primeiro valor:</label>
      <input type="number" name="valor1" step="any">
      <br>
      <label>Digite aqui o segundo valor</label>
      <input type="number" name="valor2" step="any">
      <br>
      <label>Digite aqui a operação que você deseja fazer: 1- adição, 2- subtração, 3- multiplicação ou 4- divisão</label>
      <input type="number" name="operacao">
      <br>
      <button type="submit">Calcular</button>
  </form>
</body>
</html>