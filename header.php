<?php
	include("db.php");
	
	$login_cookie = $_COOKIE['login'];
	if(!isset($login_cookie)){
		header("Location: index.php");
	}
?>

<html>
<head>
<script>
	function confirmLogout() {
	   if (confirm("Tem certeza que deseja Sair?")) {
		  location.href="index.php";
	   }
	}
</script>
    <meta charset="utf-8">
    <title>YourLifeSocial!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1 user-scalable=0">
    <link href='css/fade.css' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link rel="icon" href="/favicon.ico">
	<style>
	*{font-family: 'Montserrat',cursive; margin: 0 ;}
	body{background: #F6F6F6;}
	div#footer{bottom: 0;text-align: center;color: #666;}
    span#navbarSpan{color: black;}
    .nav-item{border-radius: 10px;margin: auto;}    
	.navbar{background-color: aqua !important;}
	.nav-item:hover{background-color: magenta;transition: 1s; border-radius: 10px;}
	#logo{border-radius: 5px;}
	form#pesquisar{margin-left:40%;margin-right: 10%;}
    @media only screen and (max-width: 600px) {
    form#pesquisar {
        display: none;
        }
    }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
	  <a class="navbar-brand" href="home.php"><img src="img/logo.png" width="50" id="logo" name="logo"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"><i class="fa fa-align-justify" style="font-size:36px"></i></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <form class="form-inline my-2 my-lg-0"  method="GET" action="pesquisar.php" id="pesquisar">
		  <input class="form-control mr-sm-2" type="text" placeholder="Procurar Pessoas..." name="query" autocomplete="off">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Pesquisar</button>
		</form>
		
		<ul class="navbar-nav mr-auto">
		  	  <li class="nav-item">
				<a class="nav-link" href="myprofile.php"><img src="img/perfil.png" width="30" name="menu" alt="Perfil"><span id="navbarSpan">Perfil</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="notificacoes.php"><img src="img/pedidos.png" width="30" name="menu" alt="Notificações"><span id="navbarSpan">Notificações</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="inbox.php"><img src="img/chat.png" width="30" name="menu" alt="Chat"><span id="navbarSpan">Chat</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="jogos.php"><img src="img/jogos.png" width="30" name="menu" alt="Jogos"><span id="navbarSpan">Jogos</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" onclick="confirmLogout()" href="#"><img src="img/sair.png" id="imagem" width="30" name="menu" alt="Sair"><span id="navbarSpan">Sair</span></a>
			 </li>
		</ul>
	  </div>
	</nav>
	<br/>
</body>

</html>