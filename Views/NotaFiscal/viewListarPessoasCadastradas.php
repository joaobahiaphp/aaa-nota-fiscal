<?php

	include("Utils/LayoutUtils.php");
	
	include("Utils/ListagensUtils.php");
	
	include("Models/PessoasCadastradasDAO.php");

	$layout = new LayoutUtils("nf");

	$listaEntidades = new ListagensUtils();

	$data = new PessoasCadastradasDAO();


	$layout->imprimeCabecalho();

	$dados = $data->getPessoasCadastradas();

	$listaEntidades->ListarEntidades($dados);

	$layout->imprimeRodape();
	
	
	$data->__destruct();
	
	$layout->__destruct();

	$listaEntidades->__destruct();
?>