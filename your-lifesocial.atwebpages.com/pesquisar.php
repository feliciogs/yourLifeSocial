<?php 
	include("header.php");
?>


<html>
	<header>
		<style type="text/css">
			h3{text-align: center;font-size: 32px;color: #666;}
			h2{text-align: center;font-size: 46px;color: #666;}
			p[name="p"]{display: block;margin: auto;font-size: 20px;text-align: center;color: #FFF;max-width: 700px;}
			a[name="p"]{color: #1111111; text-decoration: none;}
			hr{border: 1px solid #666;width: 500px;display: block;margin: auto;}
			
		</style>
	</header>
<body>
	<h2>Resultados da Pesquisa!</h2>
	<?php
		$query = $_GET['query'];
		
		$min_length = 3;
		
		if(strlen($query) >= $min_length){
			$query = htmlspecialchars($query);
			
			$query = mysqli_real_escape_string($connect,$query);
			
			$raw_results = mysqli_query($connect, "SELECT * FROM users WHERE nome LIKE '%".$query."%'")or die(mysqli_error($connect));
			
			if (mysqli_num_rows($raw_results)>0){
				echo "<br/><br/>";
				while($results = mysqli_fetch_array($raw_results)){
					echo '<a href="profile.php?id='.$results["id"].'" name="p"><br/><p name="p"><h3>'.$results["nome"].' '.$results["apelido"].'</h3></p><br/></a><br/><hr/><br/>';
				}
			}else{
				echo "<br/><h3>Nada foi encontrado, tente novamente com outro nome.</h3>";
			}
			
		}else{
			echo "<br/><h3>Insira pelo menos 3 letras para pesquisar uma Pessoa!.</h3>";
		}
	?>
</body>
</html>