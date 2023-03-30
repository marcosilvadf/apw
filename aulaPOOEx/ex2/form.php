<?php
require ('salario.class.php');
$obj = new Salario;
$valor = $_POST["valor"];
?>

<form action="" method="post">
    <input type="number" name="valor" id="">
    <input type="submit" value="Enviar">
</form>

<?=$obj->calcular_salario($valor);?>