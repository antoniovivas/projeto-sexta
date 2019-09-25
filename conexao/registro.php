<?php
if(empty($email)){
    echo "email invalido";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="nome" placeHolder="Nome" required>
        <input type="email" name="email" placeholder="exemplo@hotmail.com" required>
        <input type="password" name="senha" placeholder="senha" required>
        <input type="submit">
    </form>
</body>
</html>