<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "antonio";
    
    $conec = mysqli_connect($host, $usuario, $senha, $bd);

    if($conec->connect_errno)
        echo "falha na conexão: (".$conec->connect_errno.") ".$conec->connect_error;
?>