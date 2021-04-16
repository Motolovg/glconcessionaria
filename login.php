<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="realiza_login.php" method="POST">
        <!-- Campo de username -->
        <label for="login">Usuário:</label>
        <input type="text" name="login" id="login" required>
    
        <!-- Campo de senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <input type="submit" name="btnLogin" id="btnLogin" value="Entrar">
    </form>
</body>
</html>