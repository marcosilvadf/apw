<?php
    require('estrutura.class.php');//referenciando o arquivo 
    if(isset($_POST['txtfrase'])) {
        $fr= $_POST['txtfrase'];
    }
?>
<form id="form1" name="form1" method="post" action="">
    <table width="843" border="0"><tr>
    Nome: <input type="text" name="txtfrase" id="txtfrase" /></td>
    <td><input type="submit" name="button" id="button" value="Enviar" /></td>
    <td>&nbsp;</td></tr>
    </table>
</form>
<?php
    $obj = new Mensagem; //instanciando o objeto
    if(isset($_POST['txtfrase'])) {
        $obj->imprimir($fr); // usando o metodo
    }
?>