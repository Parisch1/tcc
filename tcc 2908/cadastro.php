<?php
    include_once "conexao.php";
?>

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
            <form action="" method="get">
                    <div class="input-block">
                        <label for="nome-usuario">Nome completo</label>
                        <input type="text" name="nomecli" id="nome-usuario" />
                    </div>
                    <div class="input-block">
                        <label for="nome-usu-usuario">Nome de usuário</label>
                        <input type="text" name="loginusu" id="nome-usu-usuario" />
                    </div>
                    <div class="input-block">
                        <label for="email-usuario">Email</label>
                        <input type="email" name="emailcli" id="email-usuario" />
                    </div>
                    <div class="input-block">
                        <label for="tel-usuario">Telefone</label>
                        <input type="number" name="telecli" id="tel-usuario" />
                    </div>
                    <div class="input-block">
                        <label for="cadastro-password">Senha</label>
                        <input type="password" name="senhausu" id="cadastro-password" />
                    </div>
                    <!--<button type="submit" name="cadastro" class="btn-cadastro">Continuar</button>-->   
                    <input type="submit" name="cadastro" class="diferente" value="abc">                
            </form>
            
        </div>
        <div class="logar">
            <div class="login txt">Já possui cadastro?</div>
            <div class="login txt"><a href="login.php" id="linklogin">Entre com o seu login</a></div> 
        </div>
        </section>
        
    </div>

<?php

if( isset($_GET["cadastro"]) ) {
        echo "clicou no botão cadastro";

        $loginusu=$_GET["loginusu"];
        $senhausu=$_GET["senhausu"];
        $emailcli=$_GET["emailcli"];
        $nomecli=$_GET["nomecli"];
        $telecli=$_GET["telecli"];
        $endcli=1;

        $erro="";
        
        if ($loginusu == "") 
        { 
            $erro .= "O usuario está vazio<br/>";
        }
        
        if ($senhausu == "") 
        { 
            $erro .= "A senha está vazia<br/>";
        }
        if ($emailcli == "") 
        { 
            $erro .= "O email está vazio<br/>";
        }
        if ($nomecli == "") 
        { 
            $erro .= "O nome está vazio<br/>";
        }
        if ($telecli == "") 
        { 
            $erro .= "O telefone está vazio<br/>";
        }


        if($erro=="")
        {
            $sql="SELECT LOGIN_USU, SENHA_USU
                  FROM tb_usuario
                  WHERE LOGIN_USU LIKE '$loginusu'";
                 
            $result=mysqli_query($conn,$sql)or die ("Impossivel verificar o usuario");
            $linha=mysqli_fetch_assoc($result);

            // verifica se já existe sigla cadastrada no banco
            // não existindo faço insert
            $qtd = mysqli_num_rows($result);
            echo "A qtd é " . $qtd;

            if ($qtd == 0)
            {				
                  $sql1="INSERT INTO tb_usuario
                         (LOGIN_USU,SENHA_USU)
                         VALUES ('$loginusu','$senhausu')";

                mysqli_query($conn,$sql1) or die ("Impossivel inserir seu usuario");

                $codusu = mysqli_insert_id($conn);

                $sql3="INSERT INTO tb_cliente
                         (NOME_CLI,EMAIL_CLI,END_CLI,TELE_CLI,USU_CLI)
                         VALUES('$nomecli','$emailcli','$endcli','$telecli','$codusu')";	 	 
                             
                mysqli_query($conn,$sql3) or die ("Impossivel inserir o cliente!");

                echo "<p><font size='5' color='green'>Obrigado por Cadastrar o Usuario</font></p>
                      <form>   
                         <p><input type='submit' value='Novo Cadastro'/></p>
                      </form>";					
            }
            // senão, informo que já está cadastrada a sigla				
            else
            {
                echo "<font size=5 color= red>Usuario <br/>já cadastrado<br><br></font>";
                echo "<form action='' method=''>
                        <p>  <input type='submit'  value='Limpar'/></p>
                     </form>";
            }
            // Fechar conexão
            ////////mysqli_close($conn);
        }
        else
        {
            echo("<font size=5 color=green><b>Erro ao enviar o formulario!<br> Verifique as mensagens abaixo:<br></font>");
            echo("<font size=5 color=red>$erro</b></font>");
                echo"<form action='' method=''>
                    <p> <input type='submit'  value='Voltar'/></p>
                </form>";
        }
} 
//else {
    //echo "não clicou no botãooooooooooooo!";
//}

?>    
<script src="cadastro.js"></script>
</body>
</html>