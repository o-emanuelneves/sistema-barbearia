<?php

  session_start();
  if(!isset($_SESSION['logado']) || $_SESSION['privilegio']<>1)
  {        
    header('location: login.php');   
  } 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">	
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/barbeariaCss.css" type="text/css">
	<title>Obrigado</title>
</head>
<body class="body">
	<?php 
		require_once 'model\Cliente.php';
		require_once 'model\ClienteDAO.php';



	    $clienteDAO = new ClienteDAO();  

	    if(isset($_GET['Apagar'])){
	    	//aqui vem o codigo para apagar
	      	$clienteDAO->apagar($_GET['id']);
	      	echo '<p>Apagado!</p>';	    
	    }
	    if(isset($_GET['Editar'])){
	    	//aqui vem o codigo para editar
	    	$cliente = new Cliente();
			$cliente ->setId($_SESSION['id']);
			$cliente ->setNome($_GET['nome']);
			$cliente ->setEmail($_GET['email']);
			$cliente ->setTelefone($_GET['telefone']);	
	      	$clienteDAO->editar($cliente); 	      
	      	echo '<p>Editado!</p>';	    
	    } 
 

	    foreach($clienteDAO->lerTodos() as $cliente):
	      echo "<p>Id = ".$cliente['id'].
	      " Nome =<input type='text' value=".$cliente['nome'].">
	      Email =<input type='text' value=".$cliente['email'].">
	      Telefone =<input type='text' value=".$cliente['telefone'].">
	      Privilégio =".$cliente['privilegio'].
	      "<a href='listaClientes.php?id=".$cliente['id']."&Apagar=SIM'><button class='button'>APAGAR</button></a>".
	      "<a href='listaClientes.php?id=".$cliente['id']."?nome=".$cliente['nome'].
	      "?email=".$cliente['email']."?telefone=".$cliente['telefone'].
	      "&Editar=SIM'><button class='button'>EDITAR</button></a>";
	    endforeach;


	 ?>
	 <br>
	<p><a href="agendamento.php"><button class="button">VOLTAR</button></a></p>
 	
</html>