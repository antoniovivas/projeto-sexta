<?php 
  include("conexao1/conexao.php");
  include("processologin.php");
  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <title>Vivas Acessórios</title>
    <link rel="shortcut icon" href="img/logo.png">
  </head>
  <body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
              <div class="dropdown">
                <button class="login btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </button>
                <form class="dropdown-menu" aria-labelledby="dropdownMenuButton" method="POST">
                  <div id="drop">
                    <input type="email" name="email" placeholder="Login" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <input type="submit" class="enviar">
                  </div>
                  <a href="registro.php" class="reg">Registre-se</a>
                </form>
              </div>
            </li>
          <li class="nav-item active">
            <a class="nav-link" href="#modelos">Novidades</a>
          </li>
          
        </ul>
      </div>
    </nav>
    <!--HOME-->
    <section id="home">
      <h1 class="text-center">VIVAS ACESSÓRIOS</h1>
      <hr>
      <div class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colecao" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="colecao">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Coleção</a>
              </li>
            </ul>
          </div>
        </div>
        <hr>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/home/c-1.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/home/c-2.jpg" alt="Segundo Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
    </section>

    <!--MODELOS-->
    <section id="modelos">
      <h2 class="novidades text-center">Últimas Novidades</h2><hr>
      <div class="col-12 container-fluid ">
        <ul class="col-12 fotos">
          <li class="col-3"><img src="img/Novidades/IMG_0429 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0431 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0433 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0449.jpg" alt=""></li>
        </ul>
      </div>
      <div class="col-12 ">
        <ul class="col-12 text-center precos">
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
        </ul>
      </div>
      <br>

      <div class="col-12 container-fluid ">
        <ul class="col-12 fotos">
          <li class="col-3"><img src="img/Novidades/IMG_0429 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0431 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0433 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0449.jpg" alt=""></li>
        </ul>
      </div>
      <div class="col-12 ">
        <ul class="col-12 text-center precos">
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
        </ul>
      </div>
      <br>

      <div class="col-12 container-fluid ">
        <ul class="col-12 fotos">
          <li class="col-3 "><img src="img/Novidades/IMG_0429 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0431 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0433 (1).jpg" alt=""></li>
          <li class="col-3 "><img src="img/Novidades/IMG_0449.jpg" alt=""></li>
        </ul>
      </div>
      <div class="col-12 container">
        <ul class="col-12 text-center precos">
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
          <li class="col-3">R$00,00 <a href=""><img id="carrinho" src="img/carrinho.png" alt=""></a></li>
        </ul>
      </div>
      <br>
      
    </section>
    <footer>
    <a href="loginadm.php">TABELA</a>
    </footer>
    <!-- JavaScript (Opcional) -->
    <link rel="stylesheet" href="javascript/script.js">
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>