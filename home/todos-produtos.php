<?php
session_start();
require __DIR__ . "/app/Models/produtosModel.php";
require_once __DIR__ . "/../_app/boot/helpers.php";
$produtos = new produtosModel();


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
	<title>Produtos | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="./../style/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>html
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body class="home-page padrao_produtos container-fluid d-flex d-lg-grid">
	<nav id="menu-lateral" class="navbar col sticky-bottom py-2 px-4">
		<div class="logo d-none d-lg-flex">
			<img src="./../image/Minha-bufunfa-pequeno.svg" alt="Minha Bufunfa" />
		</div>
		<ul class="navegacao row p-0 px-sm-4 mb-0 col-12 gap-2 justify-content-between">
			<li class="col px-0 py-2 rounded-3">
				<a href="./index.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/home.svg" alt="home" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos-white.svg" alt="products" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes.svg" alt="configurações" /></a>
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


	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0">

		<?php
		if (!$produtos->findProducts(true)) {
			echo "<div class='alert alert-info text-center'>{$_SESSION['emptyMessage']}</div>";
		} else {
			unset($_SESSION['emptyMessage']);
		}
		?>
		<div class="container-fluid">
			<section id="todos-produtos" class="product-area p-2 p-sm-3 mt-4">
				<h3 class="titulo">Todos os produtos</h3>

				<div class="products container-fluid pb-3 px-0 mt-4 col-lg-11">
					<ul class="row gap-3 gap-sm-2 gap-md-3 col-12 justify-content-center row-cols-3">
						<?php
						if ($produtos->findProducts(true)) :
							foreach ($produtos->findProducts(true) as $produto) :
						?>

								<!-- Item - Cartão produto -->
								<li class="card col-10 col-sm rounded-1 row">
									<figure class="p-0 pt-3 px-sm-0 px-lg-3 pb-1">
										<img src="./../_storage/produtos/<?= $produto['foto_produto']; ?>" alt="Minha Bufunfa" class="card__image img-fluid w-50" />
										<figcaption class="container">
											<h4 class="card__title"><?= $produto['nome_produto']; ?></h4>
											<span class="card__subtitle">Visa</span>
											<div class="classificado">
												<ul class="estrelas col-8 h-100">
													<li class="estrelar estrelado col"></li>
													<li class="estrelar estrelado col"></li>
													<li class="estrelar estrelado col"></li>
													<li class="estrelar estrelado col"></li>
													<li class="estrelar col"></li>
												</ul>
												<span class="classificacao-geral col-2">4,2</span>
											</div>
											<p class="card__description">
												<?= str_limit_words($produto['descricao_produto'], 16); ?>
											</p>
											<a href="./produto.php?id=<?= $produto['id']; ?>" class="btn-primary btn btn-primary">
												Adquirir
											</a>
										</figcaption>
									</figure>
								</li>
						<?php
							endforeach;
						else :
							$_SESSION['emptyMessage'] = "Nenhum Produto foi adicionado ainda.";
						endif;
						?>
					</ul>
				</div>
			</section>
		</div>
	</main>

	<script src="./../script/script.js"></script>
</body>

</html>