<?php
	setcookie("login");
        include("db.php");
	if(isset($_POST['entrar'])){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$verifica = mysqli_query($connect,"SELECT * FROM users WHERE email = '$email' AND password = '$senha'");
		if(mysqli_num_rows($verifica)<=0){
			echo "<script>alert('Email ou senha Informada estão incorreta!');</script>";
		}else{
                        setcookie("login",$email);
                        header("Location:home.php");
		}
	}
?>

<html>
<head> 
        <title>YourLifeSocial!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1 user-scalable=0">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<style type="text/css">
		*{font-family: 'Montserrat',cursive;}
		img{display: block;margin: auto;width: 150px;}
		form{text-align: center;margin-top: 20px;}
		h2{text-align: center;margin-top: 20px;}
		h3{text-align: center;margin-top: 20px; color: #1E90FF;margin-top: 15px;font-size: 20px;}
		a{text-decoration: none;color: #333;}
        #slide{padding: 0 !important;margin-top: -20px;}
		div#rodape{width: auto;height: auto; background-color: #007fff;color: white;font-size:15px;padding-top: 40px;margin-top:5px;  padding-bottom: 5%;}
        #form-entrar{padding-left: 100px;padding-right: 100px;}
        @media (max-width: 992px){
            #slide{display: none;}
            #form-entrar{padding: 0 !important;}
            
        }
       
	</style>
</head>
<body class="container-fluid">
        <div class="row" id="conteudo">
            
            <div class="col-4" id="form-entrar">
            <img src="img/logo.png"><br/>
            <h3>Acesse Sua Conta</h3>
            <form method="POST">
               <div class="form-group">
                <input type="email" class="form-control" placeholder="Endereço de Email" name="email">
				</div>
               <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="senha">
			   </div>
               <div class="form-group form-check">
               <input class="btn btn-primary" type="submit" value="Entrar" name="entrar"><br/></br/>
				<input type="checkbox" class="form-check-input" id="salvaEntrar">
				<label class="form-check-label" for="salvaEntrar">Lembrar-me</label>
			  </div>
            </form>
            <br/><br/><br/>
            
            <h3>Não tem conta ainda?<a href="registrar.php">Crie sua Conta!</a></h3>
            </div>
          <div class="col-8" width="120%" id="slide">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="img/login-3.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/login-2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="img/login-1.png" alt="Third slide">
                    </div>
                  </div>
			  </div>
        </div> 
       </div>
        <div class="row" id="rodape">
            <div class="col-12 align-self-center text-center">
            <p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p><br/>
            <p>Sobre | Politica de Privacidade | Status | Marketing</p>
            
            </div>
        </div>
</body>	
</html>