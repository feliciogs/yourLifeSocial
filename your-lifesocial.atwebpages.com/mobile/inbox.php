<?php
	include("header.php");

	$sql = mysqli_query($connect,"SELECT * FROM mensagens WHERE para='$login_cookie' GROUP BY de ORDER BY id");

	$ups = mysqli_query($connect,"SELECT * FROM mensagens WHERE para='$login_cookie' AND status = 0 ");

	$contagem = mysqli_num_rows($ups);
?>


<html>
	<header>
		<style type="text/css">
			a{text-decoration: none;}
			div#box p{text-align:center;cursor: pointer;color:#333;}
			div#box p:hover{color:#007fff;}
			div#box{min-width:100px; max-width: 500px; display: block; margin: auto;}
			div#box:hover{box-shadow: inset 0 0 6px #AAA; border-radius: 5px;}
			hr{width: 400px; display:block; margin:auto; border:1px solid #555;}
			h2{text-align: center;color: #007fff;}
			h3{text-align: center;color: #AAA;}
		</style>
	</header>
	<body>
		<h2>Conversas</h2>
		<form method="POST">
			<div>
				<?php
					while($msg=mysqli_fetch_assoc($sql)){
							$from = $msg["de"];
							$tudo = mysqli_query($connect,"SELECT * FROM users WHERE email='$from'");
							$img = mysqli_fetch_assoc($tudo);
							$conta = mysqli_query($connect,"SELECT * FROM mensagens WHERE de='$from' AND para='$login_cookie' AND status= 0 ");
							$contar = mysqli_num_rows($conta);
							
							echo '<br/><a name="d" href="chat.php?from='.$img["id"].'"><div id="box">
								  <br/><p>'.$img["nome"].' '.$img["apelido"].' - '.$contar.' mensagens novas</p><br/>
								  </div></a><br/>
								  <hr/>';
						}
				?>
			</div>
		</form>
	   <br/>
	   <br/>
		   <div id="footer"><p>&copy;YourLifeSocial! 2018 - Todos os direitos reservados</p></div>
	</body>
</html>