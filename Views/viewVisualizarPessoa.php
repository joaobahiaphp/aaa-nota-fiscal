<?php

include("Utils/FormulariosUtils.php");

include("Models/PessoasCadastradasDAO.php");

include("Utils/LayoutUtils.php");

$layout = new LayoutUtils();

$layout->imprimeCabecalho();

if(isset($_GET['id'])){
	
	$data = new PessoasCadastradasDAO();

	$visual = new FormulariosUtils();	

	$dados = $data->getPessoa($_GET['id']);

	$visual->imprimeFormularioVisual($dados);
	
	$visual->__destruct();
	
	$data->__destruct();
	
}
else{
	
	echo"<script>alert('Id não encontrado!');</script>";
	header('location:index.php?v=ListarPessoasCadastradas');
	
}

$layout->imprimeRodape();



$layout->__destruct();

?>
