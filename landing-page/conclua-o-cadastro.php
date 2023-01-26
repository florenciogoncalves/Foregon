<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Conclua seu cadastro | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<link href="../style/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>

<body class="landing-page">
	<header class="main-header _status--not-logged-in row pb-3">
		<img class="main-header__logo img-fluid" src="./../image/logo-minha-bufunfa.svg" alt="Minha Bufunfa - logo" />
		<div class="acess-buttons">
			<a class="btn btn-reverse" href="./login.php">Entrar</a>
			<a class="btn btn-primary" href="./cadastro.php">Cadastrar-se</a>
		</div>
	</header>

	<div id="landing-pos-header" class="margem-topo row">
		<div class="container-fluid py-3 py-md-4">
			<form class="interative-area form-group col-12 col-sm-9 col-lg-6 px-4 px-sm-5 my-auto" method="post" action="./app/Controllers/cadastroController.php">
				<h1 class="py-3 pt-lg-0">Finalize seu cadastro</h1>
				<fieldset class="row gap-2">
					<input type="text" class="form-control" placeholder="Nome completo" name="nome" />
					<fieldset class="px-0 row gap-3">
						<input type="tel" class="form-control col-sm" placeholder="Telefone" name="telefone" />
						<input type="date" class="form-control col-sm" placeholder="Data de nascimento" name="data-de-nascimento" />
					</fieldset>
					<fieldset class="px-0 row gap-3">
						<select name="estado" class="form-select col-sm" title="Selecione o seu estado">
							<option value="" selected>Estado</option>
						</select>
						<select name="cidade" class="form-select col-sm" title="Selecione a sua cidade">
							<option value="" selected>Cidade</option>
						</select>
					</fieldset>
					<fieldset class="px-0 row gap-3">
						<div class="col-sm px-0">
							<select name="ocupacao" class="form-select" title="Selecione a sua ocupação">
								<option value="" selected>Ocupação</option>
							</select>
						</div>
						<div class="col-sm px-0">
							<input type="text" class="form-control" placeholder="Renda Mensal" />
						</div>
					</fieldset>
				</fieldset>

				<button type="submit" class="btn btn-primary my-2 mb-3 mt-3 w-75 d-flex justify-content-center mx-auto" id="btnSubmit">
					Cadastrar
				</button>
				<ul id="navegacao-carroussel" class="m-0">
					<li></li>
					<li class="current-slide__demarcation"></li>
				</ul>
			</form>
		</div>
	</div>

	<main id="conteudo-principal">
		<div id="algumas-informacoes" class="container-fluid accordion accordion-flush col-11 col-sm-10 col-lg-9 mt-5 mb-5 gap-2 row mx-auto">
			<!-- First item -->
			<div class="accordion-item">
				<h2 id="flush-headingOne" class="accordion-header">
					<button class="row accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
						Lorem Ipsum Exemplo
						<h3 class="col-md-12">Lorem Ipsum</h3>
					</button>
				</h2>

				<div id="flush-collapseOne" class="texto-pequeno accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#algumas-informacoes">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet. Cum iste velit sit officiis placeat
						est autem impedit. Sed iure internos eum perferendis tempore eum
						deleniti dolorum. Ab quos modi non magni esse id sapiente alias ab
						facere minus et maiores assumenda qui nostrum quia eum voluptatem
						deleniti. A porro aspernatur est natus quaerat et pariatur
						numquam!
					</div>
				</div>
			</div>

			<!-- Second item -->
			<div class="accordion-item">
				<h2 id="flush-headingTwo" class="accordion-header">
					<button class="row accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
						Lorem Ipsum Exemplo
						<h3 class="col-md-12">Lorem Ipsum</h3>
					</button>
				</h2>

				<div id="flush-collapseTwo" class="texto-pequeno accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#algumas-informacoes">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet. Cum iste velit sit officiis placeat
						est autem impedit. Sed iure internos eum perferendis tempore eum
						deleniti dolorum. Ab quos modi non magni esse id sapiente alias ab
						facere minus et maiores assumenda qui nostrum quia eum voluptatem
						deleniti. A porro aspernatur est natus quaerat et pariatur
						numquam!
					</div>
				</div>
			</div>

			<!-- Third item -->
			<div class="accordion-item">
				<h2 id="flush-headingThree" class="accordion-header">
					<button class="row accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
						Lorem Ipsum Exemplo
						<h3 class="col-md-12">Lorem Ipsum</h3>
					</button>
				</h2>

				<div id="flush-collapseThree" class="texto-pequeno accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#algumas-informacoes">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet. Cum iste velit sit officiis placeat
						est autem impedit. Sed iure internos eum perferendis tempore eum
						deleniti dolorum. Ab quos modi non magni esse id sapiente alias ab
						facere minus et maiores assumenda qui nostrum quia eum voluptatem
						deleniti. A porro aspernatur est natus quaerat et pariatur
						numquam!
					</div>
				</div>
			</div>

			<!-- Fourth item -->
			<div class="accordion-item">
				<h2 id="flush-headingFour" class="accordion-header">
					<button class="row accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
						Lorem Ipsum Exemplo
						<h3 class="col-md-12">Lorem Ipsum</h3>
					</button>
				</h2>

				<div id="flush-collapseFour" class="texto-pequeno accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#algumas-informacoes">
					<div class="accordion-body">
						Lorem ipsum dolor sit amet. Cum iste velit sit officiis placeat
						est autem impedit. Sed iure internos eum perferendis tempore eum
						deleniti dolorum. Ab quos modi non magni esse id sapiente alias ab
						facere minus et maiores assumenda qui nostrum quia eum voluptatem
						deleniti. A porro aspernatur est natus quaerat et pariatur
						numquam!
					</div>
				</div>
			</div>
		</div>

		<!-- Conteúdo principal => product-area -->
		<div id="product-area" class="products container-fluid px-0 mb-5 pb-lg-0">
			<h2 class="category-title">Nossos Produtos</h2>
			<span class="subcategory-title text-center">Lorem ipsum dolor sit amet, consectetur adipis cing elit consectetur
				adipis cing elit.</span>

			<ul class="row gap-sm-3 gap-md-4 col-12 col-sm-12 col-md-10 col-lg-9 p-0 px-3 px-sm-2 mx-auto justify-content-between p-sm-5 p-lg-3 p-lg-0 py-sm-3">
				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2 mb-lg-3">
						<img src="./../image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./../home/produto.php" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>

				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2">
						<img src="./../image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./../home/produto.php" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>

				<!-- Item - Cartão produto -->
				<li class="card col-6 col-sm col-md rounded-1 row p-0">
					<figure class="p-0 pt-2 p-sm-2 pt-sm-3 px-sm-0 px-lg-3 pb-0 pb-sm-1 mb-3 mb-sm-2">
						<img src="./../image/product-area-img.svg" alt="Minha Bufunfa" class="card__image img-fluid w-50 mb-3" />
						<figcaption class="container">
							<h4 class="card__title">Lorem Ipsum</h4>
							<span class="card__subtitle">Visa</span>
							<p class="card__description">
								Lorem ipsum dolor sit amet, consectetur adipis cing elit
								consectetur adipis cing elit. Dolor sit amet, consectetur
								adipis cing elit consectetur adipis cing elit.
							</p>
							<a href="./../home/produto.php" class="btn-primary btn btn-primary">
								Conferir cartão
							</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
	</main>

	<!-- Rodapé Principal -->
	<footer id="main-footer" class="container-fluid mt-5 p-3 p-sm-4 p-md-4 row">
		<div id="contate-nos" class="col-12 col-sm col-md-4 p-sm-4 pt-sm-3 pb-sm-3">
			<img class="img-fluid col-4 col-md-9 pb-md-2" src="./../image/logo-minha-bufunfa.svg" alt="Minha bufanfa" />
			<div class="container-fluid p-0">
				<span>Acesse nossas redes</span>
				<nav class="row p-0 gap-1 col-5 col-md-8">
					<a class="col-2" href="https://pt-br.facebook.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./../image/redes-sociais/Facebook.svg" alt="Facebook" /></a>
					<a class="col-2" href="https://twitter.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./../image/redes-sociais/Twitter.svg" alt="Twitter" /></a>
					<a class="col-2" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./../image/redes-sociais/Instagram.svg" alt="Instagram" /></a>
					<a class="col-2" href="https://pt.linkedin.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./../image/redes-sociais/LinkedIn.svg" alt="Linkedin" /></a>
					<a class="col-2" href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer"><img class="img-fluid h-50" src="./../image/redes-sociais/YouTube.svg" alt="Youtube" /></a>
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

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="./../script/script.js"></script>
	<script>
		const btn = document.getElementById('btnSubmit')
		btn.addEventListener('click', () => {
			alert('Em Breve!')
		})
	</script>
</body>

</html>