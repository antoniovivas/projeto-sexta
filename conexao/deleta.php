<?php
    include("conexao1/conexao.php");

    //Deleta a linha do Id escrito
    if(!empty($_POST['id'])) {

        $sql = "DELETE FROM tarefas WHERE id = '{$_POST['id']}'";
        $result3 = mysqli_query($conec, $sql);
    }

    
    


?>