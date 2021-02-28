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


    public function preencherDados($nome, $telefone, $nivel){
        $this->nome=$nome;
        $this->telefone=$telefone;
        $novaPermissao=new Permissao();
        $novaPermissao->setNivel($nivel);
    }
    function cadastrar(){
        if(empty($this->nome)){
            throw new Exception("Nome deve ser preenchido!");
        }else{
            echo $this->getNome();
        }
/*

        // ESSES TRY E CATCH DEVEM ESTAR NO LOCAL ERRADO. PRECISO ESTUDAR ISSO!

        try{
            $this->cadastrar();
            echo $this->getNome;
        }
        catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }
*/
        if(empty($this->telefone)){
            throw new Exception("Número de telefone deve ser preenchido!");
        }else{
            echo $this->getTelefone();
        }
/*        
        try{
            $this->cadastrar();
            echo $this->getTelefone;
        }
        catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }
*/        
                   
/*
        // COMO VALIDAR O NIVEL? PRECISO REFERENCIAR O GETNIVEL() DO OBJ $NOVAPERMISSAO. PENSANDO...

        if(empty($novaPermissao->getNivel())){
            throw new Exception("Nível deve ser preenchido!");
        }else{
            echo $this->getTelefone();
        }
*/
        
    }
        

}

?>
