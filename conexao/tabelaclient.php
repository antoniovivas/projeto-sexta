<?php
  include("conexao1/conexao.php");
  include("deleta.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tarefas</title>
  <link rel="stylesheet" href="css/tabclient.css">
</head>
<body>
<!--FORM TABELA CLIENTE-->
  <form action="" method="POST">
      Tarefa: <input type="text" name="tarefa" placeHolder=" Digite a tarefa" > <br> <br>
      Prazo: <input type="date" name="prazo" placeholder="dd/mm/aa" >
      <input type="submit"> 
  </form>
  <br>
  <a href="index.php">Pagina inicial</a><hr>

  <!--FORM PESQUISA-->
  <form  method="POST" action=""> 
    <input type="text" name="pesquisa" placeholder="Digite nome da tarefa">
    <input type="submit" value="Pesquisar">
  </form>
  <br>
  <!--FORM DELETA-->
  <form action="" method="POST"> 
    <input type="text" name="id" placeholder="Digite o Id da tarefa">
    <input type="submit" value="Deletar">
  </form>
  <br>
    <h1 class="text-center">Lista de Tarefas</h1>
    

<!--PROCESSO BUSCA DE DADOS-->
    <div id="geral">
      
        </table>
        
        <!--PROCESSO DE ENVIO DE DADOS-->
        <?php
          if(!empty($_POST['tarefa']) || !empty($_POST['prazo'])) {
              $tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_STRING);
              $prazo = filter_input(INPUT_POST, 'prazo', FILTER_SANITIZE_STRING);
              
              $resultado = "INSERT INTO tarefas (tarefa, prazo) VALUES('$tarefa', '$prazo')";
              $result = mysqli_query($conec, $resultado);
        }
        ?>

          <!--TABELA CLIENTE-->
      <div>
        <table border='2'>
        <?php 
          $resultado2 = mysqli_query ($conec, "SELECT * FROM tarefas");

          echo "<tr>
                  <th>Id</th>
                  <th>Tarefa</th>
                  <th>Prazo</th>
                </tr>"
                ;


          while($dados = mysqli_fetch_array($resultado2)){
          $id3 = $dados['id'];
          $tarefa = $dados['tarefa'];
          $prazo = $dados['prazo'];

          echo "<tr>
                  <td>$id3</td>   
                  <td>$tarefa</td> 
                  <td>$prazo</td> 
                </tr>";
          }
        ?>
        </table>
        </div>
        <div>
      <table border="2">
        <?php 
          //SELECIONA CONTEUDO DO BANCO DE DADOS
          if(!empty($_POST['pesquisa'])) {

            $sql = "SELECT * FROM tarefas WHERE tarefa LIKE '%{$_POST['pesquisa']}%'";
            $result3 = mysqli_query($conec, $sql);
            $row = mysqli_num_rows($result3);
            if($row > 0){
              echo "<tr>
                  <th>Id</th>
                  <th>Tarefa</th>
                  <th>Prazo</th>
                </tr>"
                ;
              $resultado2 = mysqli_query ($conec, "SELECT * FROM tarefas WHERE tarefa LIKE '%{$_POST['pesquisa']}%'");
              echo"<h1> Tarefas Encontradas </h1>";
              while($dados = mysqli_fetch_array($resultado2)){
                $id2 = $dados['id'];
                $tarefa2 = $dados['tarefa'];
                $prazo2 = $dados['prazo'];
                
                echo"<tr>
                <td>$id2</td>   
                <td>$tarefa2</td> 
                <td>$prazo2</td> 
                </tr>";}
              }else{
                echo"<h2>Tarefa não encontrada!</h2>";}}
        ?>
    </div>
  </div>
</body>
</html>