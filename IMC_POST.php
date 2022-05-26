<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário  Descubra seu IMC!</title>
	<style>
		div {
			border: 1px solid black;
			margin-left: 200px;
			margin-right: 200px;
			border-radius: 4px;
		}
		body {
			text-align: center;
			margin: 0;
		}
		input[type=text] {
			  background-color: white;
			  background-image: url('searchicon.png');
			  background-position: 10px 10px;
			  background-repeat: no-repeat;
		}	  

	</style>
</head>
<body>
	<div>
		<h2>Descubra seu IMC!</h2>
		<form name="Cadastro" method="POST" action="calculo_IMC.php">
			
			Digite seu peso:
			<input type="text" name="peso"><br/><br/>
			
			Digite sua altura:
			<input type="text" name="altura"><br/><br/>

			<input type="submit" name="ENVIAR">

		</form>
	</div>	
</body>
</html>