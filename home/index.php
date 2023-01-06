<?php
session_start();
if (isset($_SESSION['userActive'])) {
  $user = $_SESSION['userActive'];
}
require __DIR__ . "/app/Models/produtosModel.php";
require __DIR__ . "/../_app/boot/helpers.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Foregon</title>
  <link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./../style/reset.css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./../style/style.css" />
  <link rel="stylesheet" href="./../style/responsive.css" />

</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body class="home-page _loc--index container-fluid d-flex d-lg-grid" onload="setProgressVal(600, 1000)">
  <nav id="menu-lateral" class="navbar col sticky-bottom py-2 px-4">
    <div class="logo d-none d-lg-flex">
      <a href="./" class="logo d-none d-lg-flex">
        <img src="./../image/Minha-bufunfa-pequeno.svg" alt="Minha Bufunfa" />
      </a>
    </div>
    <ul class="navegacao row p-0 px-sm-4 mb-0 col-12 gap-2 justify-content-between">
      <li class="col px-0 py-2 rounded-3" id="vizualizando">
        <a href="./index.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/home-white.svg" alt="home" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3">
        <a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos.svg" alt="products" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3">
        <a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes.svg" alt="configurações" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3">
        <a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog.svg" alt="blog" /></a>
      </li>
      <li class="logout col px-0 py-2">
        <a href="./logout.php">
          <button><img class=" img-fluid m-auto d-flex" src="./../image/icones-do-menu/logout.svg" alt="logout" /></button>
        </a>
      </li>
    </ul>
  </nav>

  <main id="conteudo-principal" class="col p-3 p-sm-4 pb-5  mb-3 mb-lg-0">
    <div class="container-fluid">
      <section id="mensagem-rececao">
        <h1>Que bom vê-lo novamente</h1>
        <span class="nome-do-usuario"><?= $user; ?></span>
      </section>

      <section id="graficos-usuario" class="row p-0 gap-2 gap-sm-3 mt-4 mb-3">
        <div id="score" class="area-de-conteudo p-2 p-sm-3 col-5 col-lg-4 p-0 gap-2">
          <h3 class="titulo">Seu score</h3>
          <div class="progress-circle w-100 d-flex">
            <div class="skill w-75">
              <div class="outer">
                <div class="inner">
                  <div id="numbers">
                    <h4></h4>
                    <h5></h5>
                  </div>
                </div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                <defs>
                  <linearGradient id="GradientColor" gradientTransform="rotate(60)">
                    <stop offset="0%" stop-color="#B2FFD9" />

                    <stop offset="100%" stop-color="#00CC66" />
                  </linearGradient>
                </defs>
                <circle cx="80" cy="80" r="70" />
              </svg>
            </div>
          </div>
          <span class="descricao-score">Boa avaliação</span>
          <button class="informacao-sobre"></button>
        </div>

        <div id="ultimos-artigos" class="area-de-conteudo p-2 p-sm-3 col p-0">
          <h3 class="titulo">Últimos artigos</h3>

          <div class="container row gap-3 p-0">
            <figure class="artigo-usuario col-12 col-lg mb-2 my-3">
              <img class="img-fluid m-auto d-flex" src="./../arquivos-temporarios/artigo-img.png" alt="Imagem" />
              <figcaption>
                <a href="./artigo.php" class="ver-mais">Ver mais</a>
              </figcaption>
              <span class="descricao-artigo">Post de lorem</span>
            </figure>

            <figure class="artigo-usuario d-none d-lg-block col-12 col-lg mb-2 my-3">
              <img class="img-fluid m-auto d-flex" src="./../arquivos-temporarios/artigo-img.png" alt="Imagem" />
              <figcaption>
                <a href="./artigo.php" class="ver-mais">Ver mais</a>
              </figcaption>
              <span class="descricao-artigo">Post de lorem</span>
            </figure>
          </div>
        </div>
      </section>

      <section id="product-area" class="product-area area-de-conteudo p-2 p-sm-3 mt-4" style="padding-top: 1rem !important;">
        <h3 class="titulo">Nossos produtos</h3>


        <div class="products container-fluid pb-3 px-0 mt-4 col-lg-11">

          <ul class="row gap-3 gap-sm-2 gap-md-3 col-12 col-xs-8 col-sm-12 col-lg-9 justify-content-center row-cols-3 p-sm-3">


            <?php
            $produtos = new produtosModel();
            foreach ($produtos->findProducts(true) as $produto) :
            ?>
              <!-- Item - Cartão produto -->
              <li class="card col-10 col-sm rounded-1 row">
                <figure class="p-0 pt-3 pb-1 px-sm-0 px-lg-3">
                  <img src="./../_storage/produtos/<?= $produto['foto_produto']; ?>" alt="Minha Bufunfa" class="card__image img-fluid w-50" />
                  <figcaption class="container">
                    <h4 class="card__title"><?= $produto['nome_produto']; ?></h4>
                    <span class="card__subtitle">Visa</span>
                    <div class="classificado">
                      <ul class="estrelas col-8 h-100">
                        <li class="estrelar estrelado col"></li>
                        <li class="estrelar estrelado col"></li>
                        <li class="estrelar estrelado col"></li>
                        <li class="estrelar estrelado col"></li>
                        <li class="estrelar col"></li>
                      </ul>
                      <span class="classificacao-geral col-2">4,2</span>
                    </div>
                    <p class="card__description">
                      <?= str_limit_words($produto['descricao_produto'], 10); ?>
                    </p>
                    <a href="./produto.php?id=<?= $produto['id']; ?>" class="btn-primary btn btn-primary">
                      Adquirir
                    </a>
                  </figcaption>
                </figure>
              </li>
            <?php
            endforeach;
            ?>
          </ul>
        </div>




        <button class="informacao-sobre"></button>
      </section>
    </div>
  </main>

  <script src="./../script/script.js"></script>
</body>

</html>