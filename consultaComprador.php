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
    <h4 class="text-center text-dark pt-2">Consulta Comprador </h3>
	<div class="form-group">
            Pesquisar: <input type="text" class="form-control" id="busca" placeholder="Informe o Nome">
        </div>
        <form action="movimento/movimentoComprador.php" method="post">

            <!-- caixas de texto -->
			<div class="form-group">
                <label for="codigo">Codigo</label>
                <input class="form-control" type="text" readonly id="codigo" name="codigo" placeholder="Digite o nome do comprador">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome do comprador">
            </div>
			<div class="form-group">
                <label for="nome">Email</label>
                <input class="form-control" type="email" id="emai" name="email" placeholder="Digite um email vállido">
            </div>
			<div class="form-group">
                <label for="nome">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Digite o nome o telefone">
            </div>
			<div class="form-group">
                <label for="nome">Senacoin</label>
                <input class="form-control" type="text" id="senacoin" name="senacoin">
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
<script type="text/javascript" src="js/custom1.js"></script>
</body>
