<?php

if (isset($_GET['v'])){
	switch($_GET['v']){
		case 'DadosPessoa':
			include('Views/viewDadosPessoa.php');
		break;
		case 'CadastrarPessoa':
			include('Views/viewCadastrarPessoa.php');
		break;
		case 'ListarPessoasCadastradas':
			include('Views/viewListarPessoasCadastradas.php');
		break;
		case 'VisualizarPessoa':
			include('Views/viewVisualizarPessoa.php');
		break;
	}
}
else{
	include('Views/viewMenu.php');
}

?>