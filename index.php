<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Foregon</title>
	<link rel="shortcut icon" href="./image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./style/reset.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./style/style.css" />
	<link rel="stylesheet" href="./style/responsive.css" />
</head>

<body class="container-fluid">
	<!-- Cabeçalho -->
	<header class="main-header _status--not-logged-in row pb-3">
		<img class="main-header__logo img-fluid" src="./image/logo-minha-bufunfa.svg" alt="Minha Bufunfa - logo" />
		<div class="acess-buttons">
			<a class="btn btn-reverse" href="./login.php">Entrar</a>
			<a class="btn btn-primary" href="./cadastro.php">Cadastrar-se</a>
		</div>
	</header>

	<!-- Carroussel -->
	<section class="main-carousel p-4 pb-1 container-fluid mb-5">
		<!-- container do carroussel -->
		<section class="container-all-slides col-11 col-sm-7 col-lg-6 m-auto h-auto pt-2">
			<div class="container-fluid">
				<!-- Item do carroussel -->
				<div class="carousel-slide row col-12 col-lg-10 m-auto">
					<h3 class="current-slide__title text-center">Lorem ipsum 1</h3>
					<span class="current-slide__subtitle col-12">
						It is a long established fact that a reader will be distracted by
						the readable content of a page when looking at its layout. The
						point of using Lorem Ipsum is that it has a more-or-less normal
						distribution of letters, as oppos
					</span>
					<button class="btn btn-primary">Lorem Ipsum</button>
				</div>

				<!-- Item do carroussel -->
				<div class="carousel-slide row col-12 col-lg-10 m-auto">
					<h3 class="current-slide__title text-center">Lorem ipsum 2</h3>
					<span class="current-slide__subtitle col-12">
						It is a long established fact that a reader will be distracted by
						the readable content of a page when looking at its layout. The
						point of using Lorem Ipsum is that it has a more-or-less normal
						distribution of letters, as oppos
					</span>
					<button class="btn btn-primary">Lorem Ipsum</button>
				</div>

				<!-- Item do carroussel -->
				<div class="carousel-slide row col-12 col-lg-10 m-auto">
					<h3 class="current-slide__title text-center">Lorem ipsum 3</h3>
					<span class="current-slide__subtitle col-12">
						It is a long established fact that a reader will be distracted by
						the readable content of a page when looking at its layout. The
						point of using Lorem Ipsum is that it has a more-or-less normal
						distribution of letters, as oppos
					</span>
					<button class="btn btn-primary">Lorem Ipsum</button>
				</div>
			</div>
		</section>

		<ul id="navegacao-carroussel">
			<!-- <li class="current-slide__demarcation"></li> Corresponde ao slide atual -->
		</ul>
	</section>

	<!-- Conteúdo principal -->
	<main id="conteudo-principal" class="row d-flex justify-content-center mt-5">
		<!-- Conteúdo principal => product-area -->
		<div id="product-area" class="products container-fluid px-0 mb-5 pb-lg-0">
			<h2 class="category-title">Nossos Produtos</h2>
			<span class="subcategory-title text-center">Lorem ipsum dolor sit amet, consectetur adipis cing elit consectetur
				adipis cing elit.</span>

			<ul class="row gap-sm-3 gap-md-4 col-12 col-sm-12 col-md-10 col-lg-9 p-0 px-3 px-sm-2 mx-auto justify-content-between p-sm-5 p-lg-3 p-lg-0 py-sm-3">
				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2 mb-lg-3">
						<img src="./image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./home/produto.html" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>

				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2">
						<img src="./image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./home/produto.html" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>

				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2">
						<img src="./image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./home/produto.html" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>

		<!-- Conteúdo principal => Como funcionamos -->
		<div class="how-we-work row mt-4 mb-4 pt-5 pb-5">
			<div class="col-12 col-sm-10 m-auto">
				<h2 class="category-title">Como funcionamos</h2>
				<p class="__description">
					It is a long established fact that a reader will be distracted by
					the readable content of a page when looking at its layout. The point
					of using Lorem Ipsum is that it has a more-or-less normal
					distribution of letters, as oppos It is a long established fact that
					a reader will be distracted by the readable content of a page when
					looking at its layout. The point of using Lorem Ipsum is that it has
					a more-or-less normal distribution of letters, as oppos
				</p>
			</div>
		</div>

		<!-- Conteúdo principal => Avaliação dos usuários -->
		<div class="user-ratings container-fluid col-lg-11 col-12 mt-4 mb-4 ml-0">
			<h2 class="category-title">Avaliações dos usuários</h2>
			<span class="subcategory-title text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
				industry</span>

			<ul class="row p-0 gap-3 col-11 col-md-10 px-md-4 col-lg-10 justify-content-center m-auto">
				<!-- Item Cartão usuário -->
				<li class="card col-10 col-sm p-2 p-md-3">
					<figure class="col col-lg-10 m-auto">
						<img src="./arquivos-temporarios/Ellipse 142.svg" alt="magem-de-perfil" class="card__image rounded-circle img-fluid d-flex m-auto mb-3" />
						<figcaption>
							<h4 class="card__title mb-2">Luiza lipsum Dollor</h4>
							<p class="card__description">
								It is a long established fact that a reader will be distracted
								by the readable content of a page when looking at its layout.
								The point of using Lorem Ipsum is that it has a more-or-less
								normal distribution of letters, as oppos
							</p>
						</figcaption>
					</figure>
				</li>

				<!-- Item Cartão usuário -->
				<li class="card col-10 col-sm p-2 px-lg-3 p-md-3">
					<figure class="col col-lg-10 m-auto">
						<img src="./arquivos-temporarios/Ellipse 142.svg" alt="magem-de-perfil" class="card__image rounded-circle img-fluid d-flex m-auto mb-3" />
						<figcaption>
							<h4 class="card__title mb-2">Luiza lipsum Dollor</h4>
							<p class="card__description">
								It is a long established fact that a reader will be distracted
								by the readable content of a page when looking at its layout.
								The point of using Lorem Ipsum is that it has a more-or-less
								normal distribution of letters, as oppos
							</p>
						</figcaption>
					</figure>
				</li>

				<!-- Item Cartão usuário -->
				<li class="card col-10 col-sm p-2 px-lg-3 p-md-3">
					<figure class="col col-lg-10 m-auto">
						<img src="./arquivos-temporarios/Ellipse 142.svg" alt="magem-de-perfil" class="rounded-circle img-fluid d-flex m-auto mb-3" />
						<figcaption>
							<h4 class="card__title mb-2">Luiza lipsum Dollor</h4>
							<p class="card__description">
								It is a long established fact that a reader will be distracted
								by the readable content of a page when looking at its layout.
								The point of using Lorem Ipsum is that it has a more-or-less
								normal distribution of letters, as oppos
							</p>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
	</main>

	<!-- Rodapé Principal -->
	<footer id="main-footer" class="container-fluid mt-5 p-3 p-sm-4 p-md-4 row">
		<div id="contate-nos" class="col-12 col-sm col-md-4 p-sm-4 pt-sm-3 pb-sm-3">
			<img class="img-fluid col-4 col-md-9 pb-md-2" src="./image/logo-minha-bufunfa.svg" alt="Minha bufanfa" />
			<div class="container-fluid p-0 d-none d-sm-flex flex-column">
				<span class="col-5 col-md-8 text-center mt-2 mt-lg-0">Acesse nossas redes</span>
				<nav class="row p-0 gap-1 col-5 col-md-8 justify-content-between">
					<a class="col-2" href="https://pt-br.facebook.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./image/redes-sociais/Facebook.svg" alt="Facebook" /></a>
					<a class="col-2" href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./image/redes-sociais/Twitter.svg" alt="Twitter" /></a>
					<a class="col-2" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./image/redes-sociais/Instagram.svg" alt="Instagram" /></a>
					<a class="col-2" href="https://pt.linkedin.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./image/redes-sociais/LinkedIn.svg" alt="Linkedin" /></a>
					<a class="col-2" href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./image/redes-sociais/YouTube.svg" alt="Youtube" /></a>
				</nav>
			</div>
		</div>
		<div class="footer-links row gap-1 col-12 col-md p-3 pb-sm-2 pt-sm-2 justify-content-between m-0 m-sm-2 mb-0 mt-sm-0 mh-100">
			<ul class="links-subcontainer col-auto">
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
			</ul>

			<ul class="links-subcontainer col-auto">
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
			</ul>

			<ul class="links-subcontainer col-auto">
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
			</ul>

			<ul class="links-subcontainer col-auto">
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
			</ul>

			<ul class="links-subcontainer col-auto">
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
				<li class="caminho-rodape"><a href="">Lorem Ipsum</a></li>
			</ul>
		</div>

		<span class="_mkti-brand">Minhabufanfa - © 2022 All Rights Reserved Feito com ♥ pela MKTI</span>
	</footer>

	<script src="./script/script.js"></script>
</body>

</html>