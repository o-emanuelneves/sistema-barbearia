<?php

class Conexao{
	public static $instance;

	public static function getConn(){
		//cria a conexao e coloque em instance
		
		if(!isset(self::$instance)):
		self::$instance = new \PDO('mysql:host=localhost;dbname=barbearia', 'root','');
		endif;


		return self::$instance;

	}
}


  ?>