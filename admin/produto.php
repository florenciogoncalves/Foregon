<?php
session_start();
require_once __DIR__ . "/app/Models/Produtos.php";
require_once __DIR__ . "/../_app/boot/helpers.php";

$Produtos = new produtosModel();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = 2;
}

$_SESSION['id'] = $id;

if (!isset($_SESSION['userActive'])) {
	$_SESSION['message'] = "Você precisa logar primeiro!";
	$_SESSION['type'] = "danger";
	header("Location: ./index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Produto | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="./../style/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./../style/style.css" />
	<link rel="stylesheet" href="./../style/responsive.css" />
</head>
<!-- Relativo ao 'Seu score': No evento onload da tag body, defina dois parametros, o primeiro referente ao total positivo, e o segundo referente ao somatorio total -->

<body class="home-page __admin padrao_produtos container-fluid d-flex d-lg-grid">
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
			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos-white.svg" alt="products" /></a>
			</li>

			<li class="col px-0 py-2 rounded-3">
				<a href="clientes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/cliente.svg" alt="Clientes" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./consultas.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/consulta.svg" alt="Consulta" /></a>
			</li>

			<li class="col px-0 py-2 rounded-3">
				<a href="./configuracoes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/configuracoes.svg" alt="configurações" /></a>
			</li>
			<li class="col px-0 py-2 rounded-3">
				<a href="./blog.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/blog.svg" alt="blog" /></a>
			</li>
			<li class="logout col px-0 py-2">
				<button>
					<img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/logout.svg" alt="logout" />
				</button>
			</li>
		</ul>
	</nav>



	<main id="conteudo-principal" class="col p-3 p-sm-4 pb-5 mb-3 mb-lg-0">
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

		<div class="container-fluid m-0">

			<?php
			$Produto = $Produtos->productById($id);
			if ($Produto) :
			?>

				<div id="card-produto" class="area-de-conteudo p-2">
					<figure class="p-0 pt-3 px-sm-0 px-lg-3 pb-1 row">
						<img src="./../_storage/produtos/<?= $Produto->foto_produto; ?>" alt="Minha Bufunfa" class="card__image img-fluid col-6 px-0" />
						<figcaption class="container col-6">
							<h4><?= $Produto->nome_produto; ?><span class="visa">(Visa)</span></h4>

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
							<p>
								<?= str_limit_words($Produto->descricao_produto, 50); ?>
							</p>
							<span class="valor-label">Valor:</span>
							<h6 class="valor">R$ <span class="monetize"><?= convertToBRL($Produto->valor); ?></span></h6>
							<button class="btn-primary btn btn-primary btn-editar-produto">
								Editar
							</button>
						</figcaption>
					</figure>
				</div>
			<?php
			else :
				header("Location: ./produtos.php");
			endif;
			?>
			<section id="products-recomendados" class="product-area p-2 p-sm-3 mt-4">
				<h3 class="titulo">Produtos recomendados <a href="">Ver todos</a></h3>

				<div class="products container-fluid pb-3 px-0 mt-4 col-lg-11">




					<ul class="row gap-3 gap-sm-2 gap-md-3 col-10 col-xs-8 col-sm-12 col-lg-9 justify-content-center row-cols-3">
						<?php
						if ($Produtos->randomProducts($id)) :
							foreach ($Produtos->randomProducts($id) as $items) :

						?>
								<!-- Item - Cartão produto -->
								<li class="card col-10 col-sm rounded-1 row">
									<figure class="p-0 pt-3 px-sm-0 px-lg-3 pb-1">
										<img src="./../_storage/produtos/<?= $items['foto_produto']; ?>" alt="Minha Bufunfa" class="card__image img-fluid w-50" />
										<figcaption class="container">
											<h4 class="card__title"><?= $items['nome_produto']; ?></h4>
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
												<?= str_limit_words($items['descricao_produto'], 16); ?>
											</p>
											<button class="btn-primary btn btn-primary">
												<a href="./produto.php?id=<?= $items['id']; ?>">
													Adquirir
												</a>

											</button>
										</figcaption>
									</figure>
								</li>
						<?php
							endforeach;
						endif;
						?>
					</ul>

				</div>

			</section>
		</div>
	</main>

	<div id="modal-editar-produto">
		<div class="modal__container row m-auto">
			<form id="card-produto" class="area-de-conteudo px-3 py-4 col-12 m-auto" action="./app/Controllers/updateProdutoController.php" method="post" enctype="multipart/form-data" novalidate>
				<figure class="p-0 m-0 row">
					<div class="img col-5 px-0">
						<img src="./../_storage/produtos/<?= $Produto->foto_produto; ?>" alt="Minha Bufunfa" class="img-fluid" id="preview_image" />
						<img src="./../image/broken-image.svg" alt="broken" class="broken" />
						<input type="file" name="imagem-produto" id="imagem-produto" accept="image/*" />
					</div>
					<figcaption class="container col-7 px-3">
						<h4><?= $Produto->nome_produto; ?><span class="visa">(Visa)</span></h4>

						<fieldset class="row mb-3">
							<label class="p-0 valor-label" for="descricao">Descrição</label>
							<textarea name="descricao" id="descricao" rows="6"><?= $Produto->descricao_produto; ?></textarea>
						</fieldset>

						<fieldset class="row mb-3">
							<label class="valor-label px-0">Valor:</label>
							<input class="w-75" type="text" name="valor" id="valor" value="<?= $Produto->valor; ?>" required />
						</fieldset>

						<fieldset class="gap-2 row mt-auto">
							<button type="reset" class="btn-primary btn btn-primary btn-editar-produto">
								Cancelar
							</button>
							<button class="btn btn-primary" type="submit">Salvar</button>
						</fieldset>
					</figcaption>
				</figure>
			</form>
		</div>
	</div>

	<script src="./../script/script.js"></script>
</body>

</html>