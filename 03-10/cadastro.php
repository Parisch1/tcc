<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro | 23/08</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
<div class="formcadastro">
        <section>
        <div class="logo">
            <img src="images/icons/logo.svg" alt="logo" id="logo">
        </div>
        
        
        <div class="form-wrapper">
        <div class="txt-cadastro">Cadastre-se</div>
            <form>
            <div class="input-block">
                <label for="nome-usuario">Nome completo</label>
                <input type="text" id="nome-usuario" />
            </div>
            <div class="input-block">
                <label for="nome-usu-usuario">Nome de usuário</label>
                <input type="text" id="nome-usu-usuario" />
            </div>
            <div class="input-block">
                <label for="email-usuario">Email</label>
                <input type="email" id="email-usuario" />
            </div>
            <div class="input-block">
                <label for="tel-usuario">Telefone</label>
                <input type="number" id="tel-usuario" />
            </div>
            <div class="input-block">
                <label for="cadastro-password">Senha</label>
                <input type="password" id="cadastro-password" />
            </div>
            <button type="submit" class="btn-cadastro" href="#">Continuar</button>
            </form>
            
        </div>
        <div class="logar">
            <div class="login txt">Já possui cadastro?</div>
            <div class="login txt"><a href="login.php" id="linklogin">Entre com o seu login</a></div> 
        </div>
        </section>
        
    </div>
    <script src="cadastro.js"></script>
</body>
</html>