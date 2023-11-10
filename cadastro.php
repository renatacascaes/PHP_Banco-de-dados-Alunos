<?php
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento=$_POST['data_nascimento'];
    $senha = $_POST['senha'];

    try{
    $sql = "insert into cliente (nome,email,dataNascimento,senha) values 
    ('$nome','$email','$dataNascimento','$senha')";
    mysqli_query($conexao,$sql);
    print "<script>alert('Cadastrado com sucesso!')</script>";

    }catch(mysqli_sql_exception $e){
        
    }
    

    

    echo "Cadastrado com sucesso.";


?>