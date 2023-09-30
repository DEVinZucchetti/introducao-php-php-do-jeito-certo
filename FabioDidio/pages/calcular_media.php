    <?php
    $nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
    $nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
    $nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);
    $nota4 = filter_input(INPUT_POST, 'nota4', FILTER_VALIDATE_FLOAT);

    if ($nota1 !== false && $nota2 !== false && $nota3 !== false && $nota4 !== false) {
        
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<table border='1'>";
        echo "<tr><th>Nota</th><th>Valor</th></tr>";
        echo "<tr><td>Nota 1</td><td>$nota1</td></tr>";
        echo "<tr><td>Nota 2</td><td>$nota2</td></tr>";
        echo "<tr><td>Nota 3</td><td>$nota3</td></tr>";
        echo "<tr><td>Nota 4</td><td>$nota4</td></tr>";
        echo "<tr><td>Média</td><td>$media</td></tr>";
        echo "</table>";
    } else {
        echo '<p>Preencha todas as notase.</p>';
    }
