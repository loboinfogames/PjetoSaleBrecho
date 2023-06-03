<?php
session_start();
require_once ('header2.php');
require 'classes/conexao.php';
require_once 'classes/entrada.php';
$A = new entrada("","","","","","","","","");
$nome =$_SESSION['nome'];
echo $nome;
$A->mostra2($conexao,$nome);
?>
<div class="container">

    <h4 class="text-center text-dark pt-2">Suas Contribuições</h3>
       
<br>
<?php

  for($x=0; $x<count($A->getCodigo()); $x++){ 
?>
			<div class="input-group">
                
                <input class="form-control" value ="<?php echo $A->getProduto()[$x]; ?>" type="text" name="dataE">
				<input class="form-control" value ="<?php echo $A->getVendedor()[$x]; ?>" type="text" name="dataE">
				<input class="form-control" value ="<?php echo $A->getQuantidade()[$x]; ?>" type="text" name="dataE">
				<input class="form-control" value ="<?php echo $A->getData()[$x]; ?>" type="text" name="dataE">
					
            </div> 
			
      
		<br>
    <?php
}
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