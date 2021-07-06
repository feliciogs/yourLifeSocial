<?php 
	include("header.php");

	$id = $_GET["from"];
	$tudo = mysqli_query($connect,"SELECT * FROM users WHERE id='$id' ");
	$saber = mysqli_fetch_assoc($tudo);
	$email = $saber["email"];
	$sql =  mysqli_query($connect,"SELECT * FROM mensagens WHERE para='$login_cookie' AND de='$email' OR de='$login_cookie' AND para='$email' ORDER BY id ");

	if(isset($_POST["send"])){
		$msg= $_POST['text'];
		$data = date("Y/m/d");
		
		if($msg==""){
			echo "<h3>Não é possivel enviar uma mensagem sem escrever nada!</h3>";
		}else{
		   $query = "INSERT INTO mensagens (de,para,texto,status,data) VALUES ('$login_cookie','$email','".mysqli_real_escape_string($connect,$msg)."',0,'$data')";
		    $data = mysqli_query($connect,$query);
			if($data){
				//echo "<script>location.reload(false);</script>";
			}else{
				echo "<h3>Erro ao enviar sua mensagem...Tente Novamente!</h3>";
				echo mysqli_error($connect);
			}	
		}
	}
?>


<html>
	<head>
		<style type="text/css">
			h2{text-align: center;font-size: 32px;color: #007fff;}
			a{color: #007fff;text-decoration: none;}
			div#box{display: block;margin: auto;width: 650px;height: 600px;border: 1px solid #42f4e2;border-radius: 5px;}
			div#send{display: block;margin: auto;width: 650px;height:100px;padding-top:30px;text-align: center;font-size: 20px;border: 1px solid #42f4e2;border-radius: 5px;}
			div#send input[name="image"]{width: 100px;height: 35px;border: none;border-radius: 3px;font-size: 16px;background: #007fff;color:#FFF;cursor: pointer;}
			div#send input[name="text"]{width: 300px;height: 35px;border: none;border-radius: 3px;font-size: 16px;padding-left: 10px;}
			div#send input[name="send"]{width: 100px;height: 35px;border: none;border-radius: 3px;font-size: 16px;padding-left: 10px; background: #007fff;color:#FFF;cursor: pointer;}
		</style>
	</head>
	<body>
	
		<h2><a href="profile.php?id=<?php echo $id; ?>"><?php echo $saber["nome"];?></a></h2><br/><br/>
		<form method="POST">
			<div id="box">
				<object type="text/html" data="bubble.php?from=<?php echo $id;?>#bottom" width="635px" height="600px" style="overflow:auto;"></object>
			</div>
			<br/>
			<div id="send">
				<a href="image.php?id=<?php echo $id; ?>"><input value="Imagem" type="button" name="image"></a>&nbsp;&nbsp;&nbsp;<input type="text" name="text" placeholder="Escreva aqui uma mensagem...." autocomplete="off">&nbsp;&nbsp;&nbsp;<input type="submit" name="send" value="Enviar">
			</div>
		</form>
	</body>
</html>