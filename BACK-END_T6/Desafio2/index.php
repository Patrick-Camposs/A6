<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <title>Desafio com POST</title>
</head>
<body>
 <h2>Login</h2>
 <form action="check_login.php" method="post">
 <label for="username">Usuário:</label>
 <input type="text" id="username" name="username" required><br>
 <label for="password">Senha:</label>
 <input type="password" id="password" name="password" required><br>
 <button type="submit">Login</button>
 </form>
</body>
</html>