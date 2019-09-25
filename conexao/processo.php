<?php

    include_once("conexao1/conexao.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    /*echo "email: $email <br>";
    echo "senha: $senha";*/
    $resultado = "INSERT INTO cadastro (email, senha) VALUES('$email', '$senha')";
    $result = mysqli_query($conec, $resultado);
?>