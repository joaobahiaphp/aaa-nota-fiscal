<?php

class LayoutUtils{
	
	var $cabecalho;
	
	var $rodape;
	
	public function __construct(){
	
		$this->cabecalho = "
		
			<!doctype>
			<html lang='pt-br'>
				<head>
					<title>Nota Fiscal Eletrônica</title>
					<meta charset='utf-8'>
	
					<meta name='viewport' content='width=device-width'>
					<script src='js/jquery-3.2.1.slim.min.js'></script>
					<script src='js/jquery.mask.min.js'></script>
					<script src='js/popper.min.js'></script>
					<script src='js/bootstrap.min.js'></script>
	
					<link rel='stylesheet' type='text/css' href='css/estilo.css'>
					<link rel='stylesheet' type='text/css' href='css/normalize.css'>
					
					<!--[if lt IE 9]>
						<script src='js/html5shiv.min.js'></script>
					<![endif]-->
		
				</head>
				<body>
				
					<div id='tudo'>
					
						
						<div id='cabecalho'>
							<div class='dropdown'>
								<a onclick='history.back(-1);' class='dropbtn' >&lt;&lt;&nbsp;Voltar</a>
							</div>
							|
							<div class='dropdown'>
								<button class='dropbtn'>Notas Fiscais</button>
								<div class='dropdown-content'>
									<a href=''>Emitir nota</a>
									<a href=''>Gerenciar Notas</a>
									<a href=''>Inutilizações</a>
								</div>
							</div>
							|
							<div class='dropdown'>
								<button class='dropbtn'>Pessoas</button>
								<div class='dropdown-content'>
									<a href='index.php?v=CadastrarPessoa'>Cadastrar Pessoa</a>
									<a href='index.php?v=DadosEntidade'>Dados Pessoa Atual</a>
									<a href=''>Selecionar Pessoa</a>
									<a href=''>Sair da Pessoa</a>
								</div>
							</div>
							|
							<div class='dropdown'>
								<button class='dropbtn'>Cadastros</button>
								<div class='dropdown-content'>
									<!--<a href=''>Emitir nota</a>
									<a href=''>Gerenciar Notas</a>
									<a href=''>Inutilizações</a>-->
									<a href='index.php?v=ListarPessoasCadastradas'>Listar Pessoas Cadastradas</a>
								</div>
							</div>
							|
							<div class='dropdown'>
								<button class='dropbtn'>Sistema</button>
								<div class='dropdown-content'>
									<a href=''>Quadro de Avisos</a>
									<a href=''>Certificados</a>
									<a href=''>Parametros</a>
									<a href=''>Importar Arquivos</a>
									<a href=''>Backup</a>
									<a href=''>Restaurar</>
									<a href=''>Relatório Gerencial</a>
								</div>
							</div>
							<br />
							<hr />
						</div>
		
		";

		$this->rodape = "
		
						<div id='rodape'>
							<hr />
							<p>@STAFF Cursos EIRELI | Todos os direitos reservados.</p> 
						</div>
					
					</div>
				
				</body>
			</html>
		
		";
	
	}
	
	public function __destruct(){
		
	}
	
	public function imprimeCabecalho(){
		echo $this->cabecalho;
	}
	
	public function imprimeRodape(){
		echo $this->rodape;
	}
	

	
}

?>