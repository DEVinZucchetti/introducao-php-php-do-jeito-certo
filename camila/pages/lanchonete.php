<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>
<body>
  <form class="container" method="post" action="calcular_preco.php">
      <label>Código:</label>
      <input type="text" name="codigo" required/>
      <br>
      <label>Quantidade:</label>
      <input type="number" name="quantidade" required/>
      <br>
      <button type="submit">Calcular total</button>
    </form>
</body>
</html>