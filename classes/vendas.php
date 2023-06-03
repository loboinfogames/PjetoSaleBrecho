<?php

class vendas {

    private $codigo;
    private $codProduto;
	private $produto;
    private $codComprador;
	private $comprador;
	private $codVendedor;
	private $vendedor;
    private $data;
	private $quantidade;
  	
	function __construct($codigo, $codProduto, $produto, $codComprador,$comprador,$codVendedor,$vendedor,$data ,$quantidade) {
        $this->codigo = $codigo;
        $this->codProduto = $codProduto;
		$this->produto = $produto;
        $this->codComprador = $codComprador;
		$this->comprador = $comprador;
		$this->codVendedor = $codVendedor;
		$this->vendedor = $vendedor;
		$this->data = $data;
        $this->quantidade = $quantidade;
		
        
    }
	 
    function getCodigo() {
        return $this->codigo;
    }
    function getCodProduto() {
        return $this->codProduto;
    }
	function getProduto() {
        return $this->produto;
    }
		
	function getCodComprador() {
        return $this->codComprador;
    }
	function getComprador() {
        return $this->comprador;
    }
 function getQuantidade() {
        return $this->quantidade;
    }
  function getCodVendedor() {
        return $this->codVendedor;
    }  
    function getVendedor() {
        return $this->vendedor;
    }  
	function getData() {
        return $this->data;
    }  
 
 
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    function setCodProduto($codProduto) {
        $this->codProduto=$codProduto;
    }
	function setProduto($produto) {
        $this->produto=$produto;
    }
		
	function setCodComprador($codComprador) {
        $this->codComprador=$codComprador;
    }
	function setComprador($comprador) {
        $this->comprador=$comprador;
    }
 function setQuantidade($quantidade) {
        $this->quantidade=$quantidade;
    }
  function setCodVendedor($codVendedor) {
        $this->codVendedor=$codVendedor;
    }  
    function setVendedor($vendedor) {
        $this->vendedor=$vendedor;
    }  
	function setData($data) {
        $this->data=$data;
    }  
 
 

 

    
    function mostra($conexao, $data) {

		$query = "select * from vendas where data = '$data'";
        foreach($conexao->query($query) as $chave=>$valor){
		$this->codigo[] = $valor[0];
		$this->codProduto[]= $valor[1];
		$this->produto[]= $valor[2];
		$this->codComprador[] = $valor[3];
		$this->comprador[] = $valor[4];
		$this->codVendedor[]= $valor[5];
		$this->vendedor[]= $valor[6];
		$this->quantidade[] = $valor[8];
		
	
		
		
		
		}
		
    
    }

		
    
function insere($conexao) {
	Try{
$query = "INSERT INTO vendas(codProduto, produto,codComprador,comprador,codVendedor,vendedor,data,quantidade) VALUES ('$this->codProduto','$this->produto','$this->codComprador','$this->comprador','$this->codVendedor','$this->vendedor','$this->data','$this->quantidade')";
$conexao->query($query);
 
}catch(Error $e){
		echo $e;
		
	}

}
function deletar($conexao, $cod) {
try{
$query = "delete from vendas where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();
}catch(Error $e){
		echo $e;
		
	}

}
   


}