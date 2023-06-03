<?php

class funcionario {
	private $cod;
	private $nome;
	private $cpf;
	private $identidade;
	private $sexo;
	private $CTPS;
	private $serie;
	private $titulo;	
	private $CNH;
	private $rua;
	private $numero;
	private $bairro;
	private $cidade;
	private $estado;
	private $pais;
	private $telefone;
	private $estadoCivil;
	private $escolaridade;
	private $registro;
	private $certidao;
	private $certificado;
	private $filhos;
	private $email;
	private $status;
	private $dependentes;
	
	function __construct($cod, $nome, $cpf, $identidade, $sexo, $CTPS, $serie, $titulo, $CNH, $rua, $numero, $bairro, $cidade, $estado,$pais, $telefone, $estadoCivil, $escolaridade, $registro, $certidao, $certificado, $filhos, $email, $status, $dependentes){
		$this->cod= $cod;
		$this->nome= $nome;
		$this->cpf=$cpf;
		$this->identidade=$identidade;
		$this->sexo=$sexo;  
		$this->CTPS=$CTPS;         
		$this->serie=$serie;
		$this->titulo=$titulo;
		$this->CNH=$CNH;
		$this->rua=$rua;
		$this->numero= $numero;
		$this->bairro=$bairro;
		$this->cidade=$cidade;
		$this->estado=$estado;
		$this->pais=$pais;
		$this->telefone=$telefone;
		$this->estadoCivil=$estadoCivil;
		$this->escolaridade= $escolaridade; 
		$this->registro=$registro;    
		$this->certidao=$certidao;
		$this->certificado=$certificado;
		$this->filhos=$filhos; 
		$this->email=$email;
		$this->status= $status;
		$this->dependentes=$dependentes;
		
	}
	
	function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
	function setNome($nome) {
        $this->nome = $nome;
    }
	function setCpf($cpf) {
        $this->cpf = $cpf;
    }
	function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }
	function setSexo($sexo) {
        $this->sexo = $sexo;
    }
	function setCTPS($CTPS) {
        $this->CTPS = $CTPS;
    }
	function setSerie($serie) {
        $this->serie = $serie;
    }
	function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
	function setCNH($CNH) {
        $this->CNH = $CNH;
    }
	function setRua($rua) {
        $this->rua = $rua;
    }
	function setNumero($numero) {
        $this->numero = $numero;
    }
	function setBairro($bairro) {
        $this->bairro = $bairro;
    }
	function setCidade($cidade) {
        $this->cidade = $cidade;
    }
	function setEstado($estado) {
        $this->estado = $estado;
    }
	function setPais($pais) {
        $this->pais = $pais;
    }
	function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
	function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }
	function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }
	function setRegistro($registro) {
        $this->registro = $registro;
    }
	function setCertidao($certidao) {
        $this->certidao = $certidao;
    }
	function setCertificado($certificado) {
        $this->certificado = $certificado;
    }
	function setFilhos($filhos) {
        $this->filhos = $filhos;
    }
	function setEmail($email) {
        $this->email = $email;
    }
	function setDependentes($Dependentes) {
        $this->dependente = $dependentes;
    }
	function getCodigo() {
        return $this->codigo;
    }
	function getNome() {
       return  $this->nome;
    }
	function getCpf() {
         return $this->cpf;
    }
	function getIdentidade() {
        return $this->identidade;
	
	function getSexo() {
        return $this->sexo;
    }
    }
	function getCTPS() {
       return  $this->CTPS;
    }
	function getSerie() {
        return $this->serie;
    }
	function getTitulo() {
        return $this->titulo;
    }
	function getCNH() {
        return $this->CNH;
    }
	function getRua() {
        return $this->rua;
    }
	function getNumero() {
        return $this->numero;
    }
	function getBairro() {
       return  $this->bairro;
    }
	function getCidade() {
       return  $this->cidade;
    }
	function getEstado() {
          return $this->estado;
    }
	function getPais() {
        return $this->pais;
    }
	function getTelefone() {
        return $this->telefone;
    }
	function getEstadoCivil() {
        return $this->estadoCivil;
    }
	function getEscolaridade() {
        return $this->escolaridade;
    }
	function getRegistro() {
        return $this->registro;
    }
	function getCertidao($certidao) {
        return $this->certidao;
    }
	function getCertificado() {
        return $this->certificado;
    }
	function getFilhos() {
        return $this->filhos;
    }
	function getEmail() {
        return $this->email;
    }
	function getDependentes() {
        return $this->dependentes;
    }
function insere($conexao) {
		
		$query = "INSERT INTO funcionario(nome, cpf, identidade,sexo, CTPS, serie, titulo, CNH, rua, numero, bairro, cidade, estado, pais, telefone, estadoCivil, escolaridade, registro, certidao, certificado, filhos, email, status, dependentes) VALUES ('$this->nome', '$this->cpf', '$this->identidade','$this->sexo', '$this->CTPS', '$this->serie', '$this->titulo', '$this->CNH', '$this->rua', '$this->numero', '$this->bairro', '$this->cidade', '$this->estado','$this->pais', '$this->telefone', '$this->estadoCivil', '$this->escolaridade', '$this->registro', '$this->certidao', '$this->certificado', '$this->filhos', '$this->email', '$this->status', '$this->dependentes')";
		$conexao->query($query);
		//print $conexao->errorCode(); 
		//print_r($conexao->errorInfo());		
		
	}
	function mostra($conexao,$cod) {
		$query = "select * from usuarios where cod=$cod";
        foreach($conexao->query($query) as $chave=>$valor){
		$this->cod = $valor[0];
		$this->cod= $valor[1];
		$this->nome= $valor[2];
		$this->cpf=$valor[3]
		$this->identidade=$$valor[4];
		$this->sexo=$valor[5]; 
		$this->CTPS=$valor[6];        
		$this->serie=$valor[7];
		$this->titulo=$valor[8];
		$this->CNH=$valor[9];
		$this->rua=$valor[10];
		$this->numero= $valor[11];
		$this->bairro=$valor[12];
		$this->cidade=$valor[13];
		$this->estado=$valor[14];
		$this->pais=$valor[15];
		$this->telefone=$valor[16];
		$this->estadoCivil=$valor[17];
		$this->escolaridade= $valor[18];
		$this->registro=$valor[19];   
		$this->certidao=$$valor[20];
		$this->certificado=$valor[21];
		$this->filhos=$valor[22]; 
		$this->email=$valor[23];
		$this->status= $valor[24];
		$this->dependentes=$valor[25];
			
		}
		
    }
	
	
	function deletar($conexao, $cod) {
		$query = "delete from funcionario where cod= '$cod'";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
		}




}