<?php
    include("conexao1/conexao.php");

    if(!empty($_POST['pesquisa'])) {
        $pesquisa = $_POST['pesquisa'];
        $result = "SELECT FROM tarefas WHERE tarefa  LIKE '$pesquisa'";
        $resultadotaref = mysqli_query($conec, $result);

        while($rows = mysqli_fetch_array($resultadotaref)){
            $id3 = $dados['id'];
            $tarefa = $dados['tarefa'];
            $prazo = $dados['prazo'];
        }
               
    }
?>