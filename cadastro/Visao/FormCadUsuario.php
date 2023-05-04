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
    <h1>Formulario de cadastro de Alunos</h1>
    <div class="col-md-4 mb-3">
        <hr>
    </div>
	
    <div class="col-md-4 mb-3">
        <form method="post" action="../Controle/ControleUsuario.php?ACAO=cadastrarUsuario">
            <br>
            Nome:<input class="form-control" type="text" name="nome" maxlength="40" placeholder="Digite seu nome" />
            <br>
            <br>Email:<input class="form-control" type="email" id="email" name="email" maxlength="40" placeholder="Digite seu email" />
            <br>
            <button class="btn btn-primary" type="submit" value="Registrar">Registrar</button>
            <button class="btn btn-danger" type="reset" value="Limpar">Limpar</button>
    </div>
    </form>
</body>
</html>