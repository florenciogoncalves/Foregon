<?php
session_start();
require_once __DIR__ . "/app/Models/Produtos.php";
require_once __DIR__ . "/../_app/boot/helpers.php";

$Produtos = new produtosModel();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produtos | Foregon</title>
  <link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./../style/reset.css" />
  <!-- CSS only -->
  <link href="./../style/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./../style/style.css" />
  <link rel="stylesheet" href="./../style/responsive.css" />

  <style>
    .img_size {
      width: 233px;
      height: 146px;
    }
  </style>

</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="products-page" class="home-page __admin padrao_produtos container-fluid d-flex d-lg-grid">
  <nav id="menu-lateral" class="navbar col sticky-bottom py-2 px-4">
    <div class="logo d-none d-lg-flex">
      <img src="./../image/Minha-bufunfa-pequeno.svg" alt="Minha Bufunfa" />
    </div>
    <ul class="navegacao row p-0 px-sm-4 mb-0 col-12 gap-2 justify-content-between">
      <li class="col px-0 py-2 rounded-3">
        <a href="./home.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/home.svg" alt="home" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3" id="vizualizando">
        <a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos-white.svg" alt="products" /></a>
      </li>

      <li class="col px-0 py-2 rounded-3">
        <a href="./clientes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/cliente.svg" alt="Clientes" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3">
        <a href="./consultas.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/consulta.svg" alt="Consulta" /></a>
      </li>

      <li class="col px-0 py-2 rounded-3">
        <a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes.svg" alt="configurações" /></a>
      </li>
      <li class="col px-0 py-2 rounded-3">
        <a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog.svg" alt="blog" /></a>
      </li>
      <li class="logout col px-0 py-2">
        <button>
          <img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/logout.svg" alt="logout" />
        </button>
      </li>
    </ul>
  </nav>

  <main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0">
    <section id="product-area" class="product-area p-2 p-sm-3">
      <section id="mensagem-rececao" class="mb-4 __mensagem-rececao">
        <h1 style="font-size: 1.5rem; font-weight: 700 !important">
          Produtos
        </h1>
        <button class="btn-add-produto btn btn-primary">
          Adicionar produto
        </button>
      </section>

      <?php
      if (isset($_SESSION['message'])) :
      ?>
        <div class="alert alert-<?= $_SESSION['type']; ?> text-center">
          <?= $_SESSION['message'];
          unset($_SESSION['message']); ?>
        </div>

      <?php
      endif;
      ?>

      <?php
      if (!$Produtos->showProducts(true)) {
        echo $_SESSION['emptyMessage'];
      } else {
        unset($_SESSION['emptyMessage']);
      }
      ?>

      <div class="container-fluid px-0">
        <h3 class="titulo">Em alta <a href="">Ver todos</a></h3>

        <div class="products container-fluid pb-3 px-0 mt-4 col-lg-11">
          <ul class="row gap-3 gap-sm-2 gap-md-3 col-12 justify-content-center row-cols-3">

            <?php

            if ($Produtos->showProducts()) :
              foreach ($Produtos->showProducts() as $produto) :

            ?>

                <!-- Item - Cartão produto -->
                <li class="card col-10 col-sm rounded-1 row">
                  <figure class="p-0 pt-3 px-sm-0 px-lg-3 pb-1">
                    <img src="./../_storage/produtos/<?= $produto['foto_produto']; ?>" alt="Minha Bufunfa" class="card__image img-fluid w-50" />
                    <figcaption class="container">
                      <h4 class="card__title"><?= $produto['nome_produto']; ?></h4>
                      <span>Avalie:</span>
                      <div class="classificado classificar">
                        <ul class="estrelas col-8 h-100">
                          <li class="estrelar col"></li>
                          <li class="estrelar col"></li>
                          <li class="estrelar col"></li>
                          <li class="estrelar col"></li>
                          <li class="estrelar col"></li>
                        </ul>
                      </div>
                      <p style="color: black">
                        <?= str_limit_words($produto['descricao_produto'], 16); ?>
                      </p>
                      <a href="./produto.php?id=<?= $produto['id']; ?>" class="btn-primary btn btn-primary">
                        Adquirir
                      </a>

                    </figcaption>

                  </figure>
                </li>
            <?php
              endforeach;
            else :
              $_SESSION['emptyMessage'] = "<div class='alert alert-info w-100 text-center'><b class='info-text'>Nenhum produto foi adicionado!</b></div>";
            endif;

            ?>
          </ul>
        </div>
      </div>

    </section>



    <section id="todos-produtos" class="product-area p-2 p-sm-3 mt-4">
      <h3 class="titulo">Todos os produtos <a href="">Ver todos</a></h3>

      <div class="products container-fluid pb-3 px-0 mt-4 col-lg-11">
        <ul class="row gap-3 gap-sm-2 gap-md-3 col-12 justify-content-center row-cols-3">
          <!-- Item - Cartão produto -->

          <?php
          if ($Produtos->showProducts(true)) :
            foreach ($Produtos->showProducts(true) as $produtos) :
          ?>

              <li class="card col-10 col-sm rounded-1 row">
                <figure class="p-0 pt-3 px-sm-0 px-lg-3 pb-1">
                  <img src="./../_storage/produtos/<?= $produtos['foto_produto']; ?>" alt="Minha Bufunfa" class="card__image img-fluid w-50" />
                  <figcaption class="container">
                    <h4 class="card__title"><?= $produtos['nome_produto']; ?><br></h4>
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
                    <p style="color: black">
                      <?= str_limit_words($produtos['descricao_produto'], 16); ?>
                    </p>
                    <a href="./produto.php?id=<?= $produtos['id']; ?>" class="btn-primary btn btn-primary">
                      Adquirir
                    </a>
                  </figcaption>
                </figure>
              </li>

          <?php
            endforeach;
          endif;
          ?>
        </ul>
      </div>
    </section>
  </main>

  <div id="modal-editar-produto">
    <div class="modal__container row m-auto">
      <form id="card-produto" class="area-de-conteudo px-3 py-4 col-12 m-auto" action="./app/Controllers/ProdutosController.php" method="post" enctype="multipart/form-data" novalidate>
        <figure class="p-0 m-0 row">
          <div class="img col-5 px-0">
            <img src="./../image/editar-produto-imagem.png" alt="Minha Bufunfa" class="img-fluid" id="preview_image" />
            <img src="./../image/broken-image.svg" alt="broken" class="broken" />

            <input id="imagem-produto" type="file" accept="image/*" name="produto-foto" />
          </div>
          <figcaption class="container col-7 px-3">
            <fieldset class="row mb-2">
              <label class="valor-label px-0">Nome do produto</label>
              <input type="text" name="nome-produto" id="nome-produto" placeholder="Lorem ipsum" required />
            </fieldset>

            <fieldset class="row mb-2">
              <label class="p-0 valor-label" for="descricao">Descrição</label>
              <textarea name="descricao" id="descricao" rows="6" required placeholder="Lorem ipsum dolor sit amet. Non ullam Quis eos quisquam voluptatem quo molestiae quam ut molestiae doloribus aut animi culpa ut galisum quia ut obcaecati quia. Qui porro consequatur sed minima cupiditate aut aliquam labore ut asperiores exercitationem"></textarea>
            </fieldset>

            <fieldset class="row mb-2">
              <label class="valor-label px-0">Valor:</label>
              <input class="w-75" type="text" name="valor" id="valor" placeholder="Lorem ipsum" required />
            </fieldset>

            <fieldset class="gap-2 row mt-auto">
              <button type="reset" class="btn-primary btn btn-primary btn-editar-produto">
                Cancelar
              </button>
              <button class="btn btn-primary" type="submit">Salvar</button>
            </fieldset>
          </figcaption>
        </figure>
      </form>
    </div>
  </div>

  <script src="./../script/script.js"></script>
</body>

</html>