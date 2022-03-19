<?php

class PessoasCadastradas{

    private $cpfCnpj;
    private $nomeRazaoSocial;
    private $situacao;
    private $tipo;
    private $inscricaoEstadual;
    private $ehCliente;
    private $ehFornecedor;
    private $emiteNota;
    private $nomeFantasia;
    private $cnaeFiscal;
    private $inscricaoMunicipal;
    private $inscricaoEstadualSubstituto;
    private $regimeTributario;
    private $telefone;
    private $cep;
    private $logradouro;
    private $complemento;
    private $numero;
    private $bairro;
    private $pais;
    private $uf;
    private $municipio;

    public function __construct(){

    }

    public function __destruct(){

    }


    /**
     * Get the value of cpfCnpj
     */ 
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set the value of cpfCnpj
     *
     * @return  self
     */ 
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Get the value of nomeRazaoSocial
     */ 
    public function getNomeRazaoSocial()
    {
        return $this->nomeRazaoSocial;
    }

    /**
     * Set the value of nomeRazaoSocial
     *
     * @return  self
     */ 
    public function setNomeRazaoSocial($nomeRazaoSocial)
    {
        $this->nomeRazaoSocial = $nomeRazaoSocial;

        return $this;
    }

    /**
     * Get the value of situacao
     */ 
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set the value of situacao
     *
     * @return  self
     */ 
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of inscricaoEstadual
     */ 
    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
    }

    /**
     * Set the value of inscricaoEstadual
     *
     * @return  self
     */ 
    public function setInscricaoEstadual($inscricaoEstadual)
    {
        $this->inscricaoEstadual = $inscricaoEstadual;

        return $this;
    }

    /**
     * Get the value of ehCliente
     */ 
    public function getEhCliente()
    {
        return $this->ehCliente;
    }

    /**
     * Set the value of ehCliente
     *
     * @return  self
     */ 
    public function setEhCliente($ehCliente)
    {
        $this->ehCliente = $ehCliente;

        return $this;
    }

    /**
     * Get the value of ehFornecedor
     */ 
    public function getEhFornecedor()
    {
        return $this->ehFornecedor;
    }

    /**
     * Set the value of ehFornecedor
     *
     * @return  self
     */ 
    public function setEhFornecedor($ehFornecedor)
    {
        $this->ehFornecedor = $ehFornecedor;

        return $this;
    }

    /**
     * Get the value of emiteNota
     */ 
    public function getEmiteNota()
    {
        return $this->emiteNota;
    }

    /**
     * Set the value of emiteNota
     *
     * @return  self
     */ 
    public function setEmiteNota($emiteNota)
    {
        $this->emiteNota = $emiteNota;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     */ 
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     *
     * @return  self
     */ 
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of cnaeFiscal
     */ 
    public function getCnaeFiscal()
    {
        return $this->cnaeFiscal;
    }

    /**
     * Set the value of cnaeFiscal
     *
     * @return  self
     */ 
    public function setCnaeFiscal($cnaeFiscal)
    {
        $this->cnaeFiscal = $cnaeFiscal;

        return $this;
    }

    /**
     * Get the value of inscricaoMunicipal
     */ 
    public function getInscricaoMunicipal()
    {
        return $this->inscricaoMunicipal;
    }

    /**
     * Set the value of inscricaoMunicipal
     *
     * @return  self
     */ 
    public function setInscricaoMunicipal($inscricaoMunicipal)
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;

        return $this;
    }

    /**
     * Get the value of inscricaoEstadualSubstituto
     */ 
    public function getInscricaoEstadualSubstituto()
    {
        return $this->inscricaoEstadualSubstituto;
    }

    /**
     * Set the value of inscricaoEstadualSubstituto
     *
     * @return  self
     */ 
    public function setInscricaoEstadualSubstituto($inscricaoEstadualSubstituto)
    {
        $this->inscricaoEstadualSubstituto = $inscricaoEstadualSubstituto;

        return $this;
    }

    /**
     * Get the value of regimeTributario
     */ 
    public function getRegimeTributario()
    {
        return $this->regimeTributario;
    }

    /**
     * Set the value of regimeTributario
     *
     * @return  self
     */ 
    public function setRegimeTributario($regimeTributario)
    {
        $this->regimeTributario = $regimeTributario;

        return $this;
    }

    /**
     * Get the value of regimeTributario
     */ 
    public function getRegimeTributario()
    {
        return $this->regimeTributario;
    }

    /**
     * Set the value of regimeTributario
     *
     * @return  self
     */ 
    public function setRegimeTributario($regimeTributario)
    {
        $this->regimeTributario = $regimeTributario;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of logradouro
     */ 
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */ 
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of complemento
     */ 
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */ 
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of uf
     */ 
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     *
     * @return  self
     */ 
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of municipio
     */ 
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set the value of municipio
     *
     * @return  self
     */ 
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

?>