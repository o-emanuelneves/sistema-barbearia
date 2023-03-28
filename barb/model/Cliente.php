<?php 

class Cliente{
	private $id, $nome, $email, $senha, $telefone, $barbeiroDesejado, $data, $observacao;

	public function getId(){
		return $this->id;
	}

	public function setId($val){
		$this->id = $val;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($val){
		$this->nome = $val;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($val){
		$this->email = $val;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($val){
		$this->senha = $val;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($val){
		$this->telefone = $val;
	}

	public function getBarbeiroDesejado(){
		return $this->barbeiroDesejado;
	}

	public function setBarbeiroDesejado($val){
		$this->barbeiroDesejado = $val;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($val){
		$this->data = $val;
	}

	public function getObservacao(){
		return $this->observacao;
	}

	public function setObservacao($val){
		$this->observacao = $val;
	}



}

 ?>