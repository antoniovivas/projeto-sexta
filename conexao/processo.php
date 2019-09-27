<?php
    include("conexao1/conexao.php");
    //ENVIA DADOS PARA O BD, MAS A CONDIÇÃO NÃO PERMITE SER ENVIADO VAZIO
    if(!empty($_POST['nome']) || !empty($_POST['email']) || !empty($_POST['senha'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        
        
        $sql = "SELECT * FROM cadastro WHERE email = '{$_POST['email']}'";
        $result2 = mysqli_query($conec, $sql);
        $row = mysqli_num_rows($result2);
        if($row > 0){
           echo"<h2>Usuario ja cadastrado!</h2>";
        }else{
            $resultado = "INSERT INTO cadastro (nome, email, senha) VALUES('$nome', '$email', '$senha')";
            $result = mysqli_query($conec, $resultado);
            echo"<h2> Cadastro realizado com sucesso! </h2>";
        }
    }

?>