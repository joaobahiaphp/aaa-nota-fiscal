<?php

	@session_start();
	include("Models/PessoasCadastradasDAO.php");
	
	if(isset($_SESSION['module'])){

		switch($_SESSION['module']){
			case "nf":

				if(isset($_POST["entidade"])){
		
					if($_POST["entidade"] == "fisica"){
						
						$obj = new PessoasCadastradasDAO();
						$dados = $obj->getPessoasCadastradas();
						
						$contaLista = count($obj->PessoasCadastradas);
			
						$obj->PessoasCadastradas[$contaLista]['id']= $contaLista;
						$obj->PessoasCadastradas[$contaLista]['cpf-cnpj'] = $_POST['nr_cpf'];
						$obj->PessoasCadastradas[$contaLista]['nome-razao-social'] = $_POST['nome_razao_social'];			
						$obj->PessoasCadastradas[$contaLista]['situacao'] = "ativo";
						$obj->PessoasCadastradas[$contaLista]['tipo'] = $_POST['tipo'];
						$obj->PessoasCadastradas[$contaLista]['inscricao-estadual'] = $_POST['nr_insc_estadual'];
						$obj->PessoasCadastradas[$contaLista]['eh-cliente'] = $_POST['eh-cliente'];
						$obj->PessoasCadastradas[$contaLista]['eh-fornecedor'] = $_POST['eh-fornecedor'];
						$obj->PessoasCadastradas[$contaLista]['emite-nota'] = $_POST['emite-nota'];
						$obj->PessoasCadastradas[$contaLista]['nome-fantasia'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['cnae-fiscal'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['inscricao-municipal'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['inscricao-estadual-substituto'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['regime-tributario'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['telefone'] = "nao-tem";
						$obj->PessoasCadastradas[$contaLista]['cep'] = $_POST['cep'];
						$obj->PessoasCadastradas[$contaLista]['logradouro'] = $_POST['logradouro'];
						$obj->PessoasCadastradas[$contaLista]['complemento'] = $_POST['complemento'];
						$obj->PessoasCadastradas[$contaLista]['numero'] = $_POST['nr_lote'];
						$obj->PessoasCadastradas[$contaLista]['bairro'] = $_POST['bairro'];
						$obj->PessoasCadastradas[$contaLista]['pais'] = $_POST['pais'];
						$obj->PessoasCadastradas[$contaLista]['uf'] = $_POST['uf'];
						$obj->PessoasCadastradas[$contaLista]['municipio'] = $_POST['municipio'];
						
						$obj->__destruct();
						
						echo "true";
			
					}
					
					if($_POST["entidade"] == "juridica"){
						
						$obj = new PessoasCadastradasDAO();
						$dados = $obj->getPessoasCadastradas();
						
						$contaLista = count($obj->PessoasCadastradas);
			
						$obj->PessoasCadastradas[$contaLista]['id']= $contaLista;
						$obj->PessoasCadastradas[$contaLista]['cpf-cnpj'] = $_POST['nr_cnpj'];
						$obj->PessoasCadastradas[$contaLista]['nome-razao-social'] = $_POST['nome_razao_social'];			
						$obj->PessoasCadastradas[$contaLista]['situacao'] = "ativo";
						$obj->PessoasCadastradas[$contaLista]['tipo'] = $_POST['tipo'];
						$obj->PessoasCadastradas[$contaLista]['inscricao-estadual'] = $_POST['nr_insc_estadual'];
						$obj->PessoasCadastradas[$contaLista]['eh-cliente'] = $_POST['eh-cliente'];
						$obj->PessoasCadastradas[$contaLista]['eh-fornecedor'] = $_POST['eh-fornecedor'];
						$obj->PessoasCadastradas[$contaLista]['emite-nota'] = $_POST['emite-nota'];
						$obj->PessoasCadastradas[$contaLista]['nome-fantasia'] = $_POST['nome_fantasia'];
						$obj->PessoasCadastradas[$contaLista]['cnae-fiscal'] = $_POST['nr_cnae_fiscal'];
						$obj->PessoasCadastradas[$contaLista]['inscricao-municipal'] = $_POST['nr_insc_municipal'];
						$obj->PessoasCadastradas[$contaLista]['inscricao-estadual-substituto'] = $_POST['nr_insc_estadual_substituto'];
						$obj->PessoasCadastradas[$contaLista]['regime-tributario'] = $_POST['regime_tributario'];
						$obj->PessoasCadastradas[$contaLista]['telefone'] = $_POST['telefone'];
						$obj->PessoasCadastradas[$contaLista]['cep'] = $_POST['cep'];
						$obj->PessoasCadastradas[$contaLista]['logradouro'] = $_POST['logradouro'];
						$obj->PessoasCadastradas[$contaLista]['complemento'] = $_POST['complemento'];
						$obj->PessoasCadastradas[$contaLista]['numero'] = $_POST['nr_lote'];
						$obj->PessoasCadastradas[$contaLista]['bairro'] = $_POST['bairro'];
						$obj->PessoasCadastradas[$contaLista]['pais'] = $_POST['pais'];
						$obj->PessoasCadastradas[$contaLista]['uf'] = $_POST['uf'];
						$obj->PessoasCadastradas[$contaLista]['municipio'] = $_POST['municipio'];
			
						var_dump($obj->PessoasCadastradas);
						
						$obj->__destruct();
						
						echo "true";
			
					}
					
				}

			break;

			case "dp":

			break;
		}

	}

?>