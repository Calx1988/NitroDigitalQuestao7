<?php
    require_once 'autoload.php';
    
    $usuario1= new Usuario();
    $usuario1->preencherDados('Fulano de Tal', '51963852741', 'Caixa');
    echo $usuario1->getNome();
    echo $usuario1->getTelefone();
    
?>

<html lang="pt-br">
    <meta charset="udf-8">
    <head>Cadastro de Usuário</head>



</html>
