<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <title></title>
</head>
<body>
    <h1>Formulario de cadastro de vendas</h1>
    <div class="col-md-4 mb-3">
        <hr>
    </div>
	
    <div class="col-md-4 mb-3">
        <form method="post" action="../Controle/ControleVenda.php?ACAO=cadastrarVenda">
            <br>
            Nome do vendedor:<input class="form-control" type="text" name="nome" maxlength="40" placeholder="Digite o nome do vendedor:" />
            <br>
            <br>Valor da venda:<input class="form-control" type="number" id="valor" name="valor" maxlength="40" placeholder="Digite o valor da venda:" step="any"/>
            <br>
            <button class="btn btn-primary" type="submit" value="Registrar">Registrar</button>
            <button class="btn btn-danger" type="reset" value="Limpar">Limpar</button>
    </div>
    </form>
</body>
</html>