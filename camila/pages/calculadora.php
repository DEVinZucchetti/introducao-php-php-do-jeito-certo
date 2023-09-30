<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
<form class="container" method="post" action="resultado.php">
      <label>Valor 1:</label>
      <input type="number" name="valor1" required/>
      <br>
      <label>Valor 2:</label>
      <input type="number" name="valor2" required/>
      <br>
      <label>Escolha sua operação</label>
      <select name="operador">
        <option value="soma"> + </option>
        <option value="subtrai"> - </option>
        <option value="multiplica"> * </option>
        <option value="divide"> / </option>
      </select>
      
      <button type="submit">Calcular</button>
    </form>
</body>
</html>