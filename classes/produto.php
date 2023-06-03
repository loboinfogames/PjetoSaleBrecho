<?php

class produto {

    private $codigo;
    private $descricao;
    private $valor;
    private $quantidade;
	private $obs;
  	
	function __construct($codigo, $descricao, $valor, $quantidade,$obs) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
		$this->obs = $obs;
        
    }
	 
    function getCodigo() {
        return $this->codigo;
    }
    function getDescricao() {
        return $this->descricao;
    }
	function getValor() {
        return $this->valor;
    }
 function getQuantidade() {
        return $this->quantidade;
    }
  function getObs() {
        return $this->obs;
    }  
    

 
function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
function setDescricao($descricao) {
        $this->descricao = $descricao;
    }	
function setValor($valor) {
        $this->valor = $valor;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
 function setObs($obs) {
        $this->obs = $obs;
    }
 

    
    function mostra($conexao, $nome,$senha) {
		$query = "select * from Vendedores where nome ='$nome' ";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		
		$this->nome = $user->Nome;
		
		
    }


		
    
function insere($conexao) {
	Try{
$query = "INSERT INTO produto(descricao, valor,quantidade,obs) VALUES ('$this->descricao','$this->valor','$this->quantidade','$this->obs')";
$conexao->query($query);
	}catch(Exception $e){
		echo $e;
		
	}


}

function deletar($conexao, $cod) {

$query = "delete from produto where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
function estoque($conexao,$cod,$qtd) {
		$query = "UPDATE produto SET quantidade=quantidade + '$qtd' WHERE cod= $cod";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
	
	} 
function estoque2($conexao,$cod,$qtd) {
		$query = "UPDATE produto SET quantidade=quantidade - '$qtd' WHERE cod= $cod";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
	
	} 
 function alterar($conexao,$cod) {
		$query = "UPDATE produto SET descricao='$this->descricao',valor='$this->valor',quantidade='$this->quantidade',obs='$this->obs' WHERE cod= $cod";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
	
	}  


}