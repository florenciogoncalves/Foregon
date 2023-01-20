<?php

require __DIR__ . "/app/Models/blogModel.php";
include_once __DIR__ . "/../_app/boot/helpers.php";

$Blog = new blogModel();
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = 1;
}

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
	<title>Artigo | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="./../style/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="artigo-page" class="home-page container-fluid d-flex d-lg-grid">
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

	<?php
	$post = $Blog->getPost($id);
	?>

	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0 container-fluid">
		<div class="row">
			<section id="leia-artigo" class="col-12 col-lg-9 p-0">
				<figure>
					<img class="artigo-img img-fluid" src="./../_storage/blogImages/<?= $post->photo_post; ?>" alt="Imagem do artigo" />
					<figcaption>
						<h3 class="nome"><?= $post->titulo; ?></h3>
						<a href="./autor.php" class="__author"><?= $post->escritor; ?></a>
						<span class="publicado-em">Publicado<?= formatDate(str_replace('-', '/', $post->created_at)); ?> ás <?= formatHours($post->created_at); ?></span>
					</figcaption>
				</figure>

				<p class="artigo-mensagem px-2 p-lg-0">
					<?= $post->texto; ?>
				</p>

				<div class="saiba-tambem">
					<div class="referencia"><span class="_texto--verde">Referencia: </span><?= $post->referencia; ?></div>
					<div class="artigo-interacao">

						<!-- Setar 'true' ou 'false' no value do botão a seguir, ele define o estado do botão, se sim ou não curtido -->
						<!-- <button class="artigo-reacao" value="false" onclick="this.value == 'false' ? this.value = 'true' : this.value = 'false'">-->
						<button class="artigo-reacao" id="likeBtn" value="<?= $post->id; ?>">

							<?= $post->likes; ?>
						</button>

						<button class="artigo-partilhas">0</button>
					</div>
				</div>
			</section>

			<div class="back-btn col-1 d-none mx-auto d-lg-flex">
				<button onclick="window.history.back()" type="button"></button>
			</div>

			<section id="graficos-usuario" class="row col-12 col-lg-9 p-0 gap-2 gap-sm-3 mb-3 mt-5">
				<div id="ultimos-artigos" class="col p-0">
					<h3 class="titulo mb-2">Leia também do mesmo autor</h3>
					<div class="container row gap-3 p-0">

						<?php
						if ($Blog->getMorePosts($post->escritor, $id)) :
							foreach ($Blog->getMorePosts($post->escritor, $id) as $posts) :
						?>
								<figure class="artigo-usuario col col-lg mb-2 my-3">
									<img class="img-fluid m-auto d-flex" src="./../_storage/blogImages/<?= $posts['photo_post']; ?>" alt="Imagem" />
									<figcaption>
										<a href="./artigo.php?id=<?= $posts['id']; ?>" class="ver-mais">Ver mais</a>
									</figcaption>
									<span class="descricao-artigo">Post de <?= $posts['escritor']; ?></span>
								</figure>
						<?php
							endforeach;
						else :
							echo "<div class='alert alert-info w-100'>O autor {$post->escritor} não tem possui outro artigo além deste.</div>";
						endif;
						?>

					</div>
				</div>
			</section>
		</div>
	</main>

	<script src="./../script/script.js"></script>
	<script>
		const btn = $("#likeBtn").val()
		addEventListener("click", () => {
			window.location.href = './app/Controllers/react.php?id=' + btn
		})
	</script>


</body>

</html>