<?php
	include("db.php");
	
	if(isset($_POST['criar'])){
		$nome = $_POST['nome'];
		$apelido = $_POST['apelido'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$data = date("Y/m/d");
		
		$email_check = mysqli_query($connect,"SELECT email FROM users WHERE email = '$email'");
		$do_email_check = mysqli_num_rows($email_check);
		if($do_email_check >= 1){
			echo '<h3>Este Email já está Cadastrado, para fazer login<a href="index.php">Clique Aqui!</a></h3>';
		}elseif($nome =='' OR strlen($nome)<3){
			echo '<h3>Nome Incorreto, insira corretamente!</h3>';
		}elseif($email =='' OR strlen($email)<10){
			echo '<h3>Email Incorreto, insira corretamente!</h3>';
		}elseif($senha =='' OR strlen($senha)<3){
			echo '<h3>Senha Incorreta. A senha tem que conter no mínimo 8 caracteres!</h3>';
		}else{
			$query = "INSERT INTO users (nome,apelido,img,email,password,data) VALUES ('$nome','$apelido','user.png','$email','$senha','$data')";
			$data = mysqli_query($connect,$query) or die(mysqli_error($connect));
			if($data){
				setcookie("login",$email);
				echo"<script>alert(Usuário cadastrado com sucesso, acesse sua conta!);</script>";
                                echo "<script>location.href = 'home.php';</script>";
			}else{
				echo"<script>alert(Erro ao tentar se cadastrar...Tente novamente!);</script>";
			}
		}
	}

?>


<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet" type="text/css">
	<style type="text/css">
		*{font-family: 'Montserrat',cursive;}
		img{display: block;margin: auto;margin-top: 20px;width: 200px;}
		form{text-align: center;margin-top: 20px;}
		input[type="text"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;border-radius:3px;margin-top: 10px;}
		input[type="email"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;border-radius:3px;margin-top: 10px;}
		input[type="password"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;margin-top: 10px;border-radius:3px;}
		input[type="submit"]{border:none; width: 80px;height: 25px;margin-top: 20px;border-radius:3px;}
		input[type="submit"]:hover{background-color: aqua;color: #fff;cursor: pointer;}
		h2{text-align: center;margin-top: 20px;}
		h3{text-align: center;margin-top: 20px; color: #1E90FF;margin-top: 15px;}
		a{text-decoration: none;color: #333;}
	</style>
</head>
<body>
	<img src="img/logo.png"><br/>
	<h2>Criar sua Conta</h2>
	<form method="POST">
		<input type="text" placeholder="Seu nome" name="nome"><br/>
		<input type="text" placeholder="Apelido Preferido" name="apelido"><br/>
		<input type="email" placeholder="Endereço de Email" name="email"><br/>
		<input type="password" placeholder="Senha" name="senha"><br/>
		<input type="submit" value="Registrar" name="criar"><br/>	
	</form>
	<h3>Já tem uma conta?<a href="index.php">Entre Aqui!</a></h3>
</body>	
</html>