<?php
	include("header.php");

	$id = $_GET['id'];

	$tudo = mysqli_query($connect,"SELECT * FROM users WHERE id='$id'");
	$saber = mysqli_fetch_assoc($tudo);

	$email = $saber['email'];

	if(isset($_POST['enviar'])){
		if($_FILES["file"]["error"]>0){
			echo "<script language='javascript' type=text/javascript>alert('Precisa selecionar uma Imagem Válida!');</script>";
		}else{
			$n = rand(0,1000000);
			$img = $n.$_FILES["file"]["name"];
			
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$img);
			echo "Imagem Atualizada";
			
			$mensagem = $_POST['mensagem'];
			$data = date("Y/m/d");
			
			$query = "INSERT INTO mensagens (de,para,texto,imagem,status,data) VALUES ('$login_cookie','$email','".mysqli_real_escape_string($connect,$msg)."','$img',0,'$data')";
			
			$data = mysqli_query($connect,$query);
			if($data){
				header("Location: chat.php?from=".$id);
			}else{
				echo "<script language='javascript' type=text/javascript>alert('Não foi possível enviar sua Foto');</script>";
			}
		}
	}
?>
<html>
	<head>
		<style type="text/css">
			h3{text-align: center;}
			h2{text-align: center; font-size:36px;color: #007fff;}
			span{display: block;margin: auto;font-size:25px;text-align: center;color: #666;max-width: 700px;}
			p{display: block;margin: auto;font-size:20px;text-align: center;color: #666;max-width: 700px;}
			form{width: 100%;text-align: center;}
			input[type="text"]{width: 300px;height: 35px;border: none;border-radius: 3px;font-size: 16px;padding-left: 10px;}
			input[type="submit"]{width: 100px;height: 35px;border: none;border-radius: 3px;font-size: 20px;background: #007fff;color:#FFF;cursor: pointer;}
		</style>
	</head>
	<body>
		<br/>
		<h2>Chat</h2><br/>
		<span>Enviar uma imagem!</span><br/><br/><br/>
		<p>Escreva Algo(Opcional):</p>
		<br/>
		<form method="POST" enctype="multipart/form-data">
			<input type="text" name="mensagem" placeholder="Escreva aqui sua descrição para imagem (opcional)">
			<br/><br/><br/>
			<p>Escolha a imagem:</p>
			<input type="file" name="file">
			<br/><br/>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>