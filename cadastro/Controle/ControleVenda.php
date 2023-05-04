<?php
require_once '../Modelo/ClassVenda.php';
require_once '../Modelo/DAO/ClassVendaDAO.php';

$id =@$_POST['idex'];
$nome = @$_POST['nome'];
$valor = @$_POST['valor'];
$acao = $_GET['ACAO'];


$novaVenda = new ClassVenda();
$novaVenda->setId($id);
$novaVenda->setNome($nome);
$novaVenda->setValor($valor);
$novaVenda->setDesconto($novaVenda->getValor()*0.1);

$classVendaDAO = new ClassVendaDAO();
switch ($acao) {
	case "cadastrarVenda":
        $venda = $classVendaDAO->cadastrar($novaVenda);
	    if($venda >= 1){
            header('Location: ../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location: ../index.php?&MSG= Não foi possivel realizar o cadastro!');
        }
        break;
	case 'alterarUsuario':
	   //codigo aqui
         
        $venda = $classVendaDAO->alterarUsuario($novoUsuario);
        
        if($usuario == 1){
            header('Location:../index.php?&MSG= Cadastro atualizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= Não foi possivel realizar a atualização!');
        }
        
        
        
	   break;
    
    case "excluirUsuario":
        if (isset($_GET['idex'])) {
            $idUsuario = $_GET['idex'];
            $classUsuarioDAO = new ClassUsuarioDAO();
            $us = $classUsuarioDAO->excluirUsuarios($idUsuario);
            if ($us == TRUE) {
                header('Location:../index.php?PAGINA=listarUsuario&MSG= Usuario foi excluido com sucesso!');
            } else {
                header('Location:../index.php?PAGINA=listarUsuario&MSG=Não foi possivel realizar a exclusão do Usurio!');
            }
        }

        break;
    default :
        break;	
 }
?>