<?php
    require_once 'autoload.php';
    
    $usuario1= new Usuario();
    $usuario1->preencherDados('Fulano de Tal', '51963852741', 'Caixa');
    echo $usuario1->cadastrar();
?>
