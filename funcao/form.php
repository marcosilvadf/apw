<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Calculadora</title>
</head>
	<body>
    <div class="jumbotron">
  <h1 class="display-4">Sistema de Vendas</h1>
  <p class="lead"><h3>Insira o valor da venda e a quantidade de parcelas:</h3></p>
  <hr class="my-4">
  <p>Este sistema Calcula desconto o juros dependendo da quantidade de parcelas.</p>
  

		<form method="POST" action="desconto.php">
		 <center>
			<fieldset>
				
				Valor da venda: <input type="text" name="n1"><br><br>
				Quantidade de parcelas: <input type="text" name="n2"><br><br>
				<button type="submit" class="btn btn-primary" name="acao">Enviar</button>
			</fieldset>
		 </center>

		</form>
        </div>
	</body>
</html>