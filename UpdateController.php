<?php

	include("Models\PessoasCadastradasDAO.php");

	if(isset($_POST['tipo'])){
		switch($_POST['tipo']){
			case 'fisica':
				echo "<script>alert('update-pessoa-fisica={$_POST['id']}')</script>";
				
				var_dump($_POST);

				/*
				$obj = new PessoasCadastradasDAO();
				$dados = $obj->upPessoasCadastradas($_POST['id'],$_POST['nr_cpf'],$_POST['nome_razao_social'],$_POST['situacao'],$_POST['tipo'],$_POST['nr_insc_estadual'],$_POST['eh-cliente'],$_POST['eh-fornecedor'],$_POST['emite-nota'],"nao-tem","nao-tem","nao-tem","nao-tem","nao-tem","nao-tem",$_POST['cep'],$_POST['logradouro'],$_POST['complemento'],$_POST['nr_lote'],$_POST['bairro'],$_POST['pais'],$_POST['uf'],$_POST['municipio']);
				$obj->gravarDatabase();
				$obj->__destruct();

				if($dados){
					header("Location:index.php?v=VisualizarPessoa&id={$_POST['id']}");
				}
				*/

			break;
			
			case 'juridica':
				echo "<script>alert('update-pessoa-juridica={$_POST['id']}')</script>";
		
				var_dump($_POST);

				/*
				$obj = new PessoasCadastradasDAO();
				$dados = $obj->upPessoasCadastradas($_POST['id'],$_POST['nr_cpf'],$_POST['nome_razao_social'],$_POST['situacao'],$_POST['tipo'],$_POST['nr_insc_estadual'],$_POST['eh-cliente'],$_POST['eh-fornecedor'],$_POST['emite-nota'],$_POST['nome_fantasia'],$_POST['nr_cnae_fiscal'],$_POST['nr_insc_municipal'],$_POST['nr_insc_estadual_substituto'],$_POST['regime_tributario'],$_POST['telefone'],$_POST['cep'],$_POST['logradouro'],$_POST['complemento'],$_POST['nr_lote'],$_POST['bairro'],$_POST['pais'],$_POST['uf'],$_POST['municipio']);
				$obj->gravarDatabase();
				$obj->__destruct();

				if($dados){
					header("Location:index.php?v=VisualizarPessoa&id={$_POST['id']}");
				}
				*/
				
			break;
		}
	}

?>