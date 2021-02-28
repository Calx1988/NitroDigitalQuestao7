<?php

class Usuario{

    private $telefone;
    private $data_cadastro;
    private $nome;


    // getters

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function getDataCadastro(){
        return $this->data_cadastro;
    }
    
    public function getNome(){
        return $this->nome;
    }


    function preencherDados($nome, $telefone, $nivel){
        $this->nome=$nome;
        $this->telefone=$telefone;
        $novaPermissao=new Permissao();
        $novaPermissao->setNivel($nivel);
    }
    function cadastrar(){
        if(is_empty($nome) || p)
    }
   

    

}

?>