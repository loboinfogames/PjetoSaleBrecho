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
    <h4 class="text-center text-dark pt-2">Cadastrar Vendedor </h3>
        <form action="movimento/movimentoVendedor.php" method="Post">

            <!-- caixas de texto -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite o nome">
            </div>
			<div class="form-group">
                <label for="nome">Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Digite o email">
            </div>
			<div class="form-group">
                <label for="nome">Telefone</label>
                <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Digite o Telefone ">
            </div>
			
            <br>
            <input  class="btn btn-primary" name="salvar" type="submit" value="Salvar">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</php>