<?php 
require_once 'Cliente.php';
require_once 'Conexao.php';

class ClienteDAO{

	public function criar(Cliente $c){

		$sql = 'INSERT INTO clientes (nome, email, senha, telefone) values (?,?,?,?)';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $c->getNome());
		$stmt->bindValue(2, $c->getEmail());
		$stmt->bindValue(3, $c->getSenha());
		$stmt->bindValue(4, $c->getTelefone());
		#$stmt->bindValue(5, $c->getBarbeiroDesejado());
		#$stmt->bindValue(6, $c->getData());		
		#$stmt->bindValue(7, $c->getObservacao());
		$stmt->execute();

	}
	public function agendar(Cliente $c){
		$sql = 'INSERT INTO agendamentos (id, barbeiroDesejado, data, observacao) VALUES (?,?,?,?)';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $c->getId());
		$stmt->bindValue(2, $c->getBarbeiroDesejado());
		$stmt->bindValue(3, $c->getData());		
		$stmt->bindValue(4, $c->getObservacao());
		$stmt->execute();

	}


	public function buscaPorNome($nome){
		$sql = 'select * from clientes where nome like "%?%"';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $nome);
		$stmt->execute();

		if($stmt->rowCount()>0):
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		else:
			return [];
		endif;

	}

	public function lerTodos(){
		$sql = 'select * from clientes';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount()>0):
			$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		else:
			return [];
		endif;

	}


	public function apagar($id){
		$sql = 'DELETE FROM CLIENTES WHERE id=?';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1,$id);
		$stmt->execute();

	}
	public function editar(Cliente $c){
		$sql = 'UPDATE clientes SET id=(?), nome=(?), email=(?), telefone=(?)';
		$stmt = Conexao::getConn()->prepare($sql);
		$stmt->bindValue(1, $c->getId());
		$stmt->bindValue(2, $c->getNome());
		$stmt->bindValue(3, $c->getEmail());
		$stmt->bindValue(4, $c->getTelefone());
		$stmt->execute();

	}





}





 ?>