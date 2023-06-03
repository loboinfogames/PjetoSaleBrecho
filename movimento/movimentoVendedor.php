<?php
session_start();
require '../classes/conexao.php';
require_once 'procedimentos.php';
require_once '../classes/vendedor.php';
require_once '../classes/usuarios.php';

$cod = isset($_POST['codigo']) ? $_POST['codigo'] : "";

if(isset($_POST['salvar'])or isset($_POST['alterar'])){


$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];


$A = new vendedor($cod,$nome,$email, $telefone);
 

}

$delete = isset($_POST['deletar']) ? $_POST['deletar'] : "";
$alterar = isset($_POST['alterar']) ? $_POST['alterar'] : "";
$salvar = isset($_POST['salvar']) ? $_POST['salvar'] : "";

if ($delete) {
	$A = new vendedor("","","","");
    $A->deletar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Usuario /Excluido com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaVendedor.php';</script>");
}


if ($salvar) {
   
	$A->insere($conexao);
    $B = new usuarios(0, $nome, $email, $telefone, 1);
	$B->insere($conexao); 
	$_SESSION['msg'] = "<div class='alert alert-success'>Vendedor cadastrado com sucesso!</div>";
	
   echo("<script type='text/javascript'> location.href='../cadastroVendedor.php';</script>");
}
if ($alterar) {
	$A->alterar($conexao,$cod);
    $_SESSION['msg'] = "<div class='alert alert-success'>Dados atualizados com sucesso!</div>";
    echo("<script type='text/javascript'> location.href='../consultaVendedor.php';</script>");
}
