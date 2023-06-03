<?php
session_start();
require_once ('header.php');
?>
<div class="container">
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
    ?>
	<h4 class="text-center text-dark pt-2">Consulta Produto </h3>
	<div class="form-group">
            Pesquisar: <input type="text" class="form-control" id="busca" placeholder="Informe o Nome">
        </div>
  
        <form action="movimento/movimentoProduto.php" method="Post">

            <!-- caixas de texto -->
			<div class="form-group">
                <label for="codigo">Codigo</label>
                <input class="form-control" type="text" readonly id="codigo" name="codigo">
            </div>
            <div class="form-group">
                <label for="nome">Descrição</label>
                <input class="form-control" type="text" id="descricao" name="descricao" placeholder="Digite a Descrição">
            </div>
			<div class="form-group">
                <label for="nome">Valor</label>
                <input class="form-control" type="text" id="valor" name="valor" placeholder="Digite o Valor">
            </div>
			<div class="form-group">
                <label for="nome">Quantidade</label>
                <input class="form-control" readonly type="text" id="quantidade" name="quantidade" placeholder="Digite o Quantidade">
            </div>
			<div class="form-group">
                <label for="nome">Observação</label>
                <input class="form-control" type="text" id="obs" name="obs" placeholder="Observação">
            </div>
            <br>
            <input  class="btn btn-primary" name="alterar" type="submit" value="Alterar">
            <input  class="btn btn-primary" name="deletar" type="submit" value="Excluir">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom2.js"></script>
</body>
