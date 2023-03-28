<?php

  session_start();

  
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
<body bgcolor="#EBE6E6">
	<?php

	require_once 'model\Cliente.php';
	require_once 'model\ClienteDAO.php';

	$cliente = new Cliente();
	$cliente ->setId($_SESSION['id']);
	$cliente ->setBarbeiroDesejado($_POST['barbeiro']);
	$cliente ->setData($_POST['data']);
	$cliente ->setObservacao($_POST['obs']);


	//salvar o cliente
	$clienteDAO = new ClienteDAO();
	try{
		$clienteDAO->agendar($cliente); 

		echo "<h1 align='center'>OBRIGADO!</h1>";
		echo "<H2 align='center'>Ficamos felizes em saber que você tem interesse em contar com a gente!</H2>";
		echo "<h2 align='center'>Agora é com a nossa equipe! Como você preencheu o formulário entraremos em contato em breve informando os horários disponíveis do dia que você escolheu, aguarde por favor!</h2><br>";
		
		echo "<h2 align='center'> Att. Barbearia Mr Brothers</h2><center>";	
		echo "<img src='imagensBarbearia/logoCerta.png' class='imglogo' width='250px' height='250px'></center>";
		
		echo "<p><a href='login.php'><button class='button'>SAIR</button></a></p>";
	 	

	    if(isset($_SESSION['logado']) && $_SESSION['privilegio']==1){        
	    echo "<a href='listaClientes.php'><button class='button' type=''>LISTAR</button></a>";
	  }
	}catch (Exception $e){
		echo "<h1 align='center'>Você já tem um horário marcado!</h1>";
		echo "<p><a href='agendamento.php'><button class='button'>VOLTAR</button></a></p>";
	}  

  ?>
</html>