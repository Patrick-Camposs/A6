<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>

<body>
    <?php
    if (isset($_GET['nome'])) {
        //código aqui
        $nome = $_GET["nome"];
        echo "Nome: " . $nome;

    }
    ?>
</body>

</html>