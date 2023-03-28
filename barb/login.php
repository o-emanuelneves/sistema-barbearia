<?php
require_once 'model\Conexao.php';

session_start();
session_unset();
session_destroy();

session_start();


if(isset($_POST['btn-logar'])){
    $erros = array();
    $sql = 'select * from clientes where email=? and senha=?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1,$_POST['email']);
    $stmt->bindValue(2,md5($_POST['senha']));
    $stmt->execute();

    if($stmt->rowCount()>0){
        //criar a sessão
        $resultado = $stmt->fetch();
        $_SESSION['logado'] = true;
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['privilegio'] = $resultado['privilegio'];
        header('location:agendamento.php');
        //direcionar para a pagina de agendamento
    }else{
        //falar que usuario ou senha são invalidos
        $erros[] = "<br>Usuário ou senha inválidos.";
    }


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
  	<link rel="shortcut icon" href="imagensBarbearia/favicon.ico" />
	<title>Login</title>
</head>
<body align="center" class="body">
	<form action=" " method="post" >
	<h1>FAÇA SEU LOGIN PARA AGENDAR SEU HORÁRIO!</h1><br><br>
	<?php
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
   ?>
	<h3>Digite seu e-mail: </h3>
	<input type="e-mail" name="email" id="email" required="required"/>
	<h3>Digite sua senha: </h3>
	<input type="password" name="senha" id="senha" required="required"/><br><br>
	<a href="agendamento.php"><button class="button" type="submit" name="btn-logar">LOGAR</button><br></a>
	</form>
  	<a href="cadastro.php"><button class="button" type="">CRIAR CADASTRO</button></a>


</body>
</html>