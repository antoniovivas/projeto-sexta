<?php
    include("conexao1/conexao.php");

    if(!empty($_POST['pesquisa'])) {
        $sql = "SELECT * FROM tarefas WHERE tarefa = '{$_POST['pesquisa']}'";
    }
?>