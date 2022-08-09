<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - Exemplo 1</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - Exemplo 1</h1>

	<?php include_once 'menu.php'; ?>

    <form action="exp1.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Altura: (em cm)</label><br>
			<input type="number" name="altura" required min="1">
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>
	</form>

	<?php
	
	if (isset($_POST ['enviar'])) 
	{
		$nome = $_POST['nome'];
		$altura = $_POST['altura'];


		if ($altura >= 1 && $altura <= 159) 
		{
			$estatura = "baixa";
		}
            // SENÃO SE (altura >= 160 E altura <= 172) ENTAO
		else if ($altura >= 160 && $altura <= 172) 
		{
			$estatura = "média";
		}

		else //SENÃO 
		{
			$estatura = "aula";
		}

		echo "<p>$nome, sua estatuta é $estatura.</p>";
	}

	 ?>

</body>
</html>