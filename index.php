<?php

@session_start();

if ( isset($_GET['v']) && isset($_SESSION['token']) ){
	switch($_GET['v']){
		case 'DadosPessoa':
			include('Views/Modules/NotaFiscal/viewDadosPessoa.php');
		break;
		case 'CadastrarPessoa':
			include('Views/Modules/NotaFiscal/viewCadastrarPessoa.php');
		break;
		case 'ListarPessoasCadastradas':
			include('Views/Modules/NotaFiscal/viewListarPessoasCadastradas.php');
		break;
		case 'VisualizarPessoa':
			include('Views/Modules/NotaFiscal/viewVisualizarPessoa.php');
		break;
	}
}
else{
	include('Views/Modules/viewMenu.php');
}

?>