<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - Exemplo 5</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - Exemplo 5</h1>

	<?php include_once 'menu.php'; ?>

	<form action="exp5.php" method="post">

		<p>
			<label>Nome do funcionário:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Salário base R$:</label><br>
			<input type="number" name="salario" min="100" step="0.01" required>
		</p>

		<p>
			<label>Quantidade de Dep. até 14 anos:</label><br>
			<input type="number" name="dependentes" min="0" required>

		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>
		
	</form>

	<?php
      if (isset($_POST['enviar']))
      {
      	$nome = $_POST['nome'];
      	$salario = $_POST['salario'];
      	$dependentes = $_POST['dependentes'];

      	if ($salario <= 800) 
      	{
      		$inss = 0.07 * $salario;
      	}
      	else if ($salario <= 1200) 
      	{
      		$inss = 0.08 * $salario;
      	}
      	else if ($salario <= 1500) 
      	{
      		$inss = 0.09 * $salario;
      	}
      	else 
      	{
      		$inss = 135;
      	}

      	if ($salario <= 1450) 
      	{
      		$salario_familia = 250 * $dependentes;
      	}
      	else if ($salario <= 2600) 
      	{
      		$salario_familia = 200 * $dependentes;
      	}
      	else
      	{
      		$salario_familia= 0;
      	}

      	$salario_final = $salario - $inss + $salario_familia;


      	echo "<p>$nome, seu salário base é R\$ $salario, você possui $dependentes dependente(s) até 14 anos, seu desconto do INSS será de R\$ $inss, seu salário familia será de R\$ $salario_familia, e seu salário líquido será de R\$ $salario_final</p>";
      }

	?>


</body>
</html>