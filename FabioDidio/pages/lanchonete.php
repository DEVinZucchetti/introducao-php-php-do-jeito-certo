<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>

<body>
  <h3>Lanchonete</h3>
  <form method="post" action="calcular_preco.php">
    <label>Código</label><br />
    <input type="number" name="codigo" /><br />
    <label>Quantidade</label><br />
    <input type="number" name="quantidade" /><br />
    <button type="submit">Calcular preço</button>

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