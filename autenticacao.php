<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>autenticacao de login</title>

        <script type="text/javascript">
            function login() {
				
              setTimeout("window.location='menu.php'");
			}
			function login2() {
				
              setTimeout("window.location='menu2.php'");
			}

        </script>

    </head>
    <body>

        <?php
        require 'classes/conexao.php';
		require 'classes/usuarios.php';
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
    

			$A = new usuarios("","","","","");
			$A->mostra($conexao, $usuario,$senha);
            if ($A->getUsuario()) {
                $_SESSION['usuario'] = $A->getUsuario();
                $_SESSION['senha'] = $A->getSenha();
                $_SESSION['perfil'] = $A->getPerfil();
                $_SESSION['nome'] = $A->getNome();
                $_SESSION['cod'] = $A->getCodigo();
				
					if($_SESSION['perfil']==1){
					 echo "<script>login()</script>";	
					}else{
						 echo "<script>login2()</script>";	
					}
               
             
                         } else {

                echo ("<script type='text/javascript'> location.href='index.php';</script>");
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário ou senha incorretos!!!</div>";
            
        }
        ?>

    </body>
</html>