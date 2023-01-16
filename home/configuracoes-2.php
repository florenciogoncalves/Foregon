<?php
require_once __DIR__ . "/../_app/core/Session.php";
require __DIR__ . "/app/Models/UserModel.php";
include __DIR__ . "/app/Models/User2Model.php";


$Session = new Session();
$User = new UserModel();
$PhotoModel = new User2Model();

if ($Session->has('userActive')) {
	$user = $_SESSION['userActive'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Configurações | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="./../style/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="conf-page" class="home-page container-fluid d-flex d-lg-grid" onload="setProgressVal(600, 1000)">
	<nav id="menu-lateral" class="navbar col sticky-bottom py-2 px-4">
		<div class="logo d-none d-lg-flex">
			<a href="./" class="logo d-none d-lg-flex">
				<img src="./../image/Minha-bufunfa-pequeno.svg" alt="Minha Bufunfa" />
			</a>
		</div>
		<ul class="navegacao row p-0 px-sm-4 mb-0 col-12 gap-2 justify-content-between">
			<li class="col px-0 py-2 rounded-3">
				<a href="./index.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/home.svg" alt="home" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos.svg" alt="products" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes-white.svg" alt="configurações" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog.svg" alt="blog" /></a>
			</li>
			<li class="logout col px-0 py-2">
				<button>
					<a href="./logout.php">
						<img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/logout.svg" alt="logout" />
					</a>
				</button>
			</li>
		</ul>
	</nav>

	<?php
	$infoUser = $User->getUserInfo($user);
	$photo = $PhotoModel->getUserPhoto($user);
	?>

	<main id="conteudo-principal" class="col d-flex p-3 p-sm-4 pb-5 mb-3 mb-lg-0">
		<form class="user-configurations">
			<img src="./../_storage/users/<?= $photo->photo; ?>" class="__user-image mb-2">
			<fieldset class="data-container">
				<h2 class="__user-name"><?= $infoUser->nome; ?> </h2>
				<span class="__user-data">Email: <span name="user-email"><?= $infoUser->email; ?></span></span>
				<span class="__user-data">Senha: <span name="user-password"><?= $infoUser->senha; ?></span></span>
				<span class="__user-data">CPF: <span name="user-cpf"><?= $infoUser->cpf; ?></span></span>
			</fieldset>

			<button class="btn btn-primary mt-4" type="button">Editar</button>
		</form>
	</main>

	<script src="./../script/script.js"></script>
	<script src="./../script/editar-configuracoes.js"></script>
</body>

</html>