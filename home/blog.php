<?php

require __DIR__ . "/app/Models/blogModel.php";
$Blog = new blogModel();

session_start();
if (isset($_SESSION['userActive'])) {
	$user = $_SESSION['userActive'];
} else {
	header("Location: ../login.php");
	$_SESSION['message'] = "Você precisa fazer login primeiro!";
	$_SESSION['type'] = 'danger';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Blog | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="./../style/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="blog-page" class="home-page container-fluid d-flex d-lg-grid">
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
			<li class="col px-0 py-2 rounded-3">
				<a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes.svg" alt="configurações" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog-white.svg" alt="blog" /></a>
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

	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0">
		<div class="container-fluid">
			<section id="mensagem-rececao" class="mt-2">
				<h1>Blog</h1>
				<span>Lorem Ipsum is simply dummy text of the printing and typesetting
					industry</span>
			</section>

			<section id="graficos-usuario" class="row p-0 gap-2 gap-sm-3 mb-3">
				<div id="ultimos-artigos" class="col p-0">
					<div class="container row gap-3 p-0">
						<?php
						if ($Blog->showBlogPosts()) :
							foreach ($Blog->showBlogPosts() as $Post) :
						?>

								<figure class="artigo-usuario col-12 col-lg mb-2 my-3">
									<img class="img-fluid m-auto d-flex" src="./../_storage/blogImages/<?= $Post['photo_post']; ?>" alt="Imagem" />
									<figcaption>
										<a href="./artigo.php?id=<?= $Post['id']; ?>" class="ver-mais">Ver mais</a>
									</figcaption>
									<span class="descricao-artigo">Post de <?= $Post['escritor']; ?></span>
								</figure>
						<?php
							endforeach;
						endif;
						?>

					</div>
				</div>
			</section>
		</div>
	</main>

	<script src="./../script/script.js"></script>
</body>

</html>