<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 4 - Exemplo 4</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 4 - Exemplo 4</h1>

    <?php include_once 'menu.php'; ?>

    <form action="exp4.php" method="post">

    	<p>
    		<label>Informe o salário:</label><br>
    		<input type="number" name="salario" min="800" step="0.01" required>
    	</p>

    	<p>
    		<label>Quantidade de filhos:</label><br>
    		<input type="number" name="filhos" min="0" required="">
    	</p>

    	<p>
    		<button type="submit" name="enviar">Enviar</button>
    	</p>

    	
    </form>

    <?php 
     
     if (isset($_POST['enviar']))
     {
     	$salario = $_POST['salario'];
     	$filhos = $_POST['filhos'];

     	if ($salario < 2300)
     	{
     		if ($filhos <= 2)
     		{
     			$aux = $filhos * 50;
     		}
     		else
     		{
     			$aux = $filhos *70;
     		}
     	}
     	else if ($salario < 2500)
     	{
            if ($filhos <= 2)
            {
            $aux = $filhos * 40;
            }
            else
            {
            	$aux = $filhos * 60;
            }
     	}
     	else
     	{
           if ($filhos <= 2)
           {
           	$aux = $filhos * 30;
           }
           else
           {
           	$aux = $filhos * 20;
           }
     	}

     	$salario_final = $salario + $aux;

     	echo "<p>Seu salário base é R\$ $salario, você tem $filhos filhos, portanto, seu auxilio-escola será de R\$ $aux, e seu salário final será de R\$ $salario_final</p>";
     }

     ?>

</body>
</html>