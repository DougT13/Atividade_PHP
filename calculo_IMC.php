<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<style>
		body {
			margin: 0;
			text-align: center;
		}
	</style>

	<title>Calculo IMC</title>
</head>
<body>
	<?php 
	echo "Seu IMC foi calculador";
	echo "<br/>";

	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	echo "<b>Seu peso é: </b>".$peso;
	echo "<br/>";
	echo "<b>Sua altura é: </b>".$altura;

	$IMC = $peso / ($altura * $altura);

	echo "<br/>";
	echo "<b>Seu IMC é igual a: ".$IMC;
	echo "<br/>";

	if ($IMC > 25) {
		echo '<img src="giga.jpeg">';
	}else echo "Você está saudável!";
		echo "<br/>";
		echo '<img src="saudavel.jpeg" width="25%">';
 ?>
</body>
</html>