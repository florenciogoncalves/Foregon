<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Clientes | Foregon</title>
	<link rel="shortcut icon" href="./../image/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" href="./../style/reset.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
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
			<li class="col px-0 py-2 rounded-3">
				<a href="./produtos.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/produtos.svg" alt="products" /></a>
			</li>

			<li class="col px-0 py-2 rounded-3" id="vizualizando">
				<a href="./clientes.php"><img class="img-fluid m-auto d-flex" src="./../image/icones-do-menu/cliente-white.svg" alt="Clientes" /></a>
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
		<section id="pagina-clientes" class="area-de-conteudo p-2 p-sm-3" style="box-shadow: none !important">
			<header id="cabecalho" class="mb-5 __mensagem-rececao">
				<div class="referencia">
					<h1 class="mb-0">Lorem Ipsum Exemplo</h1>
					<span>Lorem Ipsum Exemplo</span>
				</div>
				<div class="container-campo-pesquisa">
					<input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar..." />
					<button class="__pesquisar-botao"></button>
				</div>
			</header>

			<div class="table-responsive">
				<table id="tabela-consulta" class="table">
					<thead class="position-sticky sticky-top bg-white">
						<th scope="col"></th>
						<th scope="col">Produto</th>
						<th scope="col">Data</th>
						<th scope="col">Comprador</th>
						<th scope="col">Hora</th>
						<th scope="col">Status</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</thead>

					<!-- Classes para status:
              ._status--em-processo,
              ._status--aprovado,
              ._status--cancelado
           -->

					<tbody>
						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--em-processo">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--aprovado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--aprovado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--aprovado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--cancelado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--aprovado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>

						<tr>
							<!-- A imagem -->
							<td><img src="./../image/clientes-cliente.png" /></td>
							<td>Loren Ipsum</td>
							<td>21/09/2022</td>
							<td>Lorem Ipsum</td>
							<td>15H05</td>
							<!-- Para o item a seguir, o valor é setado pelo js com base na classe setada -->
							<td><span class="_status--aprovado">Em processo</span></td>
							<td><button class="btn__ver btn"></button></td>
							<td><button class="btn__imprimir btn btn-primary"></button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>

	<script src="./../script/script.js"></script>
	<script>
		function textStatus(classe, valor) {
			document.querySelectorAll("." + classe).forEach((el) => {
				el.innerText = valor;
			});
		}

		textStatus("_status--em-processo", "Em processo");
		textStatus("_status--aprovado", "Aprovado");
		textStatus("_status--cancelado", "Cancelado");
	</script>
</body>

</html>