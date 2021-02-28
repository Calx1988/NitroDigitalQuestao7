<?php

class Permissao{
    protected $nivel;

    public function setNivel($nivel){
        $this->nivel=$nivel;
        echo $nivel;
    }

    public function getNivel(){
        return $this->nivel;
    }

}

?>