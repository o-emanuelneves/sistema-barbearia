<?php

  session_start();
  
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">	
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/barbeariaCss.css" type="text/css">
	 <link rel="shortcut icon" href="imagensBarbearia/favicon.ico" />
	<title>Barbearia Mr Brothers</title>
</head>
<frameset rows="13%,80%,7%" frameborder="no">
    <frame name="topo"src="topo.php"  style="border: 0px solid;">  
    <frameset cols="20%" >       
       <frame name="target" src="target.php" style="border: 0px solid;;">     
    </frameset>
    <frame name="rodape" src="rodape.php"  style="border: 0px solid;">
  </frameset>

</html>
