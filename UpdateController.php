<?php
	
	include("Models/PessoasCadastradasDAO.php");
	include("Models/PessoasCadastradas.php");

	if(isset($_POST['tipo'])){
		switch($_POST['tipo']){
			case 'fisica':
				echo "<script>alert('update-pessoa-fisica={$_POST['id']}')</script>";
				
				//var_dump($_POST);
				
				$pessoa = new PessoasCadastradas();

				$pessoa->setTipo($_POST['tipo']);
				$pessoa->setId($_POST['id']);
				$pessoa->setCpfCnpj($_POST['nr_cpf']);
				$pessoa->setNomeRazaoSocial($_POST['nome_razao_social']);
				$pessoa->setSituacao($_POST['situacao']);
				$pessoa->setEhCliente($_POST['eh-cliente']);
				$pessoa->setEhFornecedor($_POST['eh-fornecedor']);
				$pessoa->setEmiteNota($_POST['emite-nota']);
				$pessoa->setCep($_POST['cep']);
				$pessoa->setLogradouro($_POST['logradouro']);
				$pessoa->setComplemento($_POST['complemento']);
				$pessoa->setNumero($_POST['nr_lote']);
				$pessoa->setBairro($_POST['bairro']);
				$pessoa->setPais($_POST['pais']);
				$pessoa->setUf($_POST['uf']);
				$pessoa->setMunicipio($_POST['municipio']);
				
				$obj = new PessoasCadastradasDAO();
				$dados = $obj->upPessoasCadastradas($pessoa);
				$pessoa->__destruct();
				$obj->__destruct();

				if($dados){
					header("Location:index.php?v=VisualizarPessoa&id={$_POST['id']}");
				}
				
			break;
			
			case 'juridica':
				echo "<script>alert('update-pessoa-juridica={$_POST['id']}')</script>";
		
				//var_dump($_POST);

				$empresa = new PessoasCadastradas();

				$empresa->setTipo($_POST['tipo']);
				$empresa->setId($_POST['id']);
				$empresa->setCpfCnpj($_POST['nr_cnpj']);
				$empresa->setNomeRazaoSocial($_POST['nome_razao_social']);
				$empresa->setSituacao($_POST['situacao']);
				$empresa->setInscricaoEstadual($_POST['nr_insc_estadual']);
				$empresa->setEhCliente($_POST['eh-cliente']);
				$empresa->setEhFornecedor($_POST['eh-fornecedor']);
				$empresa->setEmiteNota($_POST['emite-nota']);
				$empresa->setNomeFantasia($_POST['nome_fantasia']);
				$empresa->setCnaeFiscal($_POST['nr_cnae_fiscal']);
				$empresa->setInscricaoMunicipal($_POST['nr_insc_municipal']);
				$empresa->setInscricaoEstadualSubstituto($_POST['nr_insc_estadual_substituto']);
				$empresa->setRegimeTributario($_POST['regime_tributario']);
				$empresa->setTelefone($_POST['telefone']);
				$empresa->setCep($_POST['cep']);
				$empresa->setLogradouro($_POST['logradouro']);
				$empresa->setComplemento($_POST['complemento']);
				$empresa->setNumero($_POST['nr_lote']);
				$empresa->setBairro($_POST['bairro']);
				$empresa->setPais($_POST['pais']);
				$empresa->setUf($_POST['uf']);
				$empresa->setMunicipio($_POST['municipio']);

				$obj = new PessoasCadastradasDAO();
				$dados = $obj->upPessoasCadastradas($empresa);
				$empresa->__destruct();
				$obj->__destruct();

				if($dados){
					header("Location:index.php?v=VisualizarPessoa&id={$_POST['id']}");
				}
				
			break;
		}
	}

?>