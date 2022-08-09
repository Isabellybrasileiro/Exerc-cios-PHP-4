<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - Exemplo 3</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - Exemplo 3</h1>

	<?php include_once 'menu.php'; ?>

	<form action="exp3.php" method="post">

		<p>
			<label>Informe o salário:</label><br>
			<input type="number" name="salario" min="900" step="0.1" required>
		</p>

		<p>
			<label>Tempo de serviço (em anos)</label><br>
			<input type="number" name="tempo" min="1" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>
		
	</form>

	<?php 
      
      if (isset($_POST['enviar'])) 
      {
      	$salario = $_POST['salario'];
      	$tempo = $_POST['tempo'];

      	if ($salario > 1500) 
      	{
      		//tempo de serviço até 3 anos
      		if ($tempo <= 3) 
      		{
      			$bonus = 200;
      		}
      		else // tempo superior a 3 anos
      		{
      			$bonus = 300;
      		}
      		else
      		{
      			if ($tempo <= 3)
      			{
      				$bonus = 230;
      			}
      			else if ($tempo <= 6)
      			{
      				$bonus = 330;
      			}
      			else
      			{
      				$bonus = 350;
      			}
      		}
      	}

      }

      echo "<p>Seu salário é R\$ $salario, seu tempo de empresa é $tempo ano(s), e sua gratificação será de R\$ $ bonus.</p>";



	 ?>

</body>
</html>