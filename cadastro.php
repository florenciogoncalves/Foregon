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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
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
      <h1 class="mt-1 mt-lg-0">Criar minha conta</h1>
      <span>Insira abaixo seus dados de contato abaixo para que possamos entrar
        em contato:</span>
      <form class="needs-validation mt-4" method="POST" action="./_app/controllers/cadastroController.php" novalidate>
        <!-- Entranda de senha retalhada -->
        <fieldset id="campos-cadastro">
          <input type="text" name="nome" placeholder="Nome" class="form-control" required />
          <input type="email" name="email" placeholder="E-mail" class="form-control" required />
          <input type="tel" name="celular" placeholder="Celular" class="form-control" required />
          <fieldset>
            <input type="password" name="senha" id="password" placeholder="Senha" class="form-control" required minlength="6" />
            <div class="invalid-feedback">A senha deve ter um mínimo de 6 caracteres</div>
            <input type="checkbox" class="mostrar-senha" />
          </fieldset>
          <fieldset>
            <input id="confirmar-password" type="password" class="form-control" placeholder="Confirmação de senha" required minlength="6" />
            <input type="checkbox" class="mostrar-senha" />
          </fieldset>
        </fieldset>

        <button id="btn_cadastrar" class="btn btn-primary mt-4" name="submit" type="submit">Efectuar login</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./script/script.js"></script>
  <script src="./script/validacoes_formularios.js"></script>
</body>

</html>