<?php
    include("conexao1/conexao.php");
    //SELECIONA CONTEUDO DO BANCO DE DADOS PARA EFETUAR LOGIN
    if(!empty($_POST['email']) || !empty($_POST['senha'])) {
        
        

        $sql = "SELECT * FROM adm WHERE email = '{$_POST['email']}' and senha = '{$_POST['senha']}'";
        $result3 = mysqli_query($conec, $sql);
        $row = mysqli_num_rows($result3);
        if($row > 0){
           header('Location: tabela.php');
        }
    }

    
    


?>