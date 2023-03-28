<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<link rel="preconnect" href="https://fonts.googleapis.com"> 
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="./css/barbeariaCss.css" type="text/css">
  	<link rel="shortcut icon" href="imagensBarbearia/favicon.ico" />
	<title>Cadastro</title>
</head>
<body class="body">
	<script type="text/javascript">
        function mostrar(){
				if(document.getElementById("theCheck").checked==false){
					document.getElementById('senha').type="password";
					document.getElementById('senha2').type="password";
				}
				else{
					document.getElementById('senha').type="text";
					document.getElementById('senha2').type="text";
				}
			}
		function validaForm(frmTeste) {
      
      if(1) {
        var nome = document.getElementById("nome");    
        if(nome.value.length < 3){      
          alert("Por favor, informe-nos o seu nome.");
          frmTeste.nome.focus();      
          return false;
        }
      }
      if(1) {
      	Senha = document.getElementById('senha').value;
        Senha2 = document.getElementById('senha2').value;

        if (Senha != Senha2) {
            alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS");
            frmTeste.senha2.focus(); 
            return false;                	
        }
      }
      if(1){
        var expTelefone = /^\(?\d{2}\)?9?\d{4}-?\d{4}$/;
        var telefone = document.getElementById('telefone').value;
        if(expTelefone.test(telefone) == false){
          alert("Telefone inválido.");
          frmTeste.telefone.focus();   
          return false;                   
        }else{      
        return true;
        }
      }
    }
	</script>
	<h1 align="CENTER">CADASTRAR NOVO USUÁRIO</h1> 
	<form name="frmTeste" action="cadSucesso.php" method="post" onsubmit="return validaForm(this);">
		<h3>Digite seu nome: </h3><input type="text" name="nome" id="nome"/>
  		<h3>Digite seu e-mail: </h3><input type="e-mail" name="email" id="email" required="required" />
  		<h3>Digite sua senha: </h3><input type="password" name="senha" id="senha" required="required">
  		<h3>Confirme sua senha: </h3><input type="password" name="senha2" id="senha2" required="required"><br><br>
		<input type="checkbox" name="theCheck" id="theCheck" value="1" onchange="mostrar()">Mostrar Senhas<br><br>
  		<h3>Digite seu número de telefone: </h3><input type="text" name="telefone" id="telefone"><br><br>
  		<button class="button" type="submit">CADASTRAR</button> 		

  	</form>
  	<a href="login.php"><button class="button" type="">VOLTAR</button></a>

</body>
</html>