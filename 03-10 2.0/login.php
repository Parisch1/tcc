<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | 23-08</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="formlogin">
        <section>
        <div class="logo">
          <a href="principal.php">
            <img src="images/icons/logo.svg" alt="logo" id="logo">
          </a>
        </div>
        
        
        <div class="form-wrapper">
        <div class="txt-login">Login</div>
            <form>
            <div class="input-block">
                <label for="login-usuario">Nome de Usuário</label>
                <input type="text" id="login-usuario" />
            </div>
            <div class="input-block">
                <label for="login-password">Senha</label>
                <input type="password" id="login-password" />
            </div>
            <button type="submit" class="btn-login" href="#">Continuar</button>
            </form>
            
        </div>
        <div class="cadastre-se">
          <div class="cadastro-txt">Nao possui login?</div>
          <div class="cadastro-txt"><a href="cadastro.php" id="linkcadastro">Cadastre-se</a></div>
        </div>
        </section>
        
    </div>
    <script src="login.js"></script>
  </body>
</html>