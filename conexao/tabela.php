<?php
  include("conexao1/conexao.php"); 
  include("processoadm.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tabela</title>
  <link rel="stylesheet" href="css/geral.css">
</head>
<body>
<h1>Lista de Usuários</h1>
<table border='2'>
<?php 
  $resultado2 = mysqli_query ($conec, "SELECT * FROM cadastro");

  echo "<tr>
          <th>Id</th>
          <th>Nome</th>
          <th>E-mail</th>
        </tr>";


  while($dados = mysqli_fetch_array($resultado2)){
  $id2 = $dados['id'];
  $email2 = $dados['email'];
  $nome2 = $dados['nome'];

  echo "<tr>
          <td>$id2</td>   
          <td>$nome2</td> 
          <td>$email2</td> 
        </tr>";


  }
?>
</table>
<a href="tabelabaixar.php">Faça o download!</a>
</body>
</html>