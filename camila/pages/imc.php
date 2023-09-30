<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>
  <style>
        .container {
            margin: 0 auto;
            width: 30%;
            border: 1px solid #000;
            padding: 10px;

            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
  </style>
</head>
<body>

  <form class="container" method="post" action="calcular_imc.php">
    <label>Peso (kg):</label>
    <input type="number" name="peso" step="any" required/>
    <br>
    <label>Altura (m):</label>
    <input type="number" name="altura" step="any" required/>
    <br>
    <button type="submit">Calcular</button>
  </form>
  
</body>
</html>