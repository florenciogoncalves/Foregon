<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Foregon</title>
  <link rel="shortcut icon" href="./image/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./style/reset.css" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/responsive.css" />
</head>

<body id="login" class="iniciar-sessao container-fluid d-grid" style="max-height: 100% !important">
  <header class="main-header row pb-3">
    <img class="main-header__logo img-fluid" src="./image/logo-minha-bufunfa.svg" alt="Minha Bufunfa - logo" />
  </header>

  <main class="container-fluid d-flex">
    <div class="row col-md-12">


      <!-- Imagem a esquerda -->
      <img class="col-lg-5 d-none d-lg-block h-100 mh-100" src="./image/background-login.png" alt="Minha Bufunfa" />

      <!-- Conteúdo da direita -->
      <div class="col-md-9 col-lg-7 m-auto  mb-lg-auto justify-content-center p-0 my-lg-auto" style="padding-top: $header-height !important">

        <div class="lado-direito col-sm-10 col-lg-9 h-50 row p-4 p-sm-5 pb-lg-4 pt-lg-4">

          <img class="img-fluid w-25 mt-3 mt-lg-0" src="./image/favicon.svg" alt="minha-bufunfa" />
          <h1 class="mt-1 mt-lg-0">Acesse sua conta</h1>
          <span class="w-100 d-block">Lorem ipsum dolor sit amet, consectetur adipis cing elit
            consectetur adipis cing elit.</span>
          <form class="needs-validation row p-0" method="POST" action="./_app/controllers/loginController.php" novalidate>

            <?php
            if (isset($_SESSION['message'])) :
            ?>
              <div class="alert alert-danger text-center">
                <?= $_SESSION['message'];
                unset($_SESSION['message']); ?>
              </div>

            <?php
            endif;
            ?>
            <div class="mt-3 mb-3 form-group">
              <input type="email" name="email" id="email" placeholder="Endereço de email" class="form-control form-control-md" required value="" />
            </div>
            <div class="mb-2 form-group">
              <input type="password" name="password" id="password" placeholder="********" class="form-control form-control-md" required maxlength="8"/>
            </div>

            <div class="mb-3 d-sm-flex justify-content-between form-group form-check">
              <label for="salvar-login"><input type="checkbox" name="salvar-login" class="form-check-input" id="salvar-login" />Salvar login</label>
              <a class="d-none d-sm-flex _text--underline" href="./esqueceu-a-senha.html">Esqueci minha senha</a>
            </div>

            <button type="submit" class="btn btn-md btn-primary m-auto mt-sm-2" name="submit" type="submit">
              Efectuar login
            </button>
          </form>

          <span class="d-none d-sm-grid mt-3 mb-2 text-center">Não tem uma conta? Cadastre-se gratuitamente.</span>

          <a class="d-flex mt-3 p-0 col-auto mx-auto _text--underline" href="./cadastro.php">Criar minha conta</a>
        </div>
      </div>
      <a class="d-lg-none m-auto mt-3 mb-2 d-flex col-auto start-50 translate-middle _text--underline" href="./esqueceu-a-senha.html" style="
            font-size: 0.75rem !important;
            position: absolute;
            bottom: 2rem;
            width: max-content;
          ">Esqueci minha senha</a>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./script/script.js"></script>
  <script src="./script/validacoes_formularios.js"></script>
</body>

</html>