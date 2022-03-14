<?php

class PessoasCadastradas{

    private $CpfCnpjPessoaCadastrada;

    private $NomeRazaoSocialPessoaCadastrada;

    private $SituacaoPessoaCadastrada;

    public function __construct(){

    }

    public function __destruct(){

    }

    public function setSituacaoPessoaCadastrada($SituacaoPessoaCadastrada){
        $this->SituacaoPessoaCadastrada = $SituacaoPessoaCadastrada;
    }

    public function getSituacaoPessoaCadastrada(){
        return $this->SituacaoPessoaCadastrada;
    }

    public function setNomeRazaoSocialPessoaCadastrada($NomeRazaoSocialPessoaCadastrada){
        $this->NomeRazaoSocialPessoaCadastrada = $NomeRazaoSocialPessoaCadastrada;
    }

    public function getNomeRazaoSocialPessoaCadastrada(){
        return $this->NomeRazaoSocialPessoaCadastrada;
    }

    public function setCpfCnpjPessoaCadastrada($CpfCnpjPessoaCadastrada){
        $this->CpfCnpjPessoaCadastrada = $CpfCnpjPessoaCadastrada; 
    }

    public function getCpfCnpjPessoaCadastrada(){
        return $this->CpfCnpjPessoaCadastrada;
    }
}

?>