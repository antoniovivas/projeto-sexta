<?php
    include("conexao1/conexao.php");
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    /*echo "email: $email <br>";
    echo "senha: $senha";*/
    $resultado = "INSERT INTO cadastro (nome, email, senha) VALUES('$nome', '$email', '$senha')";
    $result = mysqli_query($conec, $resultado);
?>