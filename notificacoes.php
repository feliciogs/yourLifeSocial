<?php
	include("header.php");

	$pubs = mysqli_query($connect,"SELECT * FROM amizades WHERE para='$login_cookie' AND aceite='nao' ORDER BY id desc");
	$notificacoes = mysqli_query($connect,"SELECT * FROM notificacoes WHERE userpara='$login_cookie' ORDER BY id desc");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
			$saberr = mysqli_query($connect, "SELECT * FROM users WHERE id='$id'");
			$saber = mysqli_fetch_assoc($saberr);
			$email = $saber['email'];

			$ins = "UPDATE amizades SET aceite='sim' WHERE de='$email' AND para='$login_cookie'";
			$conf = mysqli_query($connect,$ins) or die(mysql_error($connect));
			if ($conf) {
                                echo "<script>location.href = amigos.php;</script>";
			}else{
				echo "<h3>Erro ao Aceitar Amizade...</h3>";
			}
	}
	if(isset($_GET['remove'])){
		$id = $_GET['remove'];
			$saberr = mysqli_query($connect, "SELECT * FROM users WHERE id='$id'");
			$saber = mysqli_fetch_assoc($saberr);
			$email = $saber['email'];

			$ins = "DELETE FROM amizades WHERE de='$login_cookie' AND para='$email' OR para='$login_cookie' AND de='$email'";
			$conf = mysqli_query($connect,$ins) or die(mysql_error($connect));
			if ($conf) {
				echo "<script>location.href = notificacoes.php;</script>";
			}else{
				echo "<h3>Erro ao Remover Amigo...</h3>";
			}
	}
?>


<html>
<header>
	<style type="text/css">
	/*Pedidos*/
	h3{text-align: center;color:#007fff; }
	div.pub{width: 400px;min-height: 70px;max-height: 1000px;display: block;margin: auto;border: none;border-radius: 5px;background-color: #FFF;box-shadow: 0 0 6px #A1A1A1; margin-top: 30px; text-align: center;}
	div.pub a{color: #666; text-decoration: none;}
	div.pub a:hover{color:#111; text-decoration: none;}
	div.pub p{content: #666;text-align: center;}
	div.pub span{display: block; margin: auto;padding-top: 20px; text-align: center;}
	div.pub input{border-radius: 3px;background-color: #007fff;border:none; color: #FFF; height: 25px;padding-right:5px;
	padding-left:5px;cursor: pointer;}
	div.pub input:hover{background-color: navy;}
		
	/*Notificações*/
	div.notif{width: 400px;height: 70px;display: block;margin: auto;border: none;border-radius: 5px;background-color: #FFF;box-shadow: 0 0 6px #A1A1A1; margin-top: 30px; text-align: center;}
	div.notif a{color: #666; text-decoration: none; position: relative;top: 40%;}
	div.notif a:hover{color:#111; text-decoration: none;}
	</style>
	
</header>
<body>
	
	<?php
	if(mysqli_num_rows($pubs)>=1){
		echo "<h3>Seus pedidos de amizade!</h3>";
		while ($pub= mysqli_fetch_assoc($pubs)){
			$email = $pub['de'];
			$saberr = mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
			$saber = mysqli_fetch_assoc($saberr);	
			$nome = $saber['nome']." ".$saber['apelido'];
			$id = $pub['id'];
			
				echo '<div class="pub" id="'.$id.'">
					<span>'.$nome.' Quer ser Seu Amigo(a)!</span><br/>
					<p><a href="profile.php?id='.$saber['id'].'">Ver Perfil de: '.$nome.'</a></p><br/>
					<a href="notificacoes.php?id='.$saber['id'].'"><input type="submit" value="Sim,Aceito" name="add"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="notificacoes.php?remove='.$saber['id'].'"><input type="submit" value="Não,Obrigado" name="remove"></a>
					<br/><br/><br/>
				</div>';
		}
		echo "<br/><h3>Não existe mais pedidos...</h3><br/><br/>";
	}
		
	?>
	<br/>
	<?php
	if(mysqli_num_rows($notificacoes)>=1){
		echo "<h3>Suas notificações!</h3>";
		while ($notif= mysqli_fetch_assoc($notificacoes)){
			$email = $notif['userde'];
			$saberr = mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
			$saber = mysqli_fetch_assoc($saberr);	
			$nome = $saber['nome']." ".$saber['apelido'];
			$id = $notif['id'];
			if($notif['tipo']=="1"){
				echo '<div class="notif" id="'.$id.'">
						<a href="myprofile.php?id='.$notif['post'].'">'.$nome.' gostou da sua publicação!</a>
					</div>';
				
			}elseif($notif['tipo']=="2"){
				echo '<div class="notif" id="'.$id.'">
						<a href="comentarios.php?id='.$notif['post'].'">'.$nome.' comentou da sua publicação!</a>
					</div>';
				
			 }
		}
		echo "<br/><h3>Não existe mais notificações...</h3>";
	}else{
		echo "<br/><h3>Não possui notificações</h3>";
	}
		
	?>
	<div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p></div>
</body>
</html>