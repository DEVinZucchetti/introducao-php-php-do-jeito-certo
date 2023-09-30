<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora IMC</title>
</head>

<body>
  <h3>Calculadora IMC</h3>
  <form method="post" action="calcular_imc.php">
    <label>Peso</label><br>
    <input type="number" name="peso" step="any"><br>
    <label>Altura</label><br>
    <input type="number" name="altura" step="any"> <br>
    <button type="submit">Calcular</button>

  </form>
</body>

</html>
<style>
  input {
    margin-top: 8px;
    margin-bottom: 8px;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  button {
    margin-top: 8px;
  }
</style>