<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$connect = mysqli_connect("fdb21.awardspace.net","2759112_yourlifebd","Maxtarda@123") or die("Não Foi Possivel Conectar ao Servidor");
	$db = mysqli_select_db($connect,"2759112_yourlifebd") or die("Impossível Conectar com a Base de Dados");

	
?>
