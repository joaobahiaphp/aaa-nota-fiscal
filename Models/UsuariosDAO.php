<?php

class UsuariosDAO {

    var $Usuarios = array();

    var $retornar = array();

    var $nomeArquivo = __DIR__.'/Usuarios.json' ;

    var $abrirArquivo;

    var $json;

    public function __construct(){

		$this->json = file_get_contents($this->nomeArquivo);
		
		$this->Usuarios = json_decode($this->json,true);

    }

    public function __destruct(){
		$this->gravarDatabase();
    }

    public function gravarDatabase(){
		
		$this->json = json_encode($this->Usuarios);
		
		$this->abrirArquivo = fopen( $this->nomeArquivo , 'w' );
		
		fwrite( $this->abrirArquivo , $this->json );
		
		fclose( $this->abrirArquivo );
	}


    public function getAcesso($senha,$usuario){
        $cont = 0;
        $id = 0;
        foreach($this->Usuarios as $acesso){
            if($acesso["senha"] == $senha){
                if($acesso["usuario"] == $usuario){
                    $cont = $cont +1;
                    $id = $acesso["id"];
                }
            }
        }
        if($cont > 0){
            return "usuario{$id}";
        }
        else{
            return false;
        }
    }
}

?>