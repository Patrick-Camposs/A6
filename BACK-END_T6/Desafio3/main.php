<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Desafio com Include</title>
</head>

<body>
    <?php include 'functions.php'; ?>
    <h2>Desafio com Include</h2>
    <?php
    $num1 = 3;
    $num2 = 7;
    echo "<p>A soma de $num1 e $num2 é: " . calcularSoma($num1, $num2) . "</p>";
    ?>
</body>

</html>