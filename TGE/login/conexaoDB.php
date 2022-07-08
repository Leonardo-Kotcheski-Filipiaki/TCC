<?php
    $host = 'localhost:33';
    $dbNome_Usuario = 'root';
    $dbpassword = '';
    $dbName = 'cadastro';
    $conexao = mysqli_connect($host, $dbNome_Usuario, $dbpassword, $dbName) or die("Não foi possivel conectar");

    //conexão com o banco de dados

    // if($conexao -> connect_errno){
    //     echo "erro";
    // }else{
    //     echo "Sucesso!";
    // }

    //teste de conexão com o banco de dados;

?>