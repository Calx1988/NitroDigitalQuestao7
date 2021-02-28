<?php
    function __autoload($nomeClasse){
        if(file_exists($nomeClasse . '.php')){
            require_once $nomeClasse . '.php';
            }
    }
?>