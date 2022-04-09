<?php

class PessoasCadastradasDAO{

	var $PessoasCadastradas = array();

	var $retornar = array();
	
	var $nomeArquivo = __DIR__.'/PessoasCadastradas.json' ;
	
	var $abrirArquivo;
	
	var $json;

	public function __construct(){
		
		$this->json = file_get_contents($this->nomeArquivo);
		
		$this->PessoasCadastradas = json_decode($this->json,true);
		
	}

	public function __destruct(){
		//$this->mostrarArray();
		$this->gravarDatabase();
	}
	
	public function gravarDatabase(){
		
		$this->json = json_encode($this->PessoasCadastradas);
		
		$this->abrirArquivo = fopen( $this->nomeArquivo , 'w' );
		
		fwrite( $this->abrirArquivo , $this->json );
		
		fclose( $this->abrirArquivo );
	}

	public function getPessoasCadastradas(){
		return $this->PessoasCadastradas;
	}

	public function getPessoa($id){
		
		$cont = 0;
		
		foreach($this->PessoasCadastradas as $pessoa){
		
			if($id == $cont){
				$this->retornar = [
					0=>['id'=>"{$pessoa['id']}",
					'cpf-cnpj'=>"{$pessoa['cpf-cnpj']}",
					'nome-razao-social'=>"{$pessoa['nome-razao-social']}",
					'situacao'=>"{$pessoa['situacao']}",
					'tipo'=>"{$pessoa['tipo']}",
					'inscricao-estadual'=>"{$pessoa['inscricao-estadual']}",
					'eh-cliente'=>"{$pessoa['eh-cliente']}",
					'eh-fornecedor'=>"{$pessoa['eh-fornecedor']}",
					'emite-nota'=>"{$pessoa['emite-nota']}",
					'nome-fantasia'=>"{$pessoa['nome-fantasia']}",
					'cnae-fiscal'=>"{$pessoa['cnae-fiscal']}",
					'inscricao-municipal'=>"{$pessoa['inscricao-municipal']}",
					'inscricao-estadual-substituto'=>"{$pessoa['inscricao-estadual-substituto']}",
					'regime-tributario'=>"{$pessoa['regime-tributario']}",
					'telefone'=>"{$pessoa['telefone']}",
					'cep'=>"{$pessoa['cep']}",
					'logradouro'=>"{$pessoa['logradouro']}",
					'complemento'=>"{$pessoa['complemento']}",
					'numero'=>"{$pessoa['numero']}",
					'bairro'=>"{$pessoa['bairro']}",
					'pais'=>"{$pessoa['pais']}",
					'uf'=>"{$pessoa['uf']}",
					'municipio'=>"{$pessoa['municipio']}"
					]					
				];
			}
		
			$cont = $cont+1;
		
		}
		
		return $this->retornar;
	}

	public function upPessoasCadastradas(PessoasCadastradas $obj){

		$this->PessoasCadastradas[$obj->id]['cpf-cnpj'] = $obj->cpfCnpj;
		$this->PessoasCadastradas[$obj->id]['nome-razao-social'] = $obj->nomeRazaoSocial;
		$this->PessoasCadastradas[$obj->id]['situacao'] = $obj->situacao;
		$this->PessoasCadastradas[$obj->id]['tipo'] = $obj->tipo;
		$this->PessoasCadastradas[$obj->id]['inscricao-estadual'] = $obj->inscricaoEstadual;
		$this->PessoasCadastradas[$obj->id]['eh-cliente'] = $obj->ehCliente;
		$this->PessoasCadastradas[$obj->id]['eh-fornecedor'] = $obj->ehFornecedor;
		$this->PessoasCadastradas[$obj->id]['emite-nota'] = $obj->emiteNota;
		$this->PessoasCadastradas[$obj->id]['nome-fantasia'] = $obj->nomeFantasia;
		$this->PessoasCadastradas[$obj->id]['cnae-fiscal'] = $obj->cnaeFiscal;
		$this->PessoasCadastradas[$obj->id]['inscricao-municipal'] = $obj->inscricaoMunicipal;
		$this->PessoasCadastradas[$obj->id]['inscricao-estadual-substituto'] = $obj->inscricaoEstadualSubstituto;
		$this->PessoasCadastradas[$obj->id]['regime-tributario'] = $obj->regimeTributario;
		$this->PessoasCadastradas[$obj->id]['telefone'] = $obj->telefone;
		$this->PessoasCadastradas[$obj->id]['cep'] = $obj->cep;
		$this->PessoasCadastradas[$obj->id]['logradouro'] = $obj->logradouro;
		$this->PessoasCadastradas[$obj->id]['logradouro'] = $obj->logradouro;
		$this->PessoasCadastradas[$obj->id]['logradouro'] = $obj->logradouro;
		$this->PessoasCadastradas[$obj->id]['complemento'] = $obj->complemento;
		$this->PessoasCadastradas[$obj->id]['numero'] = $obj->numero;
		$this->PessoasCadastradas[$obj->id]['bairro'] = $obj->bairro;
		$this->PessoasCadastradas[$obj->id]['pais'] = $obj->pais;
		$this->PessoasCadastradas[$obj->id]['uf'] = $obj->uf;
		$this->PessoasCadastradas[$obj->id]['municipio'] = $obj->municipio;

		return true;
		
	}

	public function mostrarArray(){
		var_dump($this->PessoasCadastradas);
	}
}

?>