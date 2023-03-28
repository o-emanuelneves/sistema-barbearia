<?php

  session_start();
  if(!isset($_SESSION['logado']) || $_SESSION['privilegio']>2)
  {
    header('location: login.php');
  }
?>

<html>
<head>
  <title>AGENDAMENTO</title>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/barbeariaCss.css" type="text/css">
  <link rel="shortcut icon" href="imagensBarbearia/favicon.ico" />
  
</head>
<body class="body">
  <form name="frmTeste" action="pagObrigado.php" method="post">    
    <h1 align="center"> AGENDE O SEU HORÁRIO! </h1>
    <h3>Barbeiro desejado: </h3>   
    <select id=qualBarbeiro name="barbeiro" required="required">
      <option value="" disabled="disabled" selected="selected">Selecione o barbeiro:</option>
      <option value="Afonso">Afonso</option>
      <option value="Ferreira">Ferreira</option>
      <option value="Pedro">Pedro</option>
      <option value="Emanuel">Emanuel</option>
    </select> <br> 
    <h3>Escolha a data e o horário: </h3>
    <input type="datetime-local" name="data" id="data"
    value="" min="Date()" required="required" />
    <h3> Alguma observação?</h3><textarea name="obs"></textarea>
    <h4> Assim que enviado, nossa equipe irá entrar em contato com você através do telefone e e-mail para indicar os horários disponíveis no dia.</h4>

    <button class="button" type="submit">ENVIAR</button>
    <button class="button" type="reset">LIMPAR</button>
  </form>
  <br>


  <a href="login.php"><button class="button" type="">SAIR</button></a><br>
  <?php

    if(isset($_SESSION['logado']) && $_SESSION['privilegio']==1){        
    echo "<a href='listaClientes.php'><button class='button' type=''>LISTAR</button></a>";
  } 

  ?>

  
</body>
</html>