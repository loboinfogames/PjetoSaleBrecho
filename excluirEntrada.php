<?php
session_start();
require_once ('header.php');
$dataE = isset($_POST['dataE']) ? $_POST['dataE'] : "";
if($dataE){
require 'classes/conexao.php';
require_once 'classes/entrada.php';
$A = new entrada("","","","","","","","","");
$A->mostra($conexao, $dataE);

}
?>
<div class="container">
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
    ?>
    <h4 class="text-center text-dark pt-2">Excluir Entrada</h3>
        <form action="excluirEntrada.php" method="Post">

            <!-- caixas de texto -->
           
			<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text ">Selecione a Data</span>
                </div>
                <input class="form-control" type="date" name="dataE">
                <input class="btn btn-primary" name="senha" type="submit" value="Localizar">
            </div> 
</form>  
<br>
<?php
if($dataE){
  for($x=0; $x<count($A->getCodigo()); $x++){ 
?>
			<div class="input-group">
                
                <input class="form-control" value ="<?php echo $A->getProduto()[$x]; ?>" type="text" name="dataE">
				<input class="form-control" value ="<?php echo $A->getComprador()[$x]; ?>" type="text" name="dataE">
					<input class="form-control" value ="<?php echo $A->getQuantidade()[$x]; ?>" type="text" name="dataE">
                <a href="movimento/movimentoEntrada.php?codigo=<?php echo $A->getCodigo()[$x]; ?>&delete=deletar"><button class="btn btn-primary"  type="button">Excluir</button></a>
				
            </div> 
			
      
		<br>
    <?php
}}
?>      
        

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>