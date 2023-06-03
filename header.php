<!DOCTYPE html>
<html lang="pt-br">
    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
        <!-- Font Awesome -->
       
        <title>menu</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>


        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">

            <!-- Logo -->
            <a href="menu.php" class="navbar-brand">Bazar do Senac</a>

            <!-- Menu Hamburguer -->
            <button class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navegacao2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navegacao -->
            <div class="collapse navbar-collapse" id="navegacao2">
                <ul class="navbar-nav ml-auto">
                  
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Comprador</a>

                        <div class="dropdown-menu">
                            <a href="cadastroComprador.php" class="dropdown-item">Cadastrar</a>
                            <a href="consultaComprador.php" class="dropdown-item">Consultar/alterar</a>

                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Produtos</a>

                        <div class="dropdown-menu">
                            <a href="cadastroProduto.php" class="dropdown-item">Cadastrar Produtos</a>
                            <a href="consultaProduto.php" class="dropdown-item">Consultar/alterar Produtos</a>
                                
                        
						</div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Vendedor</a>

                        <div class="dropdown-menu">
                            <a href="cadastroVendedor.php" class="dropdown-item">Cadastrar Vendedor</a>
                            <a href="consultaVendedor.php" class="dropdown-item">Consultar/alterar Vendedor</a>
                          
                        </div>

                    </li>
						<li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Entrada</a>

                        <div class="dropdown-menu">
                            <a href="entradaProduto.php" class="dropdown-item">Entrada Produtos</a>
                            <a href="excluirEntrada.php" class="dropdown-item">Excluir Entrada</a>
                          
                        </div>

                    </li>
				<li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" 
                           data-toggle="dropdown">Vendas</a>

                        <div class="dropdown-menu">
                            <a href="venda.php" class="dropdown-item">Vendas de Produtos</a>
                            <a href="listar.php" class="dropdown-item">Listar Vendas</a>
                          
                        </div>

                    </li>
                    </li>

                    <li class="nav-item ">
                        <a href="logout.php" class="nav-link">Sair</a>

                    </li>


                </ul>
            </div>

        </nav>

