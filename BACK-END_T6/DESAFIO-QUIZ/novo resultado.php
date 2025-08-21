<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
</head>
<body>
    <?php
    // Verifica se todas as respostas foram enviadas
    if (
        isset($_POST['nome']) &&
        isset($_POST['resposta1']) &&
        isset($_POST['resposta2']) &&
        isset($_POST['resposta3']) &&
        isset($_POST['resposta4']) &&
        isset($_POST['resposta5'])
    ) {
        // Sanitiza e normaliza as respostas
        $nome = htmlspecialchars(trim($_POST['nome'])); // evita XSS

        $resposta1 = strtolower(trim($_POST['resposta1']));
        $resposta2 = strtolower(trim($_POST['resposta2']));
        $resposta3 = strtolower(trim($_POST['resposta3']));
        $resposta4 = strtolower(trim($_POST['resposta4']));
        $resposta5 = strtolower(trim($_POST['resposta5']));

        // Contador de acertos
        $acertos = 0;

        // Verifica cada resposta com possíveis variações corretas
        if (in_array($resposta1, ['brasilia', 'brasília'])) $acertos++;
        if (in_array($resposta2, ['cervantes', 'miguel de cervantes'])) $acertos++;
        if (in_array($resposta3, ['oito', '8'])) $acertos++;
        if (in_array($resposta4, ['flamengo'])) $acertos++;
        if (in_array($resposta5, ['quatro', '4'])) $acertos++;

        // Exibe o resultado
        echo "<h2>Resultado do Quiz</h2>";
        echo "<p>Olá, $nome!</p>";
        echo "<p>Você acertou $acertos de 5 perguntas.</p>";

        // Mostrar respostas corretas (opcional)
        echo "<h3>Respostas corretas:</h3>";
        echo "<ul>";
        echo "<li>1. Brasília</li>";
        echo "<li>2. Miguel de Cervantes</li>";
        echo "<li>3. Oito</li>";
        echo "<li>4. Flamengo</li>";
        echo "<li>5. Quatro</li>";
        echo "</ul>";

        // Botão para reiniciar
        echo '<form action="index.php" method="post">';
        echo '<button type="submit">Resetar Quiz</button>';
        echo '</form>';
    } else {
        // Se algo estiver faltando, redireciona
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>