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


	$cliente ->setNome($_POST['nome']);
	$cliente ->setEmail($_POST['email']);
	$cliente ->setSenha(md5($_POST['senha']));	
	$cliente ->setTelefone($_POST['telefone']);	

	//salvar o cliente
	$clienteDAO = new ClienteDAO();

	$clienteDAO->criar($cliente);


  

	echo "<h1 align='center'>OBRIGADO POR CADASTRAR!</h1>";
	echo "<H2 align='center'>Ficamos felizes em saber que você tem interesse em contar com a gente!</H2>";
	echo "<h2 align='center'>Agora que você já tem um cadastro, agende já seu horário!</h2><br>";	
	echo "<h2 align='center'> Att. Barbearia Mr Brothers</h2><center>";	
	echo "<img src='imagensBarbearia/logoCerta.png' class='imglogo' width='250px' height='250px'></center>";
	?>
	<p><a href="login.php"><button class="button">LOGAR</button></a></p>
 	
</body>
</html>