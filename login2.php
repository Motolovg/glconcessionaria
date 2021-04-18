<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="center">
      <input type="checkbox" id="show">
      <label for="show" class="show-btn">LG concessionaria</label>
      <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
        <div class="text">
Gerente, é você?</div>
          <form action="realiza_login.php" method="POST">
                        <div class="data">
                          <label for="login">Usuário</label>
                          <input type="text" name="login" id="login" required>
                        </div>
              <div class="data">
                          <label for="senha">Senha</label>
                          <input type="password" name="senha" id="senha" required>
                        </div>
              <div class="forgot-pass">
              <a href="#">Um gerente não pode esquecer sua senha</a></div>
              <div class="btn">
                          <div class="inner">
              </div>
              <button type="submit" name="btnLogin" id= "btnlogin">logar</button>
          </form>          
</div>
</body>
</html>
