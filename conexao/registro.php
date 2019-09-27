<?php
    include("processo.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/geral.css">
</head>
<body>
    <form action="" method="POST">
        Nome: <input type="text" name="nome" placeHolder=" Digite seu nome" > <br> <br>
        E-mail: <input type="email" name="email" placeholder="exemplo@hotmail.com" > <br> <br>
        Senha: <input type="password" name="senha" placeholder="senha" > <br>
        <input type="submit">
    </form>
    <a href="index.php">Pagina inicial</a>
</body>
</html>