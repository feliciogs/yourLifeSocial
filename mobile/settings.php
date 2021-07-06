<?php
	include("header.php");
	
	$infoo = mysqli_query($connect, "SELECT * FROM users WHERE email='$login_cookie'");
	$info = mysqli_fetch_assoc($infoo);

	if(isset($_POST['criar'])){
		$nome = $_POST['nome'];
		$apelido = $_POST['apelido'];
		$senha = $_POST['senha'];
		
		if($nome==""){
			echo "<h2>Informe o seu Nome</h2>";
		}elseif($apelido ==""){
			echo "<h2>Informe o seu Apelido</h2>";
		}elseif($senha ==""){
			echo "<h2>Informe a sua Nova Senha</h2>";
		}else{
			$query = "UPDATE users SET nome='$nome',apelido='$apelido',password='$senha' WHERE email='$login_cookie'";
			$data = mysqli_query($connect,$query);
			if($data){
				echo '<meta HTTP-EQUIV="Refresh" CONTENT=1; URL=myprofile.php">';
			}else{
				echo "<h2>Erro ao tentar Atualizar seu Dados.Tente Novamente!</h2>";
			}
		}
	}
	

?>


<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet" type="text/css">
	<style type="text/css">
		*{font-family: 'Montserrat',cursive;}
		img[name="p"]{display: block;margin: auto;margin-top: 20px;width: 200px;}
		form{text-align: center;margin-top: 20px;}
		input[type="text"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;border-radius:3px;margin-top: 10px;}
		input[type="email"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;border-radius:3px;margin-top: 10px;}
		input[type="password"]{border:1px solid #CCC; width: 250px;height: 25px;padding-left: 10px;margin-top: 10px;border-radius:3px;}
		h2{text-align: center;margin-top: 20px;}
		h3{text-align: center;margin-top: 20px; color: #1E90FF;margin-top: 15px;}
		a{text-decoration: none;color: #333;}
	</style>
</head>
<body>
	<img name="p" src="upload/<?php echo $info["img"];?>"><br/>
	<h2>Atualize Suas Informações!</h2>
	<form method="POST">
		<span class="badge badge-pill badge-primary">Nome:</span>
		<input type="text" placeholder="Seu nome" name="nome" value="<?php echo $info['nome'];?>" ><br/>
		<span class="badge badge-pill badge-primary">Apelido:</span>
		<input type="text" placeholder="Apelido Preferido" name="apelido" value="<?php echo $info['apelido'];?>"><br/>
		<span class="badge badge-pill badge-primary">Senha:</span>
		<input type="password" placeholder="Senha" name="senha" value="<?php echo $info['password'];?>"><br/><br/>
		<input onclick=\"return confirm('Confirmar Atualização de Dados');\" class="btn btn-primary" type="submit" value="Salvar" name="criar">&nbsp;&nbsp;&nbsp;
		<a href="myprofile.php" class="btn btn-info" name="cancelar">Cancelar</a>
	</form>
	<br/><br/>
	<div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p></div>
</body>	
</html>