<?php
class Rendimento{
    public function calculo($valor){
        if (!empty($valor)) {
            $valor += ($valor* 0.007);
            return "R$" . str_replace(".", ",", number_format($valor, 2, ".", ""));
        } else {
            return "Nenhum valor informado";
        }
    }
}
$rendimento = new Rendimento();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Valor do rendimento</h1>
    <h2><?= $rendimento->calculo($_POST["valor"]); ?></h2>
</body>
</html>