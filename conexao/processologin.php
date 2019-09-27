<?php
    include("conexao1/conexao.php");
    //SELECIONA CONTEUDO DO BANCO DE DADOS PARA EFETUAR LOGIN
    if(!empty($_POST['email']) || !empty($_POST['senha'])) {

        $sql = "SELECT * FROM cadastro WHERE email = '{$_POST['email']}' and senha = '{$_POST['senha']}'";
        $result2 = mysqli_query($conec, $sql);
        $row = mysqli_num_rows($result2);
        if($row > 0){
           echo"login efetuado com sucesso";
        }else{
            header('Location: registro.php');
        }
    }
?>