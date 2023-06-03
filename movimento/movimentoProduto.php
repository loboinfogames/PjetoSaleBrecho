<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/produto.php';

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

if(isset($_POST['salvar'])or isset($_POST['alterar'])){


$descricao=$_POST['descricao'];
$valor=$_POST['valor'];
$quantidade=$_POST['quantidade'];
$obs = $_POST['obs'];

$A = new produto($cod, $descricao, $valor, $quantidade,$obs);
 

}






$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";

if ($delete) {
	$A = new produto("","","","","");
    $A->deletar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuario /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaProduto.php';</script>");
}


if ($salvar) {
   
	$A->insere($conexao);
    $_SESSION['msg'] = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
  
   echo("<script type='text/javascript'> location.href='../cadastroProduto.php';</script>");
}
if ($alterar) {
	$A->alterar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>SDados atualizados com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaProduto.php';</script>");
}
