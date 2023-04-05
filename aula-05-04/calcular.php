<?php
    Class Calcular{
        private $peso;

        function calcularPesoIdeal($altura) {
            $this->setPeso((72.7 * $altura) - 58);
            return $this->getPeso();
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;

            return $this;
        }
    }

    if(!isset($_POST['altura'])) {
        header("Location: index.php");
        die();
    }

    $altura = $_POST['altura'];
    $calcular = new Calcular;
    $resultado = number_format($calcular->calcularPesoIdeal($altura), 2);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <h1>Seu peso ideal é:</h1>
        <h2><?= $resultado?>Kg</h2>
    </div>
</body>
</html>