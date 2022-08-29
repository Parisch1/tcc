<?php
include_once "conexao.php";
?>

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
            <form action="" method="POST">
            <div class="input-block">
                <label for="login-usuario">Nome de Usuário</label>
                <input type="text" id="login-usuario" name="nome" />
            </div>
            <div class="input-block">
                <label for="login-password">Senha</label>
                <input type="password" id="login-password" name="senha" />
            </div>
            <button type="submit" name="SendPesqUser" class="btn-login" href="#">Continuar</button>
            </form>
            
        </div>
        <div class="cadastre-se">
          <div class="cadastro-txt">Nao possui login?</div>
          <div class="cadastro-txt"><a href="cadastro.php" id="linkcadastro">Cadastre-se</a></div>
        </div>
        </section>
    </div>
  
    <script src="login.js"></script>

   <?php
    if ( isset($_POST["SendPesqUser"]) ) {
        ////////////echo"Pesquisar";
        $nome=$_POST["nome"];
        $senha=$_POST["senha"];
        $result_usuarios="select * from tb_usuario where Login_Usu like '%$nome%' and Senha_Usu like '%$senha%'";
        $resultado_proc=mysqli_query($conn,$result_usuarios);
        $qtd = mysqli_num_rows($resultado_proc);

        if ($qtd ==1 ) {
            echo"achou aqui";
            if($nome=="Admindono" && $senha=="donodaloja"){
                header("location:cadastro.php");

            }else{
            echo"Esse não é seu login";
            }
        }else {
            echo "não achei zika";
        }
      }
        ?>

    <script src="login.js"></script>
  </body>
</html>