<?php
    include("conexao1/conexao.php");
    include("processoadm.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADM</title>
    <link rel="stylesheet" href="css/geral.css">
</head>
<body>
    <h1>Digite Email e Senha do Administrador!</h1>
    <form action="" method="POST">
        Nome: <input type="text" name="nome"> <br> <br>
        E-mail: <input type="email" name="email"> <br> <br>
        Senha: <input type="password" name="senha">
                <input type="submit">
    </form>
    <a href="tabela.php"></a>
</body>
</html>