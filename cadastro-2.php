<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastrar | Foregon</title>
  <link rel="shortcut icon" href="./image/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./style/reset.css" />
  <!-- CSS only -->
  <link href="./style/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/responsive.css" />
</head>

<body id="cadastro" class="iniciar-sessao container-fluid">
  <header class="main-header row pb-3">
    <img class="main-header__logo img-fluid" src="./image/logo-minha-bufunfa.svg" alt="Minha Bufunfa - logo" />
  </header>

  <!-- Conteúdo da direita -->
  <div class="margem-topo h-100 col-md-10 col-lg-7 d-flex m-auto justify-content-center p-0">
    <div class="lado-direito col-sm-10 col-lg-8 row p-4 p-sm-5 pb-lg-4 pt-lg-4 mt-4 mt-lg-auto">
      <img class="img-fluid w-25 mt-4 mt-lg-0" src="./image/favicon.svg" alt="minha-bufunfa" />
      <h1 class="mt-1 mt-lg-2">Escolher foto</h1>
      <span class="w-75 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. L</span>
      <form class="needs-validation mt-4" method="POST" action="./_app/controllers/cadastroController.php" novalidate>
        <!-- Entranda de senha retalhada -->

        <div id="preview_image" class="upload-image _set-in--bg">
          <input type="file" name="foto-de-perfil" id="imagem-produto" class="upload-image__input" accept="image/*">
        </div>

        <button id="btn_cadastrar" class="btn btn-primary mt-4" name="submit" type="submit">Prosseguir</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./script/script.js"></script>
  <script src="./script/validacoes_formularios.js"></script>
</body>

</html>