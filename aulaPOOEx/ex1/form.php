<?php
require ('calc.class.php');
$vl = @$_POST['valor'];
$calcular = new Calcular;
?>

<form action="" method="post">
    <input type="number" name="valor" id="">
    <input type="submit" value="Calcular"><br>
    Valor com desconto de 10%: <?=$calcular->desconto($vl);?>
</form>