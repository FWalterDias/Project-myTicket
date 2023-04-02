<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyTicket.com</title>
  <link rel="icon" href="../Project-myTicket/Assets/Imgs/logo.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../styles/home.css" />
  <link rel="stylesheet" href="./shows.css" />
</head>

<body>
  <div class="container-global">
    <header class="container-fluid header">
      <div class="logo-area">
        <a href="../main/main.html.php" onclick="voltar()">FreeStreaming.com</a>
        <figure>
          <img src="../../Assets/Imgs/logo.png" alt="" />
        </figure>
      </div>

      <nav>
        <ul class="nav-items">
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalLogin">Login</a></li>
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalSingUp">Sing up</a></li>
          <li><a class="link-nav-items" href="" data-toggle="modal" data-target="#modalFaleConosco">Fale Conosco</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="container-fluid container-shows">
        <div class="container-title">
          <a href="../../pages/main/main.html.php">
            <button>Back</button>
          </a>
          <h1>Shows</h1>
        </div>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_1.jpg" alt="Imagem de capa do card" />
          <div class="card-body billie">
            <h5>BILLIE EILISH</h5>
          </div>
        </article>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_2.jpg" alt="Imagem de capa do card" />
          <div class="card-body beyonce">
            <h5>BEYONCÉ</h5>
          </div>
        </article>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_3.jpg" alt="Imagem de capa do card" />
          <div class="card-body rosalia">
            <h5>ROSALÍA</h5>
          </div>
        </article>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_4.jpg" alt="Imagem de capa do card" />
          <div class="card-body rbd">
            <h5>R B D</h5>
          </div>
        </article>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_5.jpg" alt="Imagem de capa do card" />
          <div class="card-body blackpink">
            <h5>BLACKPINK</h5>
          </div>
        </article>

        <article class="card card-artista">
          <img class="card-img-top" src="../../Assets/Imgs/Artistas/ret_6.jpg" alt="Imagem de capa do card" />
          <div class="card-body taylor">
            <h5>TYLOR SWIFT</h5>
          </div>
        </article>
      </div>
    </main>
  </div>

  <?PHP include('../modal/modal.html.php') ?>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>