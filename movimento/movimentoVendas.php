<?php
session_start();
require '../classes/conexao.php';

require_once '../classes/vendas.php';
require_once '../classes/produto.php';
require_once '../classes/comprador.php';


$cod = isset($_GET['codigo']) ? $_GET['codigo'] : "";


if(isset($_POST['salvar'])or isset($_POST['alterar'])){

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

$codProduto=$_POST['codProduto'];
$produto=$_POST['produto'];
$codComprador=$_POST['codComprador'];
$comprador=$_POST['comprador'];
$codVendedor=$_POST['codVendedor'];
$vendedor=$_POST['vendedor'];
$quantidade=$_POST['quantidade'];
$data = $_POST['data'];
$valor=$_POST['valor'];
$valort = $valor*  $quantidade;

$A = new vendas($cod, $codProduto, $produto, $codComprador,$comprador,$codVendedor,$vendedor,$data ,$quantidade);
 

}


$delete = isset($_GET['delete']) ? $_GET['delete'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";



if ($delete) {
	$A = new entrada("","","","","","");
    $A->deletar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuario /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../excluirEntrada.php';</script>");
}


if ($salvar) {
   
	$A->insere($conexao);
print_r($A);
	$B = new produto("","", "", "","");
	$B->estoque2($conexao,$codProduto,$quantidade);
	$C = new comprador("","","","","");
	$C->atualiza2($conexao,$codComprador,$valort);
    $_SESSION['msg'] = "<div class='alert alert-success'>Venda Realizada com sucesso!</div>";

   //echo("<script type='text/javascript'> location.href='../venda.php';</script>");
}

