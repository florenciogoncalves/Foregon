<?php
session_start();
require __DIR__ . "/app/Models/Blog.php";
$Blog = new Blog();
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
	<link href="./../style/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="blog-page" class="home-page __admin container-fluid d-flex d-lg-grid">
	<nav id="menu-lateral" class="navbar col sticky-bottom py-2 px-4">
		<div class="logo d-none d-lg-flex">
			<a href="./" class="logo d-none d-lg-flex">
				<img src="./../image/Minha-bufunfa-pequeno.svg" alt="Minha Bufunfa" />
			</a>
		</div>
		<ul class="navegacao row p-0 px-sm-4 mb-0 col-12 gap-2 justify-content-between">
			<li class="col px-0 py-2 rounded-3">
				<a href="./home.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/home.svg" alt="home" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos.svg" alt="products" /></a>
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
			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog-white.svg" alt="blog" /></a>
			</li>
			<li class="logout col px-0 py-2">
				<button>
					<img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/logout.svg" alt="logout" />
				</button>
			</li>
		</ul>
	</nav>

	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0">
		<div class="container-fluid _max-width--85">
			<section id="mensagem-rececao" class="mt-2 row">
				<div class="col">
					<h1>Blog</h1>
					<span>Lorem Ipsum is simply dummy text of the printing and typesetting
						industry</span>
				</div>
				<button class="btn-add-produto btn btn-primary h-mc py-1">
					Criar Nova Postagem
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


	<div id="modal-editar-produto">
		<div class="modal__container row m-auto">
			<form id="card-produto" class="area-de-conteudo px-4 py-4 col-9 m-auto" method="post" action="./app/Controllers/BlogController.php" enctype="multipart/form-data" novalidate>
				<figure class="p-0 m-0 row gap-2">
					<div class="img on-produto col-12 px-0">
						<img src="./../image/artigo_admin.svg" alt="Minha Bufunfa" class="card__image img-fluid" id="preview_image" />
						<img src="./../image/broken-image.svg" alt="broken" class="broken" />
						<input id="imagem-produto" type="file" accept="image/*" name="postImage" />
					</div>
					<figcaption class="container col-12 px-0 px-lg-3">
						<fieldset class="row mb-2">
							<div class="col-7 row p-0">
								<label class="valor-label px-0 col-12">Título</label>
								<input type="text" name="titulo" id="titulo" placeholder="Lorem ipsum" required />
							</div>

							<div class="col row p-0">
								<label class="valor-label px-0 col-12">Escritor</label>
								<input type="text" name="escritor" id="escritor" placeholder="Lorem ipsum" required />
							</div>
						</fieldset>

						<fieldset class="row mb-2">
							<label class="p-0 valor-label" for="texto">Texto</label>
							<textarea name="texto" id="texto" rows="6" required placeholder="Lorem ipsum dolor sit amet. Non ullam Quis eos quisquam voluptatem quo molestiae quam ut molestiae doloribus aut animi culpa ut galisum quia ut obcaecati quia. Qui porro consequatur sed minima cupiditate aut aliquam labore ut asperiores exercitationem"></textarea>
						</fieldset>

						<fieldset class="row mb-2 mb-3">
							<div class="col row p-0">
								<label class="valor-label px-0 col-12">Referência</label>
								<input type="text" name="referencia" id="referencia" placeholder="Lorem ipsum" required />
							</div>
						</fieldset>

						<fieldset class="gap-2 col-11 row mt-2 mt-lg-auto mx-auto">
							<button type="reset" class="btn-primary btn btn-primary btn-editar-produto col">
								Cancelar
							</button>
							<button class="btn btn-primary col" type="submit">Salvar</button>
						</fieldset>
					</figcaption>
				</figure>
			</form>
			<button class="btn-close-modal"></button>
		</div>
	</div>


	<script src="./../script/script.js"></script>
</body>

</html>