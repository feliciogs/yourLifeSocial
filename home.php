<?php
	include("header.php");
	if($login_cookie == NULL){
		echo "<meta http-equiv='refresh' content=1;url='index.php'>";
	}

	$pubs = mysqli_query($connect,"SELECT
		  T.id, 
		  T.user, 
		  T.texto, 
		  T.imagem, 
		  T.data,
		  U.de,
		  U.para, 
		  U.aceite
	   FROM
		  publicacao AS T,
		  amizades AS U 
	   WHERE
		  T.user = U.de AND U.para = '$login_cookie' AND U.aceite='sim'
		  OR T.user = U.para AND U.de = '$login_cookie' AND U.aceite='sim'
		  order by T.id DESC");

	if(isset($_POST['publish'])){
		if($_FILES["file"]["error"]>0){
			$texto = $_POST["texto"];
			$hoje = date("Y-m-d");
			
			if($texto == ""){
			    echo $login_cookie;
				echo "<h3>Precisa escrever algo antes de publicar!</h3>";
			}else{
				$query = "INSERT INTO publicacao (user,texto,data) VALUES ('$login_cookie','$texto','$hoje')";
				$data = mysqli_query($connect,$query) or die();
				if ($data){
                                        echo "<script>location.href = home.php;</script>";
				}else{
					echo "Erro ao tentar publicar. Tente novamente mais tarde!";
				}
			}
		}else{
			$n = rand(0,1000000);
			$img = $n.$_FILES["file"]["name"];
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$img);
			
			$texto = $_POST['texto'];
			$hoje = date("Y-m-d");
			
			if($texto == ""){
				echo "<h3>Precisa escrever algo antes de publicar!</h3>";
			}else{
				$query = "INSERT INTO publicacao (user,texto,imagem,data) VALUES ('$login_cookie','$texto','$img','$hoje')";
				$data = mysqli_query($connect,$query) or die();
				if ($data){
					echo "<script>location.href = home.php;</script>";
				}else{
					echo "Erro ao tentar publicar. Tente novamente mais tarde!";
				}
			}
		}
	}
	if(isset($_GET["love"])){
		love();
	}
	
	function love(){
		$connect = mysqli_connect("fdb21.awardspace.net","2759112_yourlifebd","Maxtarda@123") or die("Não Foi Possivel Conectar ao Servidor");
                $db = mysqli_select_db($connect,"2759112_yourlifebd") or die("Impossível Conectar com a Base de Dados");
		$login_cookie = $_COOKIE['login'];
		$publicacaoid = $_GET['love'];
		$data = date("Y/m/d");
		
		$post=mysqli_query($connect,"SELECT * FROM publicacao WHERE id='$publicacaoid'");
		$postinfo=mysqli_fetch_assoc($post);
		$userinfo=$postinfo['user'];
		
		$ins = "INSERT INTO loves (user,pub,date) VALUES ('$login_cookie','$publicacaoid','$data')";
		$conf = mysqli_query($connect,$ins) or die(mysqli_error($connect));
		
		if($conf){
			$notif=mysqli_query($connect,"INSERT INTO notificacoes (userde,userpara,tipo,post,data) VALUES ('$login_cookie','$userinfo','1','$publicacaoid','$data')");
                        echo "<script>location.href = home.php#'.$publicacaoid.';</script>";
		}else{
			echo "<h3>Erro</h3>".mysqli_error($connect);
		}
	}
	if(isset($_GET["unlove"])){
		unlove();
	}
	
	function unlove(){
		$connect = mysqli_connect("fdb21.awardspace.net","2759112_yourlifebd","Maxtarda@123") or die("Não Foi Possivel Conectar ao Servidor");
                $db = mysqli_select_db($connect,"2759112_yourlifebd") or die("Impossível Conectar com a Base de Dados");
		$login_cookie = $_COOKIE['login'];
		$publicacaoid = $_GET['unlove'];
		$data = date("Y/m/d");
		
		$del = "DELETE FROM loves WHERE user='$login_cookie' AND pub='$publicacaoid'";
		$conf = mysqli_query($connect,$del) or die(mysqli_error($connect));
		
		if($conf){
			echo "<script>location.href = home.php#'.$publicacaoid.';</script>";
			
		}else{
			echo "<h3>Erro</h3>".mysqli_error($connect);
		}
	}
?>


<html>
<header>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	div#publish{width:90%;max-width: 500px;height: 280px;display: block;margin: auto;border: none;border-radius: 5px;background: #FFF;box-shadow: 0 0 6px #A1A1A1;margin-top: 30px;}
	div#publish textarea{width: 90%;height: 40%;display: block;margin: auto;border-radius: 5px;padding-left: 5px;padding-top: 5px;border-width: 1px;border-color: #A1A1A1;}
	div#publish img{margin-top: 0px;margin-left: 10px;width: 40px;cursor: pointer;}
	div.pub{width:90%;max-width: 500px;min-height: 70px;max-height: 600px;display: block;margin: auto;border: none;border-radius: 5px;background-color: #FFF;box-shadow: 0 0 6px #A1A1A1; margin-top: 30px;padding-bottom: 10px;}
	div.pub a{color: #666; text-decoration: none;}
	div.pub a:hover{color:#111; text-decoration: none;}
	div.pub p{margin-left: 50px; content: #666;padding-top: 10px;}
	div.pub span{display: block; margin: auto;width: 380px;margin-top: 10px;}
	div.pub img{display: block; margin: auto;width: 90%;margin-top: 10px;border-bottom-left-radius: 5px;border-bottom-right-radius:5px;}
	div#love{width:90%;max-width: 500px; height: 30px;display: block;margin: auto; border: none; border-radius: 5px;background-color:#007fff;}
	div#love p{color: #FFF;font-size: 12px;padding-top: 5px;padding-left: 5px;}
	div#love a{color:#FFF;font-size: 16px;text-decoration: none;}
	#comentar{float: right;margin-top: 15px;margin-bottom: 15px;margin-right: 20px; cursor: pointer;width: 30px;}
    .imgFriend{width: 40px !important;height: 40px !important; border-radius: 5px !important;float: left;margin-left: 20px !important;margin-right: 5px !important; }
    #file-input{width:80%;margin-bottom:5px;}
	</style>
	<link href="lib/css/emoji.css" rel="stylesheet">
</header>
<body>
	<div id="publish">
		<form method="POST" enctype="multipart/form-data" class="text-center">
			<br/>
            <h5>Criar Publicação!</h5>
              <textarea class="form-control" placeholder="Escreva o que deseja publicar aqui!" name="texto"></textarea>
              <br/>
            <input class="form-control-file text-center btn btn-info" type="file" id="file-input" name="file" title="Insira uma imagem" ><br/>
			<input class="btn btn-primary" type="submit" value="Publicar" name="publish">	
		</form>
	</div>
	
	<p align="center" ><h5 class="text-center">Últimas Publicações de Seus Amigos</h5></p>
	<?php 
		while ($pub=mysqli_fetch_assoc($pubs)){
			$email = $pub['user'];
			$saberr = mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
			$saber = mysqli_fetch_assoc($saberr);	
			$nome = $saber['nome']." ".$saber['apelido'];
            $imgFriend = $saber['img'];
			$id = $pub['id'];
			$saberloves = mysqli_query($connect,"SELECT * FROM loves WHERE pub='$id'");
			$loves = mysqli_num_rows($saberloves);
			if($imgFriend == NULL){
                $imgFriend = "user.png";
            }	
			if($pub['imagem']==""){
				echo '<div class="pub" id="'.$id.'">
					<a href="comentarios.php?id='.$id.'" title="Comente Aqui!">
                    <img id="comentar" alt="Comente Aqui!" src="img/chat.png"></a>
                    <img class="imgFriend" src="upload/'.$imgFriend.'">
					<p><a href="profile.php?id='.$saber['id'].'">'.$nome.'</a> - '.$pub["data"].'</p>
					<span>'.$pub['texto'].'</span><br/>
				</div>
				<div id="love">';
				$email_check = mysqli_query($connect,"SELECT * FROM loves WHERE pub='$id' AND user='$login_cookie'");
				$do_email_check = mysqli_num_rows($email_check);
				if($do_email_check>=1){
					$loves = $loves - 1;
					echo '<p><a href="home.php?unlove='.$id.'"><i class="fa fa-angellist"></i>
					Curtiu</a> | Você e mais '.$loves.' gostaram dessa publicação</p>';
				}else{
					echo '<p><a href="home.php?love='.$id.'">Curtir</a> | '.$loves.' gostaram dessa publicação</p>';
				}
				echo '</div>';
			}else{
				echo '<div class="pub" id="'.$id.'">
					<a href="comentarios.php?id='.$id.'" title="Comente Aqui!"><img id="comentar" alt="Comente Aqui!" src="img/chat.png"></a>
                    <img class="imgFriend" src="upload/'.$imgFriend.'">
					<p><a href="profile.php?id='.$saber['id'].'">'.$nome.'</a> - '.$pub["data"].'</p>
					<span>'.$pub['texto'].'</span>
					<img src="upload/'.$pub["imagem"].'"/>
				</div>
				<div id="love">';
				$email_check = mysqli_query($connect,"SELECT * FROM loves WHERE pub='$id' AND user='$login_cookie'");
				$do_email_check = mysqli_num_rows($email_check);
				if($do_email_check>=1){
					$loves = $loves - 1;
					echo '<p><a href="home.php?unlove='.$id.'"><i class="fa fa-angellist"></i>
                    Curtiu</a> | Você e mais '.$loves.' gostaram dessa publicação</p>';
				}else{
                    echo '<span><a href=comentarios.php?id='.$id.'</a></span>';
					echo '<p><a href="home.php?love='.$id.'">Curtir</a> | '.$loves.' gostaram dessa publicação</p>';
                    
				}
				echo '</div>';
				
			}
		}
	?>
	<br/>
	<div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p></div>
</body>
</html>