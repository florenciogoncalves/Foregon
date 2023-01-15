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
	<link href="./../style/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body id="artigo-page" class="__admin home-page container-fluid d-flex d-lg-grid">
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

	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0 container-fluid">
		<div class="row">
			<section id="leia-artigo" class="col-12 col-lg-9 p-0">
				<figure>
					<img class="img-fluid" src="./../image/foto-do-artigo.png" alt="Imagem do artigo" />
					<figcaption>
						<h3 class="nome">Lorem Ipsum exemplo</h3>
						<span class="__author">Lorem Ipsum</span>
						<span class="publicado-em">Publicado em 01/01/2004 ás 00:30</span>
					</figcaption>
					<button class="btn-editar-produto"></button>
				</figure>

				<p class="artigo-mensagem px-2 p-lg-0">
					Lorem ipsum dolor sit amet. Non ullam Quis eos quisquam voluptatem
					quo molestiae quam ut molestiae doloribus aut animi culpa ut galisum
					quia ut obcaecati quia. Qui porro consequatur sed minima cupiditate
					aut aliquam labore ut asperiores exercitationem hic voluptatem
					voluptatem in autem tempore qui libero excepturi. Ad reiciendis
					provident aut itaque ratione cum sunt accusantium est omnis nobis?
					Qui voluptas rerum et voluptates eligendi ut aliquam quia aut iusto
					inventore et voluptatem rerum et explicabo delectus ad nisi eaque.
					Est dolorem possimus vel consequuntur consequatur eos eaque dolorem
					aut commodi facilis sed veritatis excepturi sit obcaecati vitae sit
					velit repudiandae. Qui voluptatem quos sed nulla nulla aut
					consequatur ipsa quo nihil rerum vel eligendi quae ut galisum quasi
					non voluptatum autem. Ex debitis dolor id consectetur suscipit et
					maiores veritatis a beatae repellendus! Id vitae porro ut nihil
					laborum ut rerum minima. Id sint galisum sit optio voluptas in
					dolores consequuntur eos unde possimus qui reiciendis ipsum vel
					nihil rerum eos natus quam. Sit corrupti voluptatem et fugiat labore
					qui necessitatibus beatae et quibusdam beatae et ipsam rerum ut
					temporibus voluptates
				</p>

				<div class="saiba-tambem">
					<div class="artigo-interacao">
						<!-- Setar 'true' ou 'false' no value do botão a seguir, ele define o estado do botão, se sim ou não curtido -->
						<button class="artigo-reacao" value="false" onclick="this.value == 'false' ? this.value = 'true' : this.value = 'false'">
							150
						</button>
						<button class="artigo-partilhas">150</button>
					</div>
				</div>
			</section>

			<section id="graficos-usuario" class="row col-12 col-lg-9 p-0 gap-2 gap-sm-3 mb-3 mt-5">
				<div id="ultimos-artigos" class="col p-0">
					<h3 class="titulo">Leia também</h3>
					<div class="container row gap-3 p-0">
						<figure class="artigo-usuario col col-lg mb-2 my-3">
							<img class="img-fluid m-auto d-flex" src="./../arquivos-temporarios/artigo-img.png" alt="Imagem" />
							<figcaption>
								<a href="" class="ver-mais">Ver mais</a>
							</figcaption>
							<span class="descricao-artigo">Post de lorem</span>
						</figure>

						<figure class="artigo-usuario col col-lg mb-2 my-3">
							<img class="img-fluid m-auto d-flex" src="./../arquivos-temporarios/artigo-img.png" alt="Imagem" />
							<figcaption>
								<a href="" class="ver-mais">Ver mais</a>
							</figcaption>
							<span class="descricao-artigo">Post de lorem</span>
						</figure>

						<figure class="artigo-usuario col col-lg mb-2 my-3">
							<img class="img-fluid m-auto d-flex" src="./../arquivos-temporarios/artigo-img.png" alt="Imagem" />
							<figcaption>
								<a href="" class="ver-mais">Ver mais</a>
							</figcaption>
							<span class="descricao-artigo">Post de lorem</span>
						</figure>
					</div>
				</div>
			</section>
		</div>
	</main>

	<div id="modal-editar-produto">
		<div class="modal__container row m-auto">
			<form id="card-produto" class="area-de-conteudo px-4 py-4 col-9 m-auto">
				<figure class="p-0 m-0 row gap-2">
					<div class="img on-produto col-12 px-0">
						<img src="./../image/artigo_admin.svg" alt="Minha Bufunfa" class="card__image img-fluid" id="preview_image" />
						<img src="./../image/broken-image.svg" alt="broken" class="broken" />
						<input id="imagem-produto" type="file" accept="image/*" />
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

						<fieldset class="gap-2 col-11 row mt-2 mt-lg-auto mx-auto">
							<button type="reset" class="btn-primary btn btn-primary btn-editar-produto">
								Cancelar
							</button>
							<button class="btn btn-primary" type="submit">Salvar</button>
						</fieldset>
					</figcaption>
				</figure>
			</form>
			<button></button>
		</div>
	</div>

	<script src="./../script/script.js"></script>
</body>

</html>