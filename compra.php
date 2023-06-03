<?php
session_start();
require_once ('header2.php');
require 'classes/conexao.php';
require_once 'classes/vendas.php';
require_once 'classes/comprador.php';

$codProduto= $_GET['codProduto'];
$produto= $_GET['produto'];
$email =$_SESSION['usuario'];
$valor =$_GET['valor'];
$A= new comprador("", "","","","");
$codComprador = $A->cod($conexao,$email);
$comprador = $_SESSION['nome'];
$codVendedor= "";
$vendedor= "";
$data = date("Y-m-d");         
$quantidade=1;


?>
<div class="container">

    <h4 class="text-center text-dark pt-2">Realizar Compra</h3><br>
       

        <form action="movimento/movimentoVendas.php" method="Post">

            <!-- caixas de texto -->
			<div class="input-group">
            
                <input class="form-control" type="text" id="data"  value ="<?php echo $data; ?>" name="data">
 
                <input class="form-control" readonly type="text" id="codComprador" name="codComprador" value ="<?php echo $codComprador; ?>">
                 <input class="form-control" readonly type="text" id="comprador1" name="comprador" value ="<?php echo $comprador; ?>">
            </div>
			<br>
			<div class="input-group">
                <input class="form-control" readonly type="text" id="codProduto" name="codProduto" value ="<?php echo $codProduto; ?>">
                <input class="form-control" readonly type="text" id="produto1" name="produto" value ="<?php echo $produto; ?>">
                <input class="form-control" readonly type="text" id="valor" value ="<?php echo $valor; ?>" name="valor">
            </div>
            
			
			 
			<div class="form-group">
                <label for="nome">Quantidade</label>
                <input class="form-control"  type="text" id="quantidade" value ="<?php echo $quantidade; ?>" name="quantidade" placeholder="Digite o Quantidade">
            </div>
			
            <br>
            <input  class="btn btn-primary" name="salvar" type="submit" value="Salvar">
        </form>
     
</div>



</body>
</php>