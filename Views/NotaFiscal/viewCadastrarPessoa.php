<?php

	include("Utils/LayoutUtils.php");

	include("Utils/FormulariosUtils.php");

	$layout = new LayoutUtils("nf");

	$formulario = new FormulariosUtils();

	$layout->imprimeCabecalho();			

	if(isset($_GET['tipo'])){
		$formulario->imprimeFormularioCadastro($_GET['tipo']);
	}
	else{
		$formulario->imprimeFormularioCadastro("");
	}

	$layout->imprimeRodape();
	
	$layout->__destruct();
				
	$formulario->__destruct();
?>