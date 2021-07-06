<?php
	include("header.php");

	$pubs = mysqli_query($connect,"SELECT * FROM amizades WHERE de = '$login_cookie' OR para='$login_cookie' ORDER BY id desc");

	if(isset($_POST['settings'])){
		header("Location: settings.php");
	}
?>


<html>
<header>
	<style type="text/css">
	h2{text-align: center;padding-top: 30px; color: #007fff;}
	div.pub{width:90%;max-width: 400px;min-height: 70px;max-height: 1000px;display: block;margin: auto;border: none;border-radius: 5px;background-color: #FFF;box-shadow: 0 0 6px #A1A1A1; margin-top: 30px;}
	div.pub a{color: inherit; text-decoration: none;}
	div.pub a:hover{color:#007fff; text-decoration: none;}
	div.pub p{margin-left: 10px; color: #666;padding-top: 5px;text-align: center;}
	div.pub span{display: block; margin-left: 10px; margin: auto;width: 380px;margin-top: 10px; text-align: center;font-size: 24px;}
	div.pub img{display: block; margin: auto;width: 100%;margin-top: 10px;border-bottom-left-radius: 5px;border-bottom-right-radius:5px;}
	</style>
</header>
<body>
	<h2>Seus Amigos</h2>
	<a href="myprofile.php" class="btn btn-sucess">Voltar</a>
	<?php 
		while ($pub=mysqli_fetch_assoc($pubs)){
			if($pub['de']==$login_cookie){
				$para = $pub['para'];
				$info = mysqli_query($connect,"SELECT * FROM users  WHERE email = '$para' ");
				$amigoinfo = mysqli_fetch_assoc($info);
				if($amigoinfo["img"]==""){
					echo '<div class="pub"> <a href="profile.php?id='.$amigoinfo['id'].'" style="width: 100px;display:block; margin:auto;"><img src="../img/user.png" id="profile"></a>';
				}else{
					echo '<div class="pub"> <a href="profile.php?id='.$amigoinfo['id'].'" style="width: 100px;display:block; margin:auto;"><img src="upload/'.$amigoinfo["img"].'"></a>';
				}
				echo '
					<br/>
					<span><a href="profile.php?id='.$amigoinfo['id'].'">'.$amigoinfo['nome'].' '.$amigoinfo['apelido'].'</a></span>
					<p>Amigos desde: '.$pub["data"].'</p><br/>
				</div>';
			}else{
				$de = $pub['de'];
				$info = mysqli_query($connect,"SELECT * FROM users  WHERE email = '$de' ");
				$amigoinfo = mysqli_fetch_assoc($info);
				if($amigoinfo["img"]==""){
					echo '<div class="pub"> <a href="profile.php?id='.$amigoinfo['id'].'" style="width: 100px;display:block; margin:auto;"><img src="../img/user.png"></a>';
				}else{
					echo '<div class="pub"> <a href="profile.php?id='.$amigoinfo['id'].'" style="width: 100px;display:block; margin:auto;"><img src="upload/'.$amigoinfo["img"].'"></a>';
				}
				echo '
					<span><a href="profile.php?id='.$amigoinfo['id'].'">'.$amigoinfo['nome'].' '.$amigoinfo['apelido'].'</a></span>
					<p>Amigos desde: '.$pub["data"].'</p>
				</div>';
			}
		}
	?>
	<br/>
	<div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p>
    </div>
</body>
</html>