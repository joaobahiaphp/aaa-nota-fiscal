<?php

@session_start();

if ( isset($_GET['v']) && isset($_SESSION['token']) ){
	switch($_GET['v']){

		/* views = us Usuários-do-Sistema */


		
		/* views = dp Dept-Pessoal */



		/* views = nf Nota-Fiscal */

		case 'nfDadosPessoa':
			include('Views/NotaFiscal/viewDadosPessoa.php');
		break;
		case 'nfCadastrarPessoa':
			include('Views/NotaFiscal/viewCadastrarPessoa.php');
		break;
		case 'nfListarPessoasCadastradas':
			include('Views/NotaFiscal/viewListarPessoasCadastradas.php');
		break;
		case 'nfVisualizarPessoa':
			include('Views/NotaFiscal/viewVisualizarPessoa.php');
		break;
	}
}
else{
	include('Views/viewMenu.php');
}

?>