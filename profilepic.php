<?php 
	include("header.php");

	if(isset($_POST['salvar'])){
		if($_FILES["file"]["error"]>0){
			echo "<script language='javascript' type=text/javascript>alert('Precisa selecionar uma Imagem Válida!');</script>";
		}else{
			$n = rand(0,1000000);
			$img = $n.$_FILES["file"]["name"];
			
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$img);
			echo "<script>alert('Imagem atualizada com Sucesso!');</script>";
			
			$query = "UPDATE users SET img = '$img' WHERE email='$login_cookie'";
			$data = mysqli_query($connect,$query);
			if($data){
				
                                echo "<script>location.href = 'myprofile.php';</script>";
			}else{
				echo "<script language='javascript' type=text/javascript>alert('Não foi possível atualizar sua Foto');</script>";
			}
		}
	}
?>
<html>
	<header>
		<style type="text/css">
			body{background-color: #CCC;}
			h2{text-align: center;color: #FFF;font-size: 49px;}
			form#perfil{display: block;margin: auto;text-align: center;width:400px;margin-top: 20px;background-color: #FFF;box-shadow: 0 0 10px #666; border-radius: 5px;}
			p{color: #FFF; text-align: center;}
		</style>
	</header>
	<body>
		<h2>Altere sua Foto!</h2>
		<form method="POST" enctype="multipart/form-data" id="perfil">
			<br/>
			<h3>Atualize sua imagem de Perfil!</h3><br/>
			<h3>Imagem Atualizada </h3><br/><br/><br/> 	
			<input type="file" name="file"/><br/><br/><br/>
			<input class="btn btn-primary" type="submit" value="Salvar" name="salvar"/>
			<br/><br/>
		</form>
		<br/><br/><br/> 	
		<div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p></div>
	</body>
	
</html>