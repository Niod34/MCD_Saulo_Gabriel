<?php

require 'conexao.php';
    
    $Produto = $_POST ["Produto"];
    $Quantidade = $_POST ["Quantidade"];
    $preco = $_POST ["preco"];
    $sql=$pdo->prepare( "INSERT INTO est(Produto,Quantidade,preco) VALUES ( :Produto, :Quatidade, :Preco)");
    $sql->bindvalue(':Produto', $Produto);
    $sql->bindvalue(':Quatidade', $Quantidade);
    $sql->bindvalue(':Preco', $preco);

    $sql->execute();

    echo "Produto Cadastrado";
?>