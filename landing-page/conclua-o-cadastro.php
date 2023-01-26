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
						<select
								name="estado"
								class="form-select col-sm"
								title="Selecione o seu estado">
								<option value="" selected hidden>Estado</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select>
						<select
								name="cidade"
								class="form-select col-sm"
								title="Selecione a sua cidade">
								<option value="" selected hidden>Cidade</option>
								<optgroup class="state-ro state-group d-none">
									<option value="Alta Floresta D'Oeste">
										Alta Floresta D'Oeste
									</option>
									<option value="Ariquemes">Ariquemes</option>
									<option value="Cabixi">Cabixi</option>
									<option value="Cacoal">Cacoal</option>
									<option value="Cerejeiras">Cerejeiras</option>
									<option value="Colorado do Oeste">Colorado do Oeste</option>
									<option value="Corumbiara">Corumbiara</option>
									<option value="Costa Marques">Costa Marques</option>
									<option value="Espigão D'Oeste">Espigão D'Oeste</option>
									<option value="Guajará-Mirim">Guajará-Mirim</option>
									<option value="Jaru">Jaru</option>
									<option value="Ji-Paraná">Ji-Paraná</option>
									<option value="Machadinho D'Oeste">Machadinho D'Oeste</option>
									<option value="Nova Brasilândia D'Oeste">
										Nova Brasilândia D'Oeste
									</option>
									<option value="Ouro Preto do Oeste">
										Ouro Preto do Oeste
									</option>
									<option value="Pimenta Bueno">Pimenta Bueno</option>
									<option value="Porto Velho">Porto Velho</option>
									<option value="Presidente Médici">Presidente Médici</option>
									<option value="Rio Crespo">Rio Crespo</option>
									<option value="Rolim de Moura">Rolim de Moura</option>
									<option value="Santa Luzia D'Oeste">
										Santa Luzia D'Oeste
									</option>
									<option value="Vilhena">Vilhena</option>
									<option value="São Miguel do Guaporé">
										São Miguel do Guaporé
									</option>
									<option value="Nova Mamoré">Nova Mamoré</option>
									<option value="Alvorada D'Oeste">Alvorada D'Oeste</option>
									<option value="Alto Alegre dos Parecis">
										Alto Alegre dos Parecis
									</option>
									<option value="Alto Paraíso">Alto Paraíso</option>
									<option value="Buritis">Buritis</option>
									<option value="Novo Horizonte do Oeste">
										Novo Horizonte do Oeste
									</option>
									<option value="Cacaulândia">Cacaulândia</option>
									<option value="Campo Novo de Rondônia">
										Campo Novo de Rondônia
									</option>
									<option value="Candeias do Jamari">Candeias do Jamari</option>
									<option value="Castanheiras">Castanheiras</option>
									<option value="Chupinguaia">Chupinguaia</option>
									<option value="Cujubim">Cujubim</option>
									<option value="Governador Jorge Teixeira">
										Governador Jorge Teixeira
									</option>
									<option value="Itapuã do Oeste">Itapuã do Oeste</option>
									<option value="Ministro Andreazza">Ministro Andreazza</option>
									<option value="Mirante da Serra">Mirante da Serra</option>
									<option value="Monte Negro">Monte Negro</option>
									<option value="Nova União">Nova União</option>
									<option value="Parecis">Parecis</option>
									<option value="Pimenteiras do Oeste">
										Pimenteiras do Oeste
									</option>
									<option value="Primavera de Rondônia">
										Primavera de Rondônia
									</option>
									<option value="São Felipe D'Oeste">São Felipe D'Oeste</option>
									<option value="São Francisco do Guaporé">
										São Francisco do Guaporé
									</option>
									<option value="Seringueiras">Seringueiras</option>
									<option value="Teixeirópolis">Teixeirópolis</option>
									<option value="Theobroma">Theobroma</option>
									<option value="Urupá">Urupá</option>
									<option value="Vale do Anari">Vale do Anari</option>
									<option value="Vale do Paraíso">Vale do Paraíso</option>
								</optgroup>
								<optgroup class="state-ac state-group d-none">
									<option value="Acrelândia">Acrelândia</option>
									<option value="Assis Brasil">Assis Brasil</option>
									<option value="Brasiléia">Brasiléia</option>
									<option value="Bujari">Bujari</option>
									<option value="Capixaba">Capixaba</option>
									<option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
									<option value="Epitaciolândia">Epitaciolândia</option>
									<option value="Feijó">Feijó</option>
									<option value="Jordão">Jordão</option>
									<option value="Mâncio Lima">Mâncio Lima</option>
									<option value="Manoel Urbano">Manoel Urbano</option>
									<option value="Marechal Thaumaturgo">
										Marechal Thaumaturgo
									</option>
									<option value="Plácido de Castro">Plácido de Castro</option>
									<option value="Porto Walter">Porto Walter</option>
									<option value="Rio Branco">Rio Branco</option>
									<option value="Rodrigues Alves">Rodrigues Alves</option>
									<option value="Santa Rosa do Purus">
										Santa Rosa do Purus
									</option>
									<option value="Senador Guiomard">Senador Guiomard</option>
									<option value="Sena Madureira">Sena Madureira</option>
									<option value="Tarauacá">Tarauacá</option>
									<option value="Xapuri">Xapuri</option>
									<option value="Porto Acre">Porto Acre</option>
								</optgroup>
								<optgroup class="state-am state-group d-none">
									<option value="Alvarães">Alvarães</option>
									<option value="Amaturá">Amaturá</option>
									<option value="Anamã">Anamã</option>
									<option value="Anori">Anori</option>
									<option value="Apuí">Apuí</option>
									<option value="Atalaia do Norte">Atalaia do Norte</option>
									<option value="Autazes">Autazes</option>
									<option value="Barcelos">Barcelos</option>
									<option value="Barreirinha">Barreirinha</option>
									<option value="Benjamin Constant">Benjamin Constant</option>
									<option value="Beruri">Beruri</option>
									<option value="Boa Vista do Ramos">Boa Vista do Ramos</option>
									<option value="Boca do Acre">Boca do Acre</option>
									<option value="Borba">Borba</option>
									<option value="Caapiranga">Caapiranga</option>
									<option value="Canutama">Canutama</option>
									<option value="Carauari">Carauari</option>
									<option value="Careiro">Careiro</option>
									<option value="Careiro da Várzea">Careiro da Várzea</option>
									<option value="Coari">Coari</option>
									<option value="Codajás">Codajás</option>
									<option value="Eirunepé">Eirunepé</option>
									<option value="Envira">Envira</option>
									<option value="Fonte Boa">Fonte Boa</option>
									<option value="Guajará">Guajará</option>
									<option value="Humaitá">Humaitá</option>
									<option value="Ipixuna">Ipixuna</option>
									<option value="Iranduba">Iranduba</option>
									<option value="Itacoatiara">Itacoatiara</option>
									<option value="Itamarati">Itamarati</option>
									<option value="Itapiranga">Itapiranga</option>
									<option value="Japurá">Japurá</option>
									<option value="Juruá">Juruá</option>
									<option value="Jutaí">Jutaí</option>
									<option value="Lábrea">Lábrea</option>
									<option value="Manacapuru">Manacapuru</option>
									<option value="Manaquiri">Manaquiri</option>
									<option value="Manaus">Manaus</option>
									<option value="Manicoré">Manicoré</option>
									<option value="Maraã">Maraã</option>
									<option value="Maués">Maués</option>
									<option value="Nhamundá">Nhamundá</option>
									<option value="Nova Olinda do Norte">
										Nova Olinda do Norte
									</option>
									<option value="Novo Airão">Novo Airão</option>
									<option value="Novo Aripuanã">Novo Aripuanã</option>
									<option value="Parintins">Parintins</option>
									<option value="Pauini">Pauini</option>
									<option value="Presidente Figueiredo">
										Presidente Figueiredo
									</option>
									<option value="Rio Preto da Eva">Rio Preto da Eva</option>
									<option value="Santa Isabel do Rio Negro">
										Santa Isabel do Rio Negro
									</option>
									<option value="Santo Antônio do Içá">
										Santo Antônio do Içá
									</option>
									<option value="São Gabriel da Cachoeira">
										São Gabriel da Cachoeira
									</option>
									<option value="São Paulo de Olivença">
										São Paulo de Olivença
									</option>
									<option value="São Sebastião do Uatumã">
										São Sebastião do Uatumã
									</option>
									<option value="Silves">Silves</option>
									<option value="Tabatinga">Tabatinga</option>
									<option value="Tapauá">Tapauá</option>
									<option value="Tefé">Tefé</option>
									<option value="Tonantins">Tonantins</option>
									<option value="Uarini">Uarini</option>
									<option value="Urucará">Urucará</option>
									<option value="Urucurituba">Urucurituba</option>
								</optgroup>
								<optgroup class="state-rr state-group d-none">
									<option value="Amajari">Amajari</option>
									<option value="Alto Alegre">Alto Alegre</option>
									<option value="Boa Vista">Boa Vista</option>
									<option value="Bonfim">Bonfim</option>
									<option value="Cantá">Cantá</option>
									<option value="Caracaraí">Caracaraí</option>
									<option value="Caroebe">Caroebe</option>
									<option value="Iracema">Iracema</option>
									<option value="Mucajaí">Mucajaí</option>
									<option value="Normandia">Normandia</option>
									<option value="Pacaraima">Pacaraima</option>
									<option value="Rorainópolis">Rorainópolis</option>
									<option value="São João da Baliza">São João da Baliza</option>
									<option value="São Luiz">São Luiz</option>
									<option value="Uiramutã">Uiramutã</option>
								</optgroup>
								<optgroup class="state-pa state-group d-none">
									<option value="Abaetetuba">Abaetetuba</option>
									<option value="Abel Figueiredo">Abel Figueiredo</option>
									<option value="Acará">Acará</option>
									<option value="Afuá">Afuá</option>
									<option value="Água Azul do Norte">Água Azul do Norte</option>
									<option value="Alenquer">Alenquer</option>
									<option value="Almeirim">Almeirim</option>
									<option value="Altamira">Altamira</option>
									<option value="Anajás">Anajás</option>
									<option value="Ananindeua">Ananindeua</option>
									<option value="Anapu">Anapu</option>
									<option value="Augusto Corrêa">Augusto Corrêa</option>
									<option value="Aurora do Pará">Aurora do Pará</option>
									<option value="Aveiro">Aveiro</option>
									<option value="Bagre">Bagre</option>
									<option value="Baião">Baião</option>
									<option value="Bannach">Bannach</option>
									<option value="Barcarena">Barcarena</option>
									<option value="Belém">Belém</option>
									<option value="Belterra">Belterra</option>
									<option value="Benevides">Benevides</option>
									<option value="Bom Jesus do Tocantins">
										Bom Jesus do Tocantins
									</option>
									<option value="Bonito">Bonito</option>
									<option value="Bragança">Bragança</option>
									<option value="Brasil Novo">Brasil Novo</option>
									<option value="Brejo Grande do Araguaia">
										Brejo Grande do Araguaia
									</option>
									<option value="Breu Branco">Breu Branco</option>
									<option value="Breves">Breves</option>
									<option value="Bujaru">Bujaru</option>
									<option value="Cachoeira do Piriá">Cachoeira do Piriá</option>
									<option value="Cachoeira do Arari">Cachoeira do Arari</option>
									<option value="Cametá">Cametá</option>
									<option value="Canaã dos Carajás">Canaã dos Carajás</option>
									<option value="Capanema">Capanema</option>
									<option value="Capitão Poço">Capitão Poço</option>
									<option value="Castanhal">Castanhal</option>
									<option value="Chaves">Chaves</option>
									<option value="Colares">Colares</option>
									<option value="Conceição do Araguaia">
										Conceição do Araguaia
									</option>
									<option value="Concórdia do Pará">Concórdia do Pará</option>
									<option value="Cumaru do Norte">Cumaru do Norte</option>
									<option value="Curionópolis">Curionópolis</option>
									<option value="Curralinho">Curralinho</option>
									<option value="Curuá">Curuá</option>
									<option value="Curuçá">Curuçá</option>
									<option value="Dom Eliseu">Dom Eliseu</option>
									<option value="Eldorado dos Carajás">
										Eldorado dos Carajás
									</option>
									<option value="Faro">Faro</option>
									<option value="Floresta do Araguaia">
										Floresta do Araguaia
									</option>
									<option value="Garrafão do Norte">Garrafão do Norte</option>
									<option value="Goianésia do Pará">Goianésia do Pará</option>
									<option value="Gurupá">Gurupá</option>
									<option value="Igarapé-Açu">Igarapé-Açu</option>
									<option value="Igarapé-Miri">Igarapé-Miri</option>
									<option value="Inhangapi">Inhangapi</option>
									<option value="Ipixuna do Pará">Ipixuna do Pará</option>
									<option value="Irituia">Irituia</option>
									<option value="Itaituba">Itaituba</option>
									<option value="Itupiranga">Itupiranga</option>
									<option value="Jacareacanga">Jacareacanga</option>
									<option value="Jacundá">Jacundá</option>
									<option value="Juruti">Juruti</option>
									<option value="Limoeiro do Ajuru">Limoeiro do Ajuru</option>
									<option value="Mãe do Rio">Mãe do Rio</option>
									<option value="Magalhães Barata">Magalhães Barata</option>
									<option value="Marabá">Marabá</option>
									<option value="Maracanã">Maracanã</option>
									<option value="Marapanim">Marapanim</option>
									<option value="Marituba">Marituba</option>
									<option value="Medicilândia">Medicilândia</option>
									<option value="Melgaço">Melgaço</option>
									<option value="Mocajuba">Mocajuba</option>
									<option value="Moju">Moju</option>
									<option value="Mojuí dos Campos">Mojuí dos Campos</option>
									<option value="Monte Alegre">Monte Alegre</option>
									<option value="Muaná">Muaná</option>
									<option value="Nova Esperança do Piriá">
										Nova Esperança do Piriá
									</option>
									<option value="Nova Ipixuna">Nova Ipixuna</option>
									<option value="Nova Timboteua">Nova Timboteua</option>
									<option value="Novo Progresso">Novo Progresso</option>
									<option value="Novo Repartimento">Novo Repartimento</option>
									<option value="Óbidos">Óbidos</option>
									<option value="Oeiras do Pará">Oeiras do Pará</option>
									<option value="Oriximiná">Oriximiná</option>
									<option value="Ourém">Ourém</option>
									<option value="Ourilândia do Norte">
										Ourilândia do Norte
									</option>
									<option value="Pacajá">Pacajá</option>
									<option value="Palestina do Pará">Palestina do Pará</option>
									<option value="Paragominas">Paragominas</option>
									<option value="Parauapebas">Parauapebas</option>
									<option value="Pau D'Arco">Pau D'Arco</option>
									<option value="Peixe-Boi">Peixe-Boi</option>
									<option value="Piçarra">Piçarra</option>
									<option value="Placas">Placas</option>
									<option value="Ponta de Pedras">Ponta de Pedras</option>
									<option value="Portel">Portel</option>
									<option value="Porto de Moz">Porto de Moz</option>
									<option value="Prainha">Prainha</option>
									<option value="Primavera">Primavera</option>
									<option value="Quatipuru">Quatipuru</option>
									<option value="Redenção">Redenção</option>
									<option value="Rio Maria">Rio Maria</option>
									<option value="Rondon do Pará">Rondon do Pará</option>
									<option value="Rurópolis">Rurópolis</option>
									<option value="Salinópolis">Salinópolis</option>
									<option value="Salvaterra">Salvaterra</option>
									<option value="Santa Bárbara do Pará">
										Santa Bárbara do Pará
									</option>
									<option value="Santa Cruz do Arari">
										Santa Cruz do Arari
									</option>
									<option value="Santa Isabel do Pará">
										Santa Isabel do Pará
									</option>
									<option value="Santa Luzia do Pará">
										Santa Luzia do Pará
									</option>
									<option value="Santa Maria das Barreiras">
										Santa Maria das Barreiras
									</option>
									<option value="Santa Maria do Pará">
										Santa Maria do Pará
									</option>
									<option value="Santana do Araguaia">
										Santana do Araguaia
									</option>
									<option value="Santarém">Santarém</option>
									<option value="Santarém Novo">Santarém Novo</option>
									<option value="Santo Antônio do Tauá">
										Santo Antônio do Tauá
									</option>
									<option value="São Caetano de Ooptgroupelas">
										São Caetano de Ooptgroupelas
									</option>
									<option value="São Domingos do Araguaia">
										São Domingos do Araguaia
									</option>
									<option value="São Domingos do Capim">
										São Domingos do Capim
									</option>
									<option value="São Félix do Xingu">São Félix do Xingu</option>
									<option value="São Francisco do Pará">
										São Francisco do Pará
									</option>
									<option value="São Geraldo do Araguaia">
										São Geraldo do Araguaia
									</option>
									<option value="São João da Ponta">São João da Ponta</option>
									<option value="São João de Pirabas">
										São João de Pirabas
									</option>
									<option value="São João do Araguaia">
										São João do Araguaia
									</option>
									<option value="São Miguel do Guamá">
										São Miguel do Guamá
									</option>
									<option value="São Sebastião da Boa Vista">
										São Sebastião da Boa Vista
									</option>
									<option value="Sapucaia">Sapucaia</option>
									<option value="Senador José Porfírio">
										Senador José Porfírio
									</option>
									<option value="Soure">Soure</option>
									<option value="Tailândia">Tailândia</option>
									<option value="Terra Alta">Terra Alta</option>
									<option value="Terra Santa">Terra Santa</option>
									<option value="Tomé-Açu">Tomé-Açu</option>
									<option value="Tracuateua">Tracuateua</option>
									<option value="Trairão">Trairão</option>
									<option value="Tucumã">Tucumã</option>
									<option value="Tucuruí">Tucuruí</option>
									<option value="Ulianópolis">Ulianópolis</option>
									<option value="Uruará">Uruará</option>
									<option value="Vigia">Vigia</option>
									<option value="Viseu">Viseu</option>
									<option value="Vitória do Xingu">Vitória do Xingu</option>
									<option value="Xinguara">Xinguara</option>
								</optgroup>
								<optgroup class="state-ap state-group d-none">
									<option value="Serra do Navio">Serra do Navio</option>
									<option value="Amapá">Amapá</option>
									<option value="Pedra Branca do Amapari">
										Pedra Branca do Amapari
									</option>
									<option value="Calçoene">Calçoene</option>
									<option value="Cutias">Cutias</option>
									<option value="Ferreira Gomes">Ferreira Gomes</option>
									<option value="Itaubal">Itaubal</option>
									<option value="Laranjal do Jari">Laranjal do Jari</option>
									<option value="Macapá">Macapá</option>
									<option value="Mazagão">Mazagão</option>
									<option value="Oiapoque">Oiapoque</option>
									<option value="Porto Grande">Porto Grande</option>
									<option value="Pracuúba">Pracuúba</option>
									<option value="Santana">Santana</option>
									<option value="Tartarugalzinho">Tartarugalzinho</option>
									<option value="Vitória do Jari">Vitória do Jari</option>
								</optgroup>
								<optgroup class="state-to state-group d-none">
									<option value="Abreulândia">Abreulândia</option>
									<option value="Aguiarnópolis">Aguiarnópolis</option>
									<option value="Aliança do Tocantins">
										Aliança do Tocantins
									</option>
									<option value="Almas">Almas</option>
									<option value="Alvorada">Alvorada</option>
									<option value="Ananás">Ananás</option>
									<option value="Angico">Angico</option>
									<option value="Aparecida do Rio Negro">
										Aparecida do Rio Negro
									</option>
									<option value="Aragominas">Aragominas</option>
									<option value="Araguacema">Araguacema</option>
									<option value="Araguaçu">Araguaçu</option>
									<option value="Araguaína">Araguaína</option>
									<option value="Araguanã">Araguanã</option>
									<option value="Araguatins">Araguatins</option>
									<option value="Arapoema">Arapoema</option>
									<option value="Arraias">Arraias</option>
									<option value="Augustinópolis">Augustinópolis</option>
									<option value="Aurora do Tocantins">
										Aurora do Tocantins
									</option>
									<option value="Axixá do Tocantins">Axixá do Tocantins</option>
									<option value="Babaçulândia">Babaçulândia</option>
									<option value="Bandeirantes do Tocantins">
										Bandeirantes do Tocantins
									</option>
									<option value="Barra do Ouro">Barra do Ouro</option>
									<option value="Barrolândia">Barrolândia</option>
									<option value="Bernardo Sayão">Bernardo Sayão</option>
									<option value="Bom Jesus do Tocantins">
										Bom Jesus do Tocantins
									</option>
									<option value="Brasilândia do Tocantins">
										Brasilândia do Tocantins
									</option>
									<option value="Brejinho de Nazaré">Brejinho de Nazaré</option>
									<option value="Buriti do Tocantins">
										Buriti do Tocantins
									</option>
									<option value="Cachoeirinha">Cachoeirinha</option>
									<option value="Campos Lindos">Campos Lindos</option>
									<option value="Cariri do Tocantins">
										Cariri do Tocantins
									</option>
									<option value="Carmolândia">Carmolândia</option>
									<option value="Carrasco Bonito">Carrasco Bonito</option>
									<option value="Caseara">Caseara</option>
									<option value="Centenário">Centenário</option>
									<option value="Chapada de Areia">Chapada de Areia</option>
									<option value="Chapada da Natividade">
										Chapada da Natividade
									</option>
									<option value="Colinas do Tocantins">
										Colinas do Tocantins
									</option>
									<option value="Combinado">Combinado</option>
									<option value="Conceição do Tocantins">
										Conceição do Tocantins
									</option>
									<option value="Couto Magalhães">Couto Magalhães</option>
									<option value="Cristalândia">Cristalândia</option>
									<option value="Crixás do Tocantins">
										Crixás do Tocantins
									</option>
									<option value="Darcinópolis">Darcinópolis</option>
									<option value="Dianópolis">Dianópolis</option>
									<option value="optgroupinópolis do Tocantins">
										optgroupinópolis do Tocantins
									</option>
									<option value="Dois Irmãos do Tocantins">
										Dois Irmãos do Tocantins
									</option>
									<option value="Dueré">Dueré</option>
									<option value="Esperantina">Esperantina</option>
									<option value="Fátima">Fátima</option>
									<option value="Figueirópolis">Figueirópolis</option>
									<option value="Filadélfia">Filadélfia</option>
									<option value="Formoso do Araguaia">
										Formoso do Araguaia
									</option>
									<option value="Fortaleza do Tabocão">
										Fortaleza do Tabocão
									</option>
									<option value="Goianorte">Goianorte</option>
									<option value="Goiatins">Goiatins</option>
									<option value="Guaraí">Guaraí</option>
									<option value="Gurupi">Gurupi</option>
									<option value="Ipueiras">Ipueiras</option>
									<option value="Itacajá">Itacajá</option>
									<option value="Itaguatins">Itaguatins</option>
									<option value="Itapiratins">Itapiratins</option>
									<option value="Itaporã do Tocantins">
										Itaporã do Tocantins
									</option>
									<option value="Jaú do Tocantins">Jaú do Tocantins</option>
									<option value="Juarina">Juarina</option>
									<option value="Lagoa da Confusão">Lagoa da Confusão</option>
									<option value="Lagoa do Tocantins">Lagoa do Tocantins</option>
									<option value="Lajeado">Lajeado</option>
									<option value="Lavandeira">Lavandeira</option>
									<option value="Lizarda">Lizarda</option>
									<option value="Luzinópolis">Luzinópolis</option>
									<option value="Marianópolis do Tocantins">
										Marianópolis do Tocantins
									</option>
									<option value="Mateiros">Mateiros</option>
									<option value="Maurilândia do Tocantins">
										Maurilândia do Tocantins
									</option>
									<option value="Miracema do Tocantins">
										Miracema do Tocantins
									</option>
									<option value="Miranorte">Miranorte</option>
									<option value="Monte do Carmo">Monte do Carmo</option>
									<option value="Monte Santo do Tocantins">
										Monte Santo do Tocantins
									</option>
									<option value="Palmeiras do Tocantins">
										Palmeiras do Tocantins
									</option>
									<option value="Muricilândia">Muricilândia</option>
									<option value="Natividade">Natividade</option>
									<option value="Nazaré">Nazaré</option>
									<option value="Nova Olinda">Nova Olinda</option>
									<option value="Nova Rosalândia">Nova Rosalândia</option>
									<option value="Novo Acordo">Novo Acordo</option>
									<option value="Novo Alegre">Novo Alegre</option>
									<option value="Novo Jardim">Novo Jardim</option>
									<option value="Oliveira de Fátima">Oliveira de Fátima</option>
									<option value="Palmeirante">Palmeirante</option>
									<option value="Palmeirópolis">Palmeirópolis</option>
									<option value="Paraíso do Tocantins">
										Paraíso do Tocantins
									</option>
									<option value="Paranã">Paranã</option>
									<option value="Pau D'Arco">Pau D'Arco</option>
									<option value="Pedro Afonso">Pedro Afonso</option>
									<option value="Peixe">Peixe</option>
									<option value="Pequizeiro">Pequizeiro</option>
									<option value="Colméia">Colméia</option>
									<option value="Pindorama do Tocantins">
										Pindorama do Tocantins
									</option>
									<option value="Piraquê">Piraquê</option>
									<option value="Pium">Pium</option>
									<option value="Ponte Alta do Bom Jesus">
										Ponte Alta do Bom Jesus
									</option>
									<option value="Ponte Alta do Tocantins">
										Ponte Alta do Tocantins
									</option>
									<option value="Porto Alegre do Tocantins">
										Porto Alegre do Tocantins
									</option>
									<option value="Porto Nacional">Porto Nacional</option>
									<option value="Praia Norte">Praia Norte</option>
									<option value="Presidente Kennedy">Presidente Kennedy</option>
									<option value="Pugmil">Pugmil</option>
									<option value="Recursolândia">Recursolândia</option>
									<option value="Riachinho">Riachinho</option>
									<option value="Rio da Conceição">Rio da Conceição</option>
									<option value="Rio dos Bois">Rio dos Bois</option>
									<option value="Rio Sono">Rio Sono</option>
									<option value="Sampaio">Sampaio</option>
									<option value="Sandolândia">Sandolândia</option>
									<option value="Santa Fé do Araguaia">
										Santa Fé do Araguaia
									</option>
									<option value="Santa Maria do Tocantins">
										Santa Maria do Tocantins
									</option>
									<option value="Santa Rita do Tocantins">
										Santa Rita do Tocantins
									</option>
									<option value="Santa Rosa do Tocantins">
										Santa Rosa do Tocantins
									</option>
									<option value="Santa Tereza do Tocantins">
										Santa Tereza do Tocantins
									</option>
									<option value="Santa Terezinha do Tocantins">
										Santa Terezinha do Tocantins
									</option>
									<option value="São Bento do Tocantins">
										São Bento do Tocantins
									</option>
									<option value="São Félix do Tocantins">
										São Félix do Tocantins
									</option>
									<option value="São Miguel do Tocantins">
										São Miguel do Tocantins
									</option>
									<option value="São Salvador do Tocantins">
										São Salvador do Tocantins
									</option>
									<option value="São Sebastião do Tocantins">
										São Sebastião do Tocantins
									</option>
									<option value="São Valério">São Valério</option>
									<option value="Silvanópolis">Silvanópolis</option>
									<option value="Sítio Novo do Tocantins">
										Sítio Novo do Tocantins
									</option>
									<option value="Sucupira">Sucupira</option>
									<option value="Taguatinga">Taguatinga</option>
									<option value="Taipas do Tocantins">
										Taipas do Tocantins
									</option>
									<option value="Talismã">Talismã</option>
									<option value="Palmas">Palmas</option>
									<option value="Tocantínia">Tocantínia</option>
									<option value="Tocantinópolis">Tocantinópolis</option>
									<option value="Tupirama">Tupirama</option>
									<option value="Tupiratins">Tupiratins</option>
									<option value="Wanderlândia">Wanderlândia</option>
									<option value="Xambioá">Xambioá</option>
								</optgroup>
								<optgroup class="state-ma state-group d-none">
									<option value="Açailândia">Açailândia</option>
									<option value="Afonso Cunha">Afonso Cunha</option>
									<option value="Água Doce do Maranhão">
										Água Doce do Maranhão
									</option>
									<option value="Alcântara">Alcântara</option>
									<option value="Aldeias Altas">Aldeias Altas</option>
									<option value="Altamira do Maranhão">
										Altamira do Maranhão
									</option>
									<option value="Alto Alegre do Maranhão">
										Alto Alegre do Maranhão
									</option>
									<option value="Alto Alegre do Pindaré">
										Alto Alegre do Pindaré
									</option>
									<option value="Alto Parnaíba">Alto Parnaíba</option>
									<option value="Amapá do Maranhão">Amapá do Maranhão</option>
									<option value="Amarante do Maranhão">
										Amarante do Maranhão
									</option>
									<option value="Anajatuba">Anajatuba</option>
									<option value="Anapurus">Anapurus</option>
									<option value="Apicum-Açu">Apicum-Açu</option>
									<option value="Araguanã">Araguanã</option>
									<option value="Araioses">Araioses</option>
									<option value="Arame">Arame</option>
									<option value="Arari">Arari</option>
									<option value="Axixá">Axixá</option>
									<option value="Bacabal">Bacabal</option>
									<option value="Bacabeira">Bacabeira</option>
									<option value="Bacuri">Bacuri</option>
									<option value="Bacurituba">Bacurituba</option>
									<option value="Balsas">Balsas</option>
									<option value="Barão de Grajaú">Barão de Grajaú</option>
									<option value="Barra do Corda">Barra do Corda</option>
									<option value="Barreirinhas">Barreirinhas</option>
									<option value="Belágua">Belágua</option>
									<option value="Bela Vista do Maranhão">
										Bela Vista do Maranhão
									</option>
									<option value="Benedito Leite">Benedito Leite</option>
									<option value="Bequimão">Bequimão</option>
									<option value="Bernardo do Mearim">Bernardo do Mearim</option>
									<option value="Boa Vista do Gurupi">
										Boa Vista do Gurupi
									</option>
									<option value="Bom Jardim">Bom Jardim</option>
									<option value="Bom Jesus das Selvas">
										Bom Jesus das Selvas
									</option>
									<option value="Bom Lugar">Bom Lugar</option>
									<option value="Brejo">Brejo</option>
									<option value="Brejo de Areia">Brejo de Areia</option>
									<option value="Buriti">Buriti</option>
									<option value="Buriti Bravo">Buriti Bravo</option>
									<option value="Buriticupu">Buriticupu</option>
									<option value="Buritirana">Buritirana</option>
									<option value="Cachoeira Grande">Cachoeira Grande</option>
									<option value="Cajapió">Cajapió</option>
									<option value="Cajari">Cajari</option>
									<option value="Campestre do Maranhão">
										Campestre do Maranhão
									</option>
									<option value="Cândido Mendes">Cândido Mendes</option>
									<option value="Cantanhede">Cantanhede</option>
									<option value="Capinzal do Norte">Capinzal do Norte</option>
									<option value="Carolina">Carolina</option>
									<option value="Carutapera">Carutapera</option>
									<option value="Caxias">Caxias</option>
									<option value="Cedral">Cedral</option>
									<option value="Central do Maranhão">
										Central do Maranhão
									</option>
									<option value="Centro do Guilherme">
										Centro do Guilherme
									</option>
									<option value="Centro Novo do Maranhão">
										Centro Novo do Maranhão
									</option>
									<option value="Chapadinha">Chapadinha</option>
									<option value="Cidelândia">Cidelândia</option>
									<option value="Codó">Codó</option>
									<option value="Coelho Neto">Coelho Neto</option>
									<option value="Colinas">Colinas</option>
									<option value="Conceição do Lago-Açu">
										Conceição do Lago-Açu
									</option>
									<option value="Coroatá">Coroatá</option>
									<option value="Cururupu">Cururupu</option>
									<option value="Davinópolis">Davinópolis</option>
									<option value="Dom Pedro">Dom Pedro</option>
									<option value="Duque Bacelar">Duque Bacelar</option>
									<option value="Esperantinópolis">Esperantinópolis</option>
									<option value="Estreito">Estreito</option>
									<option value="Feira Nova do Maranhão">
										Feira Nova do Maranhão
									</option>
									<option value="Fernando Falcão">Fernando Falcão</option>
									<option value="Formosa da Serra Negra">
										Formosa da Serra Negra
									</option>
									<option value="Fortaleza dos Nogueiras">
										Fortaleza dos Nogueiras
									</option>
									<option value="Fortuna">Fortuna</option>
									<option value="Godofredo Viana">Godofredo Viana</option>
									<option value="Gonçalves Dias">Gonçalves Dias</option>
									<option value="Governador Archer">Governador Archer</option>
									<option value="Governador Edison Lobão">
										Governador Edison Lobão
									</option>
									<option value="Governador Eugênio Barros">
										Governador Eugênio Barros
									</option>
									<option value="Governador Luiz Rocha">
										Governador Luiz Rocha
									</option>
									<option value="Governador Newton Bello">
										Governador Newton Bello
									</option>
									<option value="Governador Nunes Freire">
										Governador Nunes Freire
									</option>
									<option value="Graça Aranha">Graça Aranha</option>
									<option value="Grajaú">Grajaú</option>
									<option value="Guimarães">Guimarães</option>
									<option value="Humberto de Campos">Humberto de Campos</option>
									<option value="Icatu">Icatu</option>
									<option value="Igarapé do Meio">Igarapé do Meio</option>
									<option value="Igarapé Grande">Igarapé Grande</option>
									<option value="Imperatriz">Imperatriz</option>
									<option value="Itaipava do Grajaú">Itaipava do Grajaú</option>
									<option value="Itapecuru Mirim">Itapecuru Mirim</option>
									<option value="Itinga do Maranhão">Itinga do Maranhão</option>
									<option value="Jatobá">Jatobá</option>
									<option value="Jenipapo dos Vieiras">
										Jenipapo dos Vieiras
									</option>
									<option value="João Lisboa">João Lisboa</option>
									<option value="Joselândia">Joselândia</option>
									<option value="Junco do Maranhão">Junco do Maranhão</option>
									<option value="Lago da Pedra">Lago da Pedra</option>
									<option value="Lago do Junco">Lago do Junco</option>
									<option value="Lago Verde">Lago Verde</option>
									<option value="Lagoa do Mato">Lagoa do Mato</option>
									<option value="Lago dos Rodrigues">Lago dos Rodrigues</option>
									<option value="Lagoa Grande do Maranhão">
										Lagoa Grande do Maranhão
									</option>
									<option value="Lajeado Novo">Lajeado Novo</option>
									<option value="Lima Campos">Lima Campos</option>
									<option value="Loreto">Loreto</option>
									<option value="Luís Domingues">Luís Domingues</option>
									<option value="Magalhães de Almeida">
										Magalhães de Almeida
									</option>
									<option value="Maracaçumé">Maracaçumé</option>
									<option value="Marajá do Sena">Marajá do Sena</option>
									<option value="Maranhãozinho">Maranhãozinho</option>
									<option value="Mata Roma">Mata Roma</option>
									<option value="Matinha">Matinha</option>
									<option value="Matões">Matões</option>
									<option value="Matões do Norte">Matões do Norte</option>
									<option value="Milagres do Maranhão">
										Milagres do Maranhão
									</option>
									<option value="Mirador">Mirador</option>
									<option value="Miranda do Norte">Miranda do Norte</option>
									<option value="Mirinzal">Mirinzal</option>
									<option value="Monção">Monção</option>
									<option value="Montes Altos">Montes Altos</option>
									<option value="Morros">Morros</option>
									<option value="Nina Rodrigues">Nina Rodrigues</option>
									<option value="Nova Colinas">Nova Colinas</option>
									<option value="Nova Iorque">Nova Iorque</option>
									<option value="Nova Olinda do Maranhão">
										Nova Olinda do Maranhão
									</option>
									<option value="Olho D'Água das Cunhãs">
										Olho D'Água das Cunhãs
									</option>
									<option value="Olinda Nova do Maranhão">
										Olinda Nova do Maranhão
									</option>
									<option value="Paço do Lumiar">Paço do Lumiar</option>
									<option value="Palmeirândia">Palmeirândia</option>
									<option value="Paraibano">Paraibano</option>
									<option value="Parnarama">Parnarama</option>
									<option value="Passagem Franca">Passagem Franca</option>
									<option value="Pastos Bons">Pastos Bons</option>
									<option value="Paulino Neves">Paulino Neves</option>
									<option value="Paulo Ramos">Paulo Ramos</option>
									<option value="Pedreiras">Pedreiras</option>
									<option value="Pedro do Rosário">Pedro do Rosário</option>
									<option value="Penalva">Penalva</option>
									<option value="Peri Mirim">Peri Mirim</option>
									<option value="Peritoró">Peritoró</option>
									<option value="Pindaré-Mirim">Pindaré-Mirim</option>
									<option value="Pinheiro">Pinheiro</option>
									<option value="Pio XII">Pio XII</option>
									<option value="Pirapemas">Pirapemas</option>
									<option value="Poção de Pedras">Poção de Pedras</option>
									<option value="Porto Franco">Porto Franco</option>
									<option value="Porto Rico do Maranhão">
										Porto Rico do Maranhão
									</option>
									<option value="Presidente Dutra">Presidente Dutra</option>
									<option value="Presidente Juscelino">
										Presidente Juscelino
									</option>
									<option value="Presidente Médici">Presidente Médici</option>
									<option value="Presidente Sarney">Presidente Sarney</option>
									<option value="Presidente Vargas">Presidente Vargas</option>
									<option value="Primeira Cruz">Primeira Cruz</option>
									<option value="Raposa">Raposa</option>
									<option value="Riachão">Riachão</option>
									<option value="Ribamar Fiquene">Ribamar Fiquene</option>
									<option value="Rosário">Rosário</option>
									<option value="Sambaíba">Sambaíba</option>
									<option value="Santa Filomena do Maranhão">
										Santa Filomena do Maranhão
									</option>
									<option value="Santa Helena">Santa Helena</option>
									<option value="Santa Inês">Santa Inês</option>
									<option value="Santa Luzia">Santa Luzia</option>
									<option value="Santa Luzia do Paruá">
										Santa Luzia do Paruá
									</option>
									<option value="Santa Quitéria do Maranhão">
										Santa Quitéria do Maranhão
									</option>
									<option value="Santa Rita">Santa Rita</option>
									<option value="Santana do Maranhão">
										Santana do Maranhão
									</option>
									<option value="Santo Amaro do Maranhão">
										Santo Amaro do Maranhão
									</option>
									<option value="Santo Antônio dos Lopes">
										Santo Antônio dos Lopes
									</option>
									<option value="São Benedito do Rio Preto">
										São Benedito do Rio Preto
									</option>
									<option value="São Bento">São Bento</option>
									<option value="São Bernardo">São Bernardo</option>
									<option value="São Domingos do Azeitão">
										São Domingos do Azeitão
									</option>
									<option value="São Domingos do Maranhão">
										São Domingos do Maranhão
									</option>
									<option value="São Félix de Balsas">
										São Félix de Balsas
									</option>
									<option value="São Francisco do Brejão">
										São Francisco do Brejão
									</option>
									<option value="São Francisco do Maranhão">
										São Francisco do Maranhão
									</option>
									<option value="São João Batista">São João Batista</option>
									<option value="São João do Carú">São João do Carú</option>
									<option value="São João do Paraíso">
										São João do Paraíso
									</option>
									<option value="São João do Soter">São João do Soter</option>
									<option value="São João dos Patos">São João dos Patos</option>
									<option value="São José de Ribamar">
										São José de Ribamar
									</option>
									<option value="São José dos Basílios">
										São José dos Basílios
									</option>
									<option value="São Luís">São Luís</option>
									<option value="São Luís Gonzaga do Maranhão">
										São Luís Gonzaga do Maranhão
									</option>
									<option value="São Mateus do Maranhão">
										São Mateus do Maranhão
									</option>
									<option value="São Pedro da Água Branca">
										São Pedro da Água Branca
									</option>
									<option value="São Pedro dos Crentes">
										São Pedro dos Crentes
									</option>
									<option value="São Raimundo das Mangabeiras">
										São Raimundo das Mangabeiras
									</option>
									<option value="São Raimundo do Doca Bezerra">
										São Raimundo do Doca Bezerra
									</option>
									<option value="São Roberto">São Roberto</option>
									<option value="São Vicente Ferrer">São Vicente Ferrer</option>
									<option value="Satubinha">Satubinha</option>
									<option value="Senador Alexandre Costa">
										Senador Alexandre Costa
									</option>
									<option value="Senador La Rocque">Senador La Rocque</option>
									<option value="Serrano do Maranhão">
										Serrano do Maranhão
									</option>
									<option value="Sítio Novo">Sítio Novo</option>
									<option value="Sucupira do Norte">Sucupira do Norte</option>
									<option value="Sucupira do Riachão">
										Sucupira do Riachão
									</option>
									<option value="Tasso Fragoso">Tasso Fragoso</option>
									<option value="Timbiras">Timbiras</option>
									<option value="Timon">Timon</option>
									<option value="Trizidela do Vale">Trizidela do Vale</option>
									<option value="Tufilândia">Tufilândia</option>
									<option value="Tuntum">Tuntum</option>
									<option value="Turiaçu">Turiaçu</option>
									<option value="Turilândia">Turilândia</option>
									<option value="Tutóia">Tutóia</option>
									<option value="Urbano Santos">Urbano Santos</option>
									<option value="Vargem Grande">Vargem Grande</option>
									<option value="Viana">Viana</option>
									<option value="Vila Nova dos Martírios">
										Vila Nova dos Martírios
									</option>
									<option value="Vitória do Mearim">Vitória do Mearim</option>
									<option value="Vitorino Freire">Vitorino Freire</option>
									<option value="Zé Doca">Zé Doca</option>
								</optgroup>
								<optgroup class="state-pi state-group d-none">
									<option value="Acauã">Acauã</option>
									<option value="Agricolândia">Agricolândia</option>
									<option value="Água Branca">Água Branca</option>
									<option value="Alagoinha do Piauí">Alagoinha do Piauí</option>
									<option value="Alegrete do Piauí">Alegrete do Piauí</option>
									<option value="Alto Longá">Alto Longá</option>
									<option value="Altos">Altos</option>
									<option value="Alvorada do Gurguéia">
										Alvorada do Gurguéia
									</option>
									<option value="Amarante">Amarante</option>
									<option value="Angical do Piauí">Angical do Piauí</option>
									<option value="Anísio de Abreu">Anísio de Abreu</option>
									<option value="Antônio Almeida">Antônio Almeida</option>
									<option value="Aroazes">Aroazes</option>
									<option value="Aroeiras do Itaim">Aroeiras do Itaim</option>
									<option value="Arraial">Arraial</option>
									<option value="Assunção do Piauí">Assunção do Piauí</option>
									<option value="Avelino Lopes">Avelino Lopes</option>
									<option value="Baixa Grande do Ribeiro">
										Baixa Grande do Ribeiro
									</option>
									<option value="Barra D'Alcântara">Barra D'Alcântara</option>
									<option value="Barras">Barras</option>
									<option value="Barreiras do Piauí">Barreiras do Piauí</option>
									<option value="Barro Duro">Barro Duro</option>
									<option value="Batalha">Batalha</option>
									<option value="Bela Vista do Piauí">
										Bela Vista do Piauí
									</option>
									<option value="Belém do Piauí">Belém do Piauí</option>
									<option value="Beneditinos">Beneditinos</option>
									<option value="Bertolínia">Bertolínia</option>
									<option value="Betânia do Piauí">Betânia do Piauí</option>
									<option value="Boa Hora">Boa Hora</option>
									<option value="Bocaina">Bocaina</option>
									<option value="Bom Jesus">Bom Jesus</option>
									<option value="Bom Princípio do Piauí">
										Bom Princípio do Piauí
									</option>
									<option value="Bonfim do Piauí">Bonfim do Piauí</option>
									<option value="Boqueirão do Piauí">Boqueirão do Piauí</option>
									<option value="Brasileira">Brasileira</option>
									<option value="Brejo do Piauí">Brejo do Piauí</option>
									<option value="Buriti dos Lopes">Buriti dos Lopes</option>
									<option value="Buriti dos Montes">Buriti dos Montes</option>
									<option value="Cabeceiras do Piauí">
										Cabeceiras do Piauí
									</option>
									<option value="Cajazeiras do Piauí">
										Cajazeiras do Piauí
									</option>
									<option value="Cajueiro da Praia">Cajueiro da Praia</option>
									<option value="Caldeirão Grande do Piauí">
										Caldeirão Grande do Piauí
									</option>
									<option value="Campinas do Piauí">Campinas do Piauí</option>
									<option value="Campo Alegre do Fidalgo">
										Campo Alegre do Fidalgo
									</option>
									<option value="Campo Grande do Piauí">
										Campo Grande do Piauí
									</option>
									<option value="Campo Largo do Piauí">
										Campo Largo do Piauí
									</option>
									<option value="Campo Maior">Campo Maior</option>
									<option value="Canavieira">Canavieira</option>
									<option value="Canto do Buriti">Canto do Buriti</option>
									<option value="Capitão de Campos">Capitão de Campos</option>
									<option value="Capitão Gervásio Oliveira">
										Capitão Gervásio Oliveira
									</option>
									<option value="Caracol">Caracol</option>
									<option value="Caraúbas do Piauí">Caraúbas do Piauí</option>
									<option value="Caridade do Piauí">Caridade do Piauí</option>
									<option value="Castelo do Piauí">Castelo do Piauí</option>
									<option value="Caxingó">Caxingó</option>
									<option value="Cocal">Cocal</option>
									<option value="Cocal de Telha">Cocal de Telha</option>
									<option value="Cocal dos Alves">Cocal dos Alves</option>
									<option value="Coivaras">Coivaras</option>
									<option value="Colônia do Gurguéia">
										Colônia do Gurguéia
									</option>
									<option value="Colônia do Piauí">Colônia do Piauí</option>
									<option value="Conceição do Canindé">
										Conceição do Canindé
									</option>
									<option value="Coronel José Dias">Coronel José Dias</option>
									<option value="Corrente">Corrente</option>
									<option value="Cristalândia do Piauí">
										Cristalândia do Piauí
									</option>
									<option value="Cristino Castro">Cristino Castro</option>
									<option value="Curimatá">Curimatá</option>
									<option value="Currais">Currais</option>
									<option value="Curralinhos">Curralinhos</option>
									<option value="Curral Novo do Piauí">
										Curral Novo do Piauí
									</option>
									<option value="Demerval Lobão">Demerval Lobão</option>
									<option value="Dirceu Arcoverde">Dirceu Arcoverde</option>
									<option value="Dom Expedito Lopes">Dom Expedito Lopes</option>
									<option value="Domingos Mourão">Domingos Mourão</option>
									<option value="Dom Inocêncio">Dom Inocêncio</option>
									<option value="Elesbão Veloso">Elesbão Veloso</option>
									<option value="Eliseu Martins">Eliseu Martins</option>
									<option value="Esperantina">Esperantina</option>
									<option value="Fartura do Piauí">Fartura do Piauí</option>
									<option value="Flores do Piauí">Flores do Piauí</option>
									<option value="Floresta do Piauí">Floresta do Piauí</option>
									<option value="Floriano">Floriano</option>
									<option value="Francinópolis">Francinópolis</option>
									<option value="Francisco Ayres">Francisco Ayres</option>
									<option value="Francisco Macedo">Francisco Macedo</option>
									<option value="Francisco Santos">Francisco Santos</option>
									<option value="Fronteiras">Fronteiras</option>
									<option value="Geminiano">Geminiano</option>
									<option value="Gilbués">Gilbués</option>
									<option value="Guadalupe">Guadalupe</option>
									<option value="Guaribas">Guaribas</option>
									<option value="Hugo Napoleão">Hugo Napoleão</option>
									<option value="Ilha Grande">Ilha Grande</option>
									<option value="Inhuma">Inhuma</option>
									<option value="Ipiranga do Piauí">Ipiranga do Piauí</option>
									<option value="Isaías Coelho">Isaías Coelho</option>
									<option value="Itainópolis">Itainópolis</option>
									<option value="Itaueira">Itaueira</option>
									<option value="Jacobina do Piauí">Jacobina do Piauí</option>
									<option value="Jaicós">Jaicós</option>
									<option value="Jardim do Mulato">Jardim do Mulato</option>
									<option value="Jatobá do Piauí">Jatobá do Piauí</option>
									<option value="Jerumenha">Jerumenha</option>
									<option value="João Costa">João Costa</option>
									<option value="Joaquim Pires">Joaquim Pires</option>
									<option value="Joca Marques">Joca Marques</option>
									<option value="José de Freitas">José de Freitas</option>
									<option value="Juazeiro do Piauí">Juazeiro do Piauí</option>
									<option value="Júlio Borges">Júlio Borges</option>
									<option value="Jurema">Jurema</option>
									<option value="Lagoinha do Piauí">Lagoinha do Piauí</option>
									<option value="Lagoa Alegre">Lagoa Alegre</option>
									<option value="Lagoa do Barro do Piauí">
										Lagoa do Barro do Piauí
									</option>
									<option value="Lagoa de São Francisco">
										Lagoa de São Francisco
									</option>
									<option value="Lagoa do Piauí">Lagoa do Piauí</option>
									<option value="Lagoa do Sítio">Lagoa do Sítio</option>
									<option value="Landri Sales">Landri Sales</option>
									<option value="Luís Correia">Luís Correia</option>
									<option value="Luzilândia">Luzilândia</option>
									<option value="Madeiro">Madeiro</option>
									<option value="Manoel Emídio">Manoel Emídio</option>
									<option value="Marcolândia">Marcolândia</option>
									<option value="Marcos Parente">Marcos Parente</option>
									<option value="Massapê do Piauí">Massapê do Piauí</option>
									<option value="Matias Olímpio">Matias Olímpio</option>
									<option value="Miguel Alves">Miguel Alves</option>
									<option value="Miguel Leão">Miguel Leão</option>
									<option value="Milton Brandão">Milton Brandão</option>
									<option value="Monsenhor Gil">Monsenhor Gil</option>
									<option value="Monsenhor Hipólito">Monsenhor Hipólito</option>
									<option value="Monte Alegre do Piauí">
										Monte Alegre do Piauí
									</option>
									<option value="Morro Cabeça no Tempo">
										Morro Cabeça no Tempo
									</option>
									<option value="Morro do Chapéu do Piauí">
										Morro do Chapéu do Piauí
									</option>
									<option value="Murici dos Portelas">
										Murici dos Portelas
									</option>
									<option value="Nazaré do Piauí">Nazaré do Piauí</option>
									<option value="Nazária">Nazária</option>
									<option value="Nossa Senhora de Nazaré">
										Nossa Senhora de Nazaré
									</option>
									<option value="Nossa Senhora dos Remédios">
										Nossa Senhora dos Remédios
									</option>
									<option value="Novo Oriente do Piauí">
										Novo Oriente do Piauí
									</option>
									<option value="Novo Santo Antônio">Novo Santo Antônio</option>
									<option value="Oeiras">Oeiras</option>
									<option value="Olho D'Água do Piauí">
										Olho D'Água do Piauí
									</option>
									<option value="Padre Marcos">Padre Marcos</option>
									<option value="Paes Landim">Paes Landim</option>
									<option value="Pajeú do Piauí">Pajeú do Piauí</option>
									<option value="Palmeira do Piauí">Palmeira do Piauí</option>
									<option value="Palmeirais">Palmeirais</option>
									<option value="Paquetá">Paquetá</option>
									<option value="Parnaguá">Parnaguá</option>
									<option value="Parnaíba">Parnaíba</option>
									<option value="Passagem Franca do Piauí">
										Passagem Franca do Piauí
									</option>
									<option value="Patos do Piauí">Patos do Piauí</option>
									<option value="Pau D'Arco do Piauí">
										Pau D'Arco do Piauí
									</option>
									<option value="Paulistana">Paulistana</option>
									<option value="Pavussu">Pavussu</option>
									<option value="Pedro II">Pedro II</option>
									<option value="Pedro Laurentino">Pedro Laurentino</option>
									<option value="Nova Santa Rita">Nova Santa Rita</option>
									<option value="Picos">Picos</option>
									<option value="Pimenteiras">Pimenteiras</option>
									<option value="Pio IX">Pio IX</option>
									<option value="Piracuruca">Piracuruca</option>
									<option value="Piripiri">Piripiri</option>
									<option value="Porto">Porto</option>
									<option value="Porto Alegre do Piauí">
										Porto Alegre do Piauí
									</option>
									<option value="Prata do Piauí">Prata do Piauí</option>
									<option value="Queimada Nova">Queimada Nova</option>
									<option value="Redenção do Gurguéia">
										Redenção do Gurguéia
									</option>
									<option value="Regeneração">Regeneração</option>
									<option value="Riacho Frio">Riacho Frio</option>
									<option value="Ribeira do Piauí">Ribeira do Piauí</option>
									<option value="Ribeiro Gonçalves">Ribeiro Gonçalves</option>
									<option value="Rio Grande do Piauí">
										Rio Grande do Piauí
									</option>
									<option value="Santa Cruz do Piauí">
										Santa Cruz do Piauí
									</option>
									<option value="Santa Cruz dos Milagres">
										Santa Cruz dos Milagres
									</option>
									<option value="Santa Filomena">Santa Filomena</option>
									<option value="Santa Luz">Santa Luz</option>
									<option value="Santana do Piauí">Santana do Piauí</option>
									<option value="Santa Rosa do Piauí">
										Santa Rosa do Piauí
									</option>
									<option value="Santo Antônio de Lisboa">
										Santo Antônio de Lisboa
									</option>
									<option value="Santo Antônio dos Milagres">
										Santo Antônio dos Milagres
									</option>
									<option value="Santo Inácio do Piauí">
										Santo Inácio do Piauí
									</option>
									<option value="São Braz do Piauí">São Braz do Piauí</option>
									<option value="São Félix do Piauí">São Félix do Piauí</option>
									<option value="São Francisco de Assis do Piauí">
										São Francisco de Assis do Piauí
									</option>
									<option value="São Francisco do Piauí">
										São Francisco do Piauí
									</option>
									<option value="São Gonçalo do Gurguéia">
										São Gonçalo do Gurguéia
									</option>
									<option value="São Gonçalo do Piauí">
										São Gonçalo do Piauí
									</option>
									<option value="São João da Canabrava">
										São João da Canabrava
									</option>
									<option value="São João da Fronteira">
										São João da Fronteira
									</option>
									<option value="São João da Serra">São João da Serra</option>
									<option value="São João da Varjota">
										São João da Varjota
									</option>
									<option value="São João do Arraial">
										São João do Arraial
									</option>
									<option value="São João do Piauí">São João do Piauí</option>
									<option value="São José do optgroupino">
										São José do optgroupino
									</option>
									<option value="São José do Peixe">São José do Peixe</option>
									<option value="São José do Piauí">São José do Piauí</option>
									<option value="São Julião">São Julião</option>
									<option value="São Lourenço do Piauí">
										São Lourenço do Piauí
									</option>
									<option value="São Luis do Piauí">São Luis do Piauí</option>
									<option value="São Miguel da Baixa Grande">
										São Miguel da Baixa Grande
									</option>
									<option value="São Miguel do Fidalgo">
										São Miguel do Fidalgo
									</option>
									<option value="São Miguel do Tapuio">
										São Miguel do Tapuio
									</option>
									<option value="São Pedro do Piauí">São Pedro do Piauí</option>
									<option value="São Raimundo Nonato">
										São Raimundo Nonato
									</option>
									<option value="Sebastião Barros">Sebastião Barros</option>
									<option value="Sebastião Leal">Sebastião Leal</option>
									<option value="Sigefredo Pacheco">Sigefredo Pacheco</option>
									<option value="Simões">Simões</option>
									<option value="Simplício Mendes">Simplício Mendes</option>
									<option value="Socorro do Piauí">Socorro do Piauí</option>
									<option value="Sussuapara">Sussuapara</option>
									<option value="Tamboril do Piauí">Tamboril do Piauí</option>
									<option value="Tanque do Piauí">Tanque do Piauí</option>
									<option value="Teresina">Teresina</option>
									<option value="União">União</option>
									<option value="Uruçuí">Uruçuí</option>
									<option value="Valença do Piauí">Valença do Piauí</option>
									<option value="Várzea Branca">Várzea Branca</option>
									<option value="Várzea Grande">Várzea Grande</option>
									<option value="Vera Mendes">Vera Mendes</option>
									<option value="Vila Nova do Piauí">Vila Nova do Piauí</option>
									<option value="Wall Ferraz">Wall Ferraz</option>
								</optgroup>
								<optgroup class="state-ce state-group d-none">
									<option value="Abaiara">Abaiara</option>
									<option value="Acarape">Acarape</option>
									<option value="Acaraú">Acaraú</option>
									<option value="Acopiara">Acopiara</option>
									<option value="Aiuaba">Aiuaba</option>
									<option value="Alcântaras">Alcântaras</option>
									<option value="Altaneira">Altaneira</option>
									<option value="Alto Santo">Alto Santo</option>
									<option value="Amontada">Amontada</option>
									<option value="Antonina do Norte">Antonina do Norte</option>
									<option value="Apuiarés">Apuiarés</option>
									<option value="Aquiraz">Aquiraz</option>
									<option value="Aracati">Aracati</option>
									<option value="Aracoiaba">Aracoiaba</option>
									<option value="Ararendá">Ararendá</option>
									<option value="Araripe">Araripe</option>
									<option value="Aratuba">Aratuba</option>
									<option value="Arneiroz">Arneiroz</option>
									<option value="Assaré">Assaré</option>
									<option value="Aurora">Aurora</option>
									<option value="Baixio">Baixio</option>
									<option value="Banabuiú">Banabuiú</option>
									<option value="Barbalha">Barbalha</option>
									<option value="Barreira">Barreira</option>
									<option value="Barro">Barro</option>
									<option value="Barroquinha">Barroquinha</option>
									<option value="Baturité">Baturité</option>
									<option value="Beberibe">Beberibe</option>
									<option value="Bela Cruz">Bela Cruz</option>
									<option value="Boa Viagem">Boa Viagem</option>
									<option value="Brejo Santo">Brejo Santo</option>
									<option value="Camocim">Camocim</option>
									<option value="Campos Sales">Campos Sales</option>
									<option value="Canindé">Canindé</option>
									<option value="Capistrano">Capistrano</option>
									<option value="Caridade">Caridade</option>
									<option value="Cariré">Cariré</option>
									<option value="Caririaçu">Caririaçu</option>
									<option value="Cariús">Cariús</option>
									<option value="Carnaubal">Carnaubal</option>
									<option value="Cascavel">Cascavel</option>
									<option value="Catarina">Catarina</option>
									<option value="Catunda">Catunda</option>
									<option value="Caucaia">Caucaia</option>
									<option value="Cedro">Cedro</option>
									<option value="Chaval">Chaval</option>
									<option value="Choró">Choró</option>
									<option value="Chorozinho">Chorozinho</option>
									<option value="Coreaú">Coreaú</option>
									<option value="Crateús">Crateús</option>
									<option value="Crato">Crato</option>
									<option value="Croatá">Croatá</option>
									<option value="Cruz">Cruz</option>
									<option value="Deputado Irapuan Pinheiro">
										Deputado Irapuan Pinheiro
									</option>
									<option value="Ererê">Ererê</option>
									<option value="Eusébio">Eusébio</option>
									<option value="Farias Brito">Farias Brito</option>
									<option value="Forquilha">Forquilha</option>
									<option value="Fortaleza">Fortaleza</option>
									<option value="Fortim">Fortim</option>
									<option value="Frecheirinha">Frecheirinha</option>
									<option value="General Sampaio">General Sampaio</option>
									<option value="Graça">Graça</option>
									<option value="Granja">Granja</option>
									<option value="Granjeiro">Granjeiro</option>
									<option value="Groaíras">Groaíras</option>
									<option value="Guaiúba">Guaiúba</option>
									<option value="Guaraciaba do Norte">
										Guaraciaba do Norte
									</option>
									<option value="Guaramiranga">Guaramiranga</option>
									<option value="Hidrolândia">Hidrolândia</option>
									<option value="Horizonte">Horizonte</option>
									<option value="Ibaretama">Ibaretama</option>
									<option value="Ibiapina">Ibiapina</option>
									<option value="Ibicuitinga">Ibicuitinga</option>
									<option value="Icapuí">Icapuí</option>
									<option value="Icó">Icó</option>
									<option value="Iguatu">Iguatu</option>
									<option value="Independência">Independência</option>
									<option value="Ipaporanga">Ipaporanga</option>
									<option value="Ipaumirim">Ipaumirim</option>
									<option value="Ipu">Ipu</option>
									<option value="Ipueiras">Ipueiras</option>
									<option value="Iracema">Iracema</option>
									<option value="Irauçuba">Irauçuba</option>
									<option value="Itaiçaba">Itaiçaba</option>
									<option value="Itaitinga">Itaitinga</option>
									<option value="Itapagé">Itapagé</option>
									<option value="Itapipoca">Itapipoca</option>
									<option value="Itapiúna">Itapiúna</option>
									<option value="Itarema">Itarema</option>
									<option value="Itatira">Itatira</option>
									<option value="Jaguaretama">Jaguaretama</option>
									<option value="Jaguaribara">Jaguaribara</option>
									<option value="Jaguaribe">Jaguaribe</option>
									<option value="Jaguaruana">Jaguaruana</option>
									<option value="Jardim">Jardim</option>
									<option value="Jati">Jati</option>
									<option value="Jijoca de Jericoacoara">
										Jijoca de Jericoacoara
									</option>
									<option value="Juazeiro do Norte">Juazeiro do Norte</option>
									<option value="Jucás">Jucás</option>
									<option value="Lavras da Mangabeira">
										Lavras da Mangabeira
									</option>
									<option value="Limoeiro do Norte">Limoeiro do Norte</option>
									<option value="Madalena">Madalena</option>
									<option value="Maracanaú">Maracanaú</option>
									<option value="Maranguape">Maranguape</option>
									<option value="Marco">Marco</option>
									<option value="Martinópole">Martinópole</option>
									<option value="Massapê">Massapê</option>
									<option value="Mauriti">Mauriti</option>
									<option value="Meruoca">Meruoca</option>
									<option value="Milagres">Milagres</option>
									<option value="Milhã">Milhã</option>
									<option value="Miraíma">Miraíma</option>
									<option value="Missão Velha">Missão Velha</option>
									<option value="Mombaça">Mombaça</option>
									<option value="Monsenhor Tabosa">Monsenhor Tabosa</option>
									<option value="Morada Nova">Morada Nova</option>
									<option value="Moraújo">Moraújo</option>
									<option value="Morrinhos">Morrinhos</option>
									<option value="Mucambo">Mucambo</option>
									<option value="Mulungu">Mulungu</option>
									<option value="Nova Olinda">Nova Olinda</option>
									<option value="Nova Russas">Nova Russas</option>
									<option value="Novo Oriente">Novo Oriente</option>
									<option value="Ocara">Ocara</option>
									<option value="Orós">Orós</option>
									<option value="Pacajus">Pacajus</option>
									<option value="Pacatuba">Pacatuba</option>
									<option value="Pacoti">Pacoti</option>
									<option value="Pacujá">Pacujá</option>
									<option value="Palhano">Palhano</option>
									<option value="Palmácia">Palmácia</option>
									<option value="Paracuru">Paracuru</option>
									<option value="Paraipaba">Paraipaba</option>
									<option value="Parambu">Parambu</option>
									<option value="Paramoti">Paramoti</option>
									<option value="Pedra Branca">Pedra Branca</option>
									<option value="Penaforte">Penaforte</option>
									<option value="Pentecoste">Pentecoste</option>
									<option value="Pereiro">Pereiro</option>
									<option value="Pindoretama">Pindoretama</option>
									<option value="Piquet Carneiro">Piquet Carneiro</option>
									<option value="Pires Ferreira">Pires Ferreira</option>
									<option value="Poranga">Poranga</option>
									<option value="Porteiras">Porteiras</option>
									<option value="Potengi">Potengi</option>
									<option value="Potiretama">Potiretama</option>
									<option value="Quiterianópolis">Quiterianópolis</option>
									<option value="Quixadá">Quixadá</option>
									<option value="Quixelô">Quixelô</option>
									<option value="Quixeramobim">Quixeramobim</option>
									<option value="Quixeré">Quixeré</option>
									<option value="Redenção">Redenção</option>
									<option value="Reriutaba">Reriutaba</option>
									<option value="Russas">Russas</option>
									<option value="Saboeiro">Saboeiro</option>
									<option value="Salitre">Salitre</option>
									<option value="Santana do Acaraú">Santana do Acaraú</option>
									<option value="Santana do Cariri">Santana do Cariri</option>
									<option value="Santa Quitéria">Santa Quitéria</option>
									<option value="São Benedito">São Benedito</option>
									<option value="São Gonçalo do Amarante">
										São Gonçalo do Amarante
									</option>
									<option value="São João do Jaguaribe">
										São João do Jaguaribe
									</option>
									<option value="São Luís do Curu">São Luís do Curu</option>
									<option value="Senador Pompeu">Senador Pompeu</option>
									<option value="Senador Sá">Senador Sá</option>
									<option value="Sobral">Sobral</option>
									<option value="Solonópole">Solonópole</option>
									<option value="Tabuleiro do Norte">Tabuleiro do Norte</option>
									<option value="Tamboril">Tamboril</option>
									<option value="Tarrafas">Tarrafas</option>
									<option value="Tauá">Tauá</option>
									<option value="Tejuçuoca">Tejuçuoca</option>
									<option value="Tianguá">Tianguá</option>
									<option value="Trairi">Trairi</option>
									<option value="Tururu">Tururu</option>
									<option value="Ubajara">Ubajara</option>
									<option value="Umari">Umari</option>
									<option value="Umirim">Umirim</option>
									<option value="Uruburetama">Uruburetama</option>
									<option value="Uruoca">Uruoca</option>
									<option value="Varjota">Varjota</option>
									<option value="Várzea Alegre">Várzea Alegre</option>
									<option value="Viçosa do Ceará">Viçosa do Ceará</option>
								</optgroup>
								<optgroup class="state-rn state-group d-none">
									<option value="Acari">Acari</option>
									<option value="Açu">Açu</option>
									<option value="Afonso Bezerra">Afonso Bezerra</option>
									<option value="Água Nova">Água Nova</option>
									<option value="Alexandria">Alexandria</option>
									<option value="Almino Afonso">Almino Afonso</option>
									<option value="Alto do Rodrigues">Alto do Rodrigues</option>
									<option value="Angicos">Angicos</option>
									<option value="Antônio Martins">Antônio Martins</option>
									<option value="Apodi">Apodi</option>
									<option value="Areia Branca">Areia Branca</option>
									<option value="Arês">Arês</option>
									<option value="Augusto Severo">Augusto Severo</option>
									<option value="Baía Formosa">Baía Formosa</option>
									<option value="Baraúna">Baraúna</option>
									<option value="Barcelona">Barcelona</option>
									<option value="Bento Fernandes">Bento Fernandes</option>
									<option value="Bodó">Bodó</option>
									<option value="Bom Jesus">Bom Jesus</option>
									<option value="Brejinho">Brejinho</option>
									<option value="Caiçara do Norte">Caiçara do Norte</option>
									<option value="Caiçara do Rio do Vento">
										Caiçara do Rio do Vento
									</option>
									<option value="Caicó">Caicó</option>
									<option value="Campo Redondo">Campo Redondo</option>
									<option value="Canguaretama">Canguaretama</option>
									<option value="Caraúbas">Caraúbas</option>
									<option value="Carnaúba dos Dantas">
										Carnaúba dos Dantas
									</option>
									<option value="Carnaubais">Carnaubais</option>
									<option value="Ceará-Mirim">Ceará-Mirim</option>
									<option value="Cerro Corá">Cerro Corá</option>
									<option value="Coronel Ezequiel">Coronel Ezequiel</option>
									<option value="Coronel João Pessoa">
										Coronel João Pessoa
									</option>
									<option value="Cruzeta">Cruzeta</option>
									<option value="Currais Novos">Currais Novos</option>
									<option value="Doutor Severiano">Doutor Severiano</option>
									<option value="Parnamirim">Parnamirim</option>
									<option value="Encanto">Encanto</option>
									<option value="Equador">Equador</option>
									<option value="Espírito Santo">Espírito Santo</option>
									<option value="Extremoz">Extremoz</option>
									<option value="Felipe Guerra">Felipe Guerra</option>
									<option value="Fernando Pedroza">Fernando Pedroza</option>
									<option value="Florânia">Florânia</option>
									<option value="Francisco Dantas">Francisco Dantas</option>
									<option value="Frutuoso Gomes">Frutuoso Gomes</option>
									<option value="Galinhos">Galinhos</option>
									<option value="Goianinha">Goianinha</option>
									<option value="Governador Dix-Sept Rosado">
										Governador Dix-Sept Rosado
									</option>
									<option value="Grossos">Grossos</option>
									<option value="Guamaré">Guamaré</option>
									<option value="Ielmo Marinho">Ielmo Marinho</option>
									<option value="Ipanguaçu">Ipanguaçu</option>
									<option value="Ipueira">Ipueira</option>
									<option value="Itajá">Itajá</option>
									<option value="Itaú">Itaú</option>
									<option value="Jaçanã">Jaçanã</option>
									<option value="Jandaíra">Jandaíra</option>
									<option value="Janduís">Janduís</option>
									<option value="Januário Cicco">Januário Cicco</option>
									<option value="Japi">Japi</option>
									<option value="Jardim de Angicos">Jardim de Angicos</option>
									<option value="Jardim de Piranhas">Jardim de Piranhas</option>
									<option value="Jardim do Seridó">Jardim do Seridó</option>
									<option value="João Câmara">João Câmara</option>
									<option value="João Dias">João Dias</option>
									<option value="José da Penha">José da Penha</option>
									<option value="Jucurutu">Jucurutu</option>
									<option value="Jundiá">Jundiá</option>
									<option value="Lagoa D'Anta">Lagoa D'Anta</option>
									<option value="Lagoa de Pedras">Lagoa de Pedras</option>
									<option value="Lagoa de Velhos">Lagoa de Velhos</option>
									<option value="Lagoa Nova">Lagoa Nova</option>
									<option value="Lagoa Salgada">Lagoa Salgada</option>
									<option value="Lajes">Lajes</option>
									<option value="Lajes Pintadas">Lajes Pintadas</option>
									<option value="Lucrécia">Lucrécia</option>
									<option value="Luís Gomes">Luís Gomes</option>
									<option value="Macaíba">Macaíba</option>
									<option value="Macau">Macau</option>
									<option value="Major Sales">Major Sales</option>
									<option value="Marcelino Vieira">Marcelino Vieira</option>
									<option value="Martins">Martins</option>
									<option value="Maxaranguape">Maxaranguape</option>
									<option value="Messias Targino">Messias Targino</option>
									<option value="Montanhas">Montanhas</option>
									<option value="Monte Alegre">Monte Alegre</option>
									<option value="Monte das Gameleiras">
										Monte das Gameleiras
									</option>
									<option value="Mossoró">Mossoró</option>
									<option value="Natal">Natal</option>
									<option value="Nísia Floresta">Nísia Floresta</option>
									<option value="Nova Cruz">Nova Cruz</option>
									<option value="Olho-D'Água do Borges">
										Olho-D'Água do Borges
									</option>
									<option value="Ouro Branco">Ouro Branco</option>
									<option value="Paraná">Paraná</option>
									<option value="Paraú">Paraú</option>
									<option value="Parazinho">Parazinho</option>
									<option value="Parelhas">Parelhas</option>
									<option value="Rio do Fogo">Rio do Fogo</option>
									<option value="Passa e Fica">Passa e Fica</option>
									<option value="Passagem">Passagem</option>
									<option value="Patu">Patu</option>
									<option value="Santa Maria">Santa Maria</option>
									<option value="Pau dos Ferros">Pau dos Ferros</option>
									<option value="Pedra Grande">Pedra Grande</option>
									<option value="Pedra Preta">Pedra Preta</option>
									<option value="Pedro Avelino">Pedro Avelino</option>
									<option value="Pedro Velho">Pedro Velho</option>
									<option value="Pendências">Pendências</option>
									<option value="Pilões">Pilões</option>
									<option value="Poço Branco">Poço Branco</option>
									<option value="Portalegre">Portalegre</option>
									<option value="Porto do Mangue">Porto do Mangue</option>
									<option value="Presidente Juscelino">
										Presidente Juscelino
									</option>
									<option value="Pureza">Pureza</option>
									<option value="Rafael Fernandes">Rafael Fernandes</option>
									<option value="Rafael Godeiro">Rafael Godeiro</option>
									<option value="Riacho da Cruz">Riacho da Cruz</option>
									<option value="Riacho de Santana">Riacho de Santana</option>
									<option value="Riachuelo">Riachuelo</option>
									<option value="Rodolfo Fernandes">Rodolfo Fernandes</option>
									<option value="Tibau">Tibau</option>
									<option value="Ruy Barbosa">Ruy Barbosa</option>
									<option value="Santa Cruz">Santa Cruz</option>
									<option value="Santana do Matos">Santana do Matos</option>
									<option value="Santana do Seridó">Santana do Seridó</option>
									<option value="Santo Antônio">Santo Antônio</option>
									<option value="São Bento do Norte">São Bento do Norte</option>
									<option value="São Bento do Trairí">
										São Bento do Trairí
									</option>
									<option value="São Fernando">São Fernando</option>
									<option value="São Francisco do Oeste">
										São Francisco do Oeste
									</option>
									<option value="São Gonçalo do Amarante">
										São Gonçalo do Amarante
									</option>
									<option value="São João do Sabugi">São João do Sabugi</option>
									<option value="São José de Mipibu">São José de Mipibu</option>
									<option value="São José do Campestre">
										São José do Campestre
									</option>
									<option value="São José do Seridó">São José do Seridó</option>
									<option value="São Miguel">São Miguel</option>
									<option value="São Miguel do Gostoso">
										São Miguel do Gostoso
									</option>
									<option value="São Paulo do Potengi">
										São Paulo do Potengi
									</option>
									<option value="São Pedro">São Pedro</option>
									<option value="São Rafael">São Rafael</option>
									<option value="São Tomé">São Tomé</option>
									<option value="São Vicente">São Vicente</option>
									<option value="Senador Elói de Souza">
										Senador Elói de Souza
									</option>
									<option value="Senador Georgino Avelino">
										Senador Georgino Avelino
									</option>
									<option value="Serra de São Bento">Serra de São Bento</option>
									<option value="Serra do Mel">Serra do Mel</option>
									<option value="Serra Negra do Norte">
										Serra Negra do Norte
									</option>
									<option value="Serrinha">Serrinha</option>
									<option value="Serrinha dos Pintos">
										Serrinha dos Pintos
									</option>
									<option value="Severiano Melo">Severiano Melo</option>
									<option value="Sítio Novo">Sítio Novo</option>
									<option value="Taboleiro Grande">Taboleiro Grande</option>
									<option value="Taipu">Taipu</option>
									<option value="Tangará">Tangará</option>
									<option value="Tenente Ananias">Tenente Ananias</option>
									<option value="Tenente Laurentino Cruz">
										Tenente Laurentino Cruz
									</option>
									<option value="Tibau do Sul">Tibau do Sul</option>
									<option value="Timbaúba dos Batistas">
										Timbaúba dos Batistas
									</option>
									<option value="Touros">Touros</option>
									<option value="Triunfo Potiguar">Triunfo Potiguar</option>
									<option value="Umarizal">Umarizal</option>
									<option value="Upanema">Upanema</option>
									<option value="Várzea">Várzea</option>
									<option value="Venha-Ver">Venha-Ver</option>
									<option value="Vera Cruz">Vera Cruz</option>
									<option value="Viçosa">Viçosa</option>
									<option value="Vila Flor">Vila Flor</option>
								</optgroup>
								<optgroup class="state-pb state-group d-none">
									<option value="Água Branca">Água Branca</option>
									<option value="Aguiar">Aguiar</option>
									<option value="Alagoa Grande">Alagoa Grande</option>
									<option value="Alagoa Nova">Alagoa Nova</option>
									<option value="Alagoinha">Alagoinha</option>
									<option value="Alcantil">Alcantil</option>
									<option value="Algodão de Jandaíra">
										Algodão de Jandaíra
									</option>
									<option value="Alhandra">Alhandra</option>
									<option value="São João do Rio do Peixe">
										São João do Rio do Peixe
									</option>
									<option value="Amparo">Amparo</option>
									<option value="Aparecida">Aparecida</option>
									<option value="Araçagi">Araçagi</option>
									<option value="Arara">Arara</option>
									<option value="Araruna">Araruna</option>
									<option value="Areia">Areia</option>
									<option value="Areia de Baraúnas">Areia de Baraúnas</option>
									<option value="Areial">Areial</option>
									<option value="Aroeiras">Aroeiras</option>
									<option value="Assunção">Assunção</option>
									<option value="Baía da Traição">Baía da Traição</option>
									<option value="Bananeiras">Bananeiras</option>
									<option value="Baraúna">Baraúna</option>
									<option value="Barra de Santana">Barra de Santana</option>
									<option value="Barra de Santa Rosa">
										Barra de Santa Rosa
									</option>
									<option value="Barra de São Miguel">
										Barra de São Miguel
									</option>
									<option value="Bayeux">Bayeux</option>
									<option value="Belém">Belém</option>
									<option value="Belém do Brejo do Cruz">
										Belém do Brejo do Cruz
									</option>
									<option value="Bernardino Batista">Bernardino Batista</option>
									<option value="Boa Ventura">Boa Ventura</option>
									<option value="Boa Vista">Boa Vista</option>
									<option value="Bom Jesus">Bom Jesus</option>
									<option value="Bom Sucesso">Bom Sucesso</option>
									<option value="Bonito de Santa Fé">Bonito de Santa Fé</option>
									<option value="Boqueirão">Boqueirão</option>
									<option value="Igaracy">Igaracy</option>
									<option value="Borborema">Borborema</option>
									<option value="Brejo do Cruz">Brejo do Cruz</option>
									<option value="Brejo dos Santos">Brejo dos Santos</option>
									<option value="Caaporã">Caaporã</option>
									<option value="Cabaceiras">Cabaceiras</option>
									<option value="Cabedelo">Cabedelo</option>
									<option value="Cachoeira dos Índios">
										Cachoeira dos Índios
									</option>
									<option value="Cacimba de Areia">Cacimba de Areia</option>
									<option value="Cacimba de Dentro">Cacimba de Dentro</option>
									<option value="Cacimbas">Cacimbas</option>
									<option value="Caiçara">Caiçara</option>
									<option value="Cajazeiras">Cajazeiras</option>
									<option value="Cajazeirinhas">Cajazeirinhas</option>
									<option value="Caldas Brandão">Caldas Brandão</option>
									<option value="Camalaú">Camalaú</option>
									<option value="Campina Grande">Campina Grande</option>
									<option value="Capim">Capim</option>
									<option value="Caraúbas">Caraúbas</option>
									<option value="Carrapateira">Carrapateira</option>
									<option value="Casserengue">Casserengue</option>
									<option value="Catingueira">Catingueira</option>
									<option value="Catolé do Rocha">Catolé do Rocha</option>
									<option value="Caturité">Caturité</option>
									<option value="Conceição">Conceição</option>
									<option value="Condado">Condado</option>
									<option value="Conde">Conde</option>
									<option value="Congo">Congo</option>
									<option value="Coremas">Coremas</option>
									<option value="Coxixola">Coxixola</option>
									<option value="Cruz do Espírito Santo">
										Cruz do Espírito Santo
									</option>
									<option value="Cubati">Cubati</option>
									<option value="Cuité">Cuité</option>
									<option value="Cuitegi">Cuitegi</option>
									<option value="Cuité de Mamanguape">
										Cuité de Mamanguape
									</option>
									<option value="Curral de Cima">Curral de Cima</option>
									<option value="Curral Velho">Curral Velho</option>
									<option value="Damião">Damião</option>
									<option value="Desterro">Desterro</option>
									<option value="Vista Serrana">Vista Serrana</option>
									<option value="Diamante">Diamante</option>
									<option value="Dona Inês">Dona Inês</option>
									<option value="Duas Estradas">Duas Estradas</option>
									<option value="Emas">Emas</option>
									<option value="Esperança">Esperança</option>
									<option value="Fagundes">Fagundes</option>
									<option value="Frei Martinho">Frei Martinho</option>
									<option value="Gado Bravo">Gado Bravo</option>
									<option value="Guarabira">Guarabira</option>
									<option value="Gurinhém">Gurinhém</option>
									<option value="Gurjão">Gurjão</option>
									<option value="Ibiara">Ibiara</option>
									<option value="Imaculada">Imaculada</option>
									<option value="Ingá">Ingá</option>
									<option value="Itabaiana">Itabaiana</option>
									<option value="Itaporanga">Itaporanga</option>
									<option value="Itapororoca">Itapororoca</option>
									<option value="Itatuba">Itatuba</option>
									<option value="Jacaraú">Jacaraú</option>
									<option value="Jericó">Jericó</option>
									<option value="João Pessoa">João Pessoa</option>
									<option value="Juarez Távora">Juarez Távora</option>
									<option value="Juazeirinho">Juazeirinho</option>
									<option value="Junco do Seridó">Junco do Seridó</option>
									<option value="Juripiranga">Juripiranga</option>
									<option value="Juru">Juru</option>
									<option value="Lagoa">Lagoa</option>
									<option value="Lagoa de Dentro">Lagoa de Dentro</option>
									<option value="Lagoa Seca">Lagoa Seca</option>
									<option value="Lastro">Lastro</option>
									<option value="Livramento">Livramento</option>
									<option value="Logradouro">Logradouro</option>
									<option value="Lucena">Lucena</option>
									<option value="Mãe D'Água">Mãe D'Água</option>
									<option value="Malta">Malta</option>
									<option value="Mamanguape">Mamanguape</option>
									<option value="Manaíra">Manaíra</option>
									<option value="Marcação">Marcação</option>
									<option value="Mari">Mari</option>
									<option value="Marizópolis">Marizópolis</option>
									<option value="Massaranduba">Massaranduba</option>
									<option value="Mataraca">Mataraca</option>
									<option value="Matinhas">Matinhas</option>
									<option value="Mato Grosso">Mato Grosso</option>
									<option value="Maturéia">Maturéia</option>
									<option value="Mogeiro">Mogeiro</option>
									<option value="Montadas">Montadas</option>
									<option value="Monte Horebe">Monte Horebe</option>
									<option value="Monteiro">Monteiro</option>
									<option value="Mulungu">Mulungu</option>
									<option value="Natuba">Natuba</option>
									<option value="Nazarezinho">Nazarezinho</option>
									<option value="Nova Floresta">Nova Floresta</option>
									<option value="Nova Olinda">Nova Olinda</option>
									<option value="Nova Palmeira">Nova Palmeira</option>
									<option value="Olho D'Água">Olho D'Água</option>
									<option value="Olivedos">Olivedos</option>
									<option value="Ouro Velho">Ouro Velho</option>
									<option value="Parari">Parari</option>
									<option value="Passagem">Passagem</option>
									<option value="Patos">Patos</option>
									<option value="Paulista">Paulista</option>
									<option value="Pedra Branca">Pedra Branca</option>
									<option value="Pedra Lavrada">Pedra Lavrada</option>
									<option value="Pedras de Fogo">Pedras de Fogo</option>
									<option value="Piancó">Piancó</option>
									<option value="Picuí">Picuí</option>
									<option value="Pilar">Pilar</option>
									<option value="Pilões">Pilões</option>
									<option value="Pilõezinhos">Pilõezinhos</option>
									<option value="Pirpirituba">Pirpirituba</option>
									<option value="Pitimbu">Pitimbu</option>
									<option value="Pocinhos">Pocinhos</option>
									<option value="Poço Dantas">Poço Dantas</option>
									<option value="Poço de José de Moura">
										Poço de José de Moura
									</option>
									<option value="Pombal">Pombal</option>
									<option value="Prata">Prata</option>
									<option value="Princesa Isabel">Princesa Isabel</option>
									<option value="Puxinanã">Puxinanã</option>
									<option value="Queimadas">Queimadas</option>
									<option value="Quixabá">Quixabá</option>
									<option value="Remígio">Remígio</option>
									<option value="Pedro Régis">Pedro Régis</option>
									<option value="Riachão">Riachão</option>
									<option value="Riachão do Bacamarte">
										Riachão do Bacamarte
									</option>
									<option value="Riachão do Poço">Riachão do Poço</option>
									<option value="Riacho de Santo Antônio">
										Riacho de Santo Antônio
									</option>
									<option value="Riacho dos Cavalos">Riacho dos Cavalos</option>
									<option value="Rio Tinto">Rio Tinto</option>
									<option value="Salgadinho">Salgadinho</option>
									<option value="Salgado de São Félix">
										Salgado de São Félix
									</option>
									<option value="Santa Cecília">Santa Cecília</option>
									<option value="Santa Cruz">Santa Cruz</option>
									<option value="Santa Helena">Santa Helena</option>
									<option value="Santa Inês">Santa Inês</option>
									<option value="Santa Luzia">Santa Luzia</option>
									<option value="Santana de Mangueira">
										Santana de Mangueira
									</option>
									<option value="Santana dos Garrotes">
										Santana dos Garrotes
									</option>
									<option value="Joca Claudino">Joca Claudino</option>
									<option value="Santa Rita">Santa Rita</option>
									<option value="Santa Teresinha">Santa Teresinha</option>
									<option value="Santo André">Santo André</option>
									<option value="São Bento">São Bento</option>
									<option value="São Bentinho">São Bentinho</option>
									<option value="São Domingos do Cariri">
										São Domingos do Cariri
									</option>
									<option value="São Domingos">São Domingos</option>
									<option value="São Francisco">São Francisco</option>
									<option value="São João do Cariri">São João do Cariri</option>
									<option value="São João do Tigre">São João do Tigre</option>
									<option value="São José da Lagoa Tapada">
										São José da Lagoa Tapada
									</option>
									<option value="São José de Caiana">São José de Caiana</option>
									<option value="São José de Espinharas">
										São José de Espinharas
									</option>
									<option value="São José dos Ramos">São José dos Ramos</option>
									<option value="São José de Piranhas">
										São José de Piranhas
									</option>
									<option value="São José de Princesa">
										São José de Princesa
									</option>
									<option value="São José do Bonfim">São José do Bonfim</option>
									<option value="São José do Brejo do Cruz">
										São José do Brejo do Cruz
									</option>
									<option value="São José do Sabugi">São José do Sabugi</option>
									<option value="São José dos Cordeiros">
										São José dos Cordeiros
									</option>
									<option value="São Mamede">São Mamede</option>
									<option value="São Miguel de Taipu">
										São Miguel de Taipu
									</option>
									<option value="São Sebastião de Lagoa de Roça">
										São Sebastião de Lagoa de Roça
									</option>
									<option value="São Sebastião do Umbuzeiro">
										São Sebastião do Umbuzeiro
									</option>
									<option value="Sapé">Sapé</option>
									<option value="São Vicente do Seridó">
										São Vicente do Seridó
									</option>
									<option value="Serra Branca">Serra Branca</option>
									<option value="Serra da Raiz">Serra da Raiz</option>
									<option value="Serra Grande">Serra Grande</option>
									<option value="Serra Redonda">Serra Redonda</option>
									<option value="Serraria">Serraria</option>
									<option value="Sertãozinho">Sertãozinho</option>
									<option value="Sobrado">Sobrado</option>
									<option value="Solânea">Solânea</option>
									<option value="Soledade">Soledade</option>
									<option value="Sossêgo">Sossêgo</option>
									<option value="Sousa">Sousa</option>
									<option value="Sumé">Sumé</option>
									<option value="Tacima">Tacima</option>
									<option value="Taperoá">Taperoá</option>
									<option value="Tavares">Tavares</option>
									<option value="Teixeira">Teixeira</option>
									<option value="Tenório">Tenório</option>
									<option value="Triunfo">Triunfo</option>
									<option value="Uiraúna">Uiraúna</option>
									<option value="Umbuzeiro">Umbuzeiro</option>
									<option value="Várzea">Várzea</option>
									<option value="Vieirópolis">Vieirópolis</option>
									<option value="Zabelê">Zabelê</option>
								</optgroup>
								<optgroup class="state-pe state-group d-none">
									<option value="Abreu e Lima">Abreu e Lima</option>
									<option value="Afogados da Ingazeira">
										Afogados da Ingazeira
									</option>
									<option value="Afrânio">Afrânio</option>
									<option value="Agrestina">Agrestina</option>
									<option value="Água Preta">Água Preta</option>
									<option value="Águas Belas">Águas Belas</option>
									<option value="Alagoinha">Alagoinha</option>
									<option value="Aliança">Aliança</option>
									<option value="Altinho">Altinho</option>
									<option value="Amaraji">Amaraji</option>
									<option value="Angelim">Angelim</option>
									<option value="Araçoiaba">Araçoiaba</option>
									<option value="Araripina">Araripina</option>
									<option value="Arcoverde">Arcoverde</option>
									<option value="Barra de Guabiraba">Barra de Guabiraba</option>
									<option value="Barreiros">Barreiros</option>
									<option value="Belém de Maria">Belém de Maria</option>
									<option value="Belém do São Francisco">
										Belém do São Francisco
									</option>
									<option value="Belo Jardim">Belo Jardim</option>
									<option value="Betânia">Betânia</option>
									<option value="Bezerros">Bezerros</option>
									<option value="Bodocó">Bodocó</option>
									<option value="Bom Conselho">Bom Conselho</option>
									<option value="Bom Jardim">Bom Jardim</option>
									<option value="Bonito">Bonito</option>
									<option value="Brejão">Brejão</option>
									<option value="Brejinho">Brejinho</option>
									<option value="Brejo da Madre de Deus">
										Brejo da Madre de Deus
									</option>
									<option value="Buenos Aires">Buenos Aires</option>
									<option value="Buíque">Buíque</option>
									<option value="Cabo de Santo Agostinho">
										Cabo de Santo Agostinho
									</option>
									<option value="Cabrobó">Cabrobó</option>
									<option value="Cachoeirinha">Cachoeirinha</option>
									<option value="Caetés">Caetés</option>
									<option value="Calçado">Calçado</option>
									<option value="Calumbi">Calumbi</option>
									<option value="Camaragibe">Camaragibe</option>
									<option value="Camocim de São Félix">
										Camocim de São Félix
									</option>
									<option value="Camutanga">Camutanga</option>
									<option value="Canhotinho">Canhotinho</option>
									<option value="Capoeiras">Capoeiras</option>
									<option value="Carnaíba">Carnaíba</option>
									<option value="Carnaubeira da Penha">
										Carnaubeira da Penha
									</option>
									<option value="Carpina">Carpina</option>
									<option value="Caruaru">Caruaru</option>
									<option value="Casinhas">Casinhas</option>
									<option value="Catende">Catende</option>
									<option value="Cedro">Cedro</option>
									<option value="Chã de Alegria">Chã de Alegria</option>
									<option value="Chã Grande">Chã Grande</option>
									<option value="Condado">Condado</option>
									<option value="Correntes">Correntes</option>
									<option value="Cortês">Cortês</option>
									<option value="Cumaru">Cumaru</option>
									<option value="Cupira">Cupira</option>
									<option value="Custódia">Custódia</option>
									<option value="Dormentes">Dormentes</option>
									<option value="Escada">Escada</option>
									<option value="Exu">Exu</option>
									<option value="Feira Nova">Feira Nova</option>
									<option value="Fernando de Noronha">
										Fernando de Noronha
									</option>
									<option value="Ferreiros">Ferreiros</option>
									<option value="Flores">Flores</option>
									<option value="Floresta">Floresta</option>
									<option value="Frei Miguelinho">Frei Miguelinho</option>
									<option value="Gameleira">Gameleira</option>
									<option value="Garanhuns">Garanhuns</option>
									<option value="Glória do Goitá">Glória do Goitá</option>
									<option value="Goiana">Goiana</option>
									<option value="Granito">Granito</option>
									<option value="Gravatá">Gravatá</option>
									<option value="Iati">Iati</option>
									<option value="Ibimirim">Ibimirim</option>
									<option value="Ibirajuba">Ibirajuba</option>
									<option value="Igarassu">Igarassu</option>
									<option value="Iguaraci">Iguaraci</option>
									<option value="Inajá">Inajá</option>
									<option value="Ingazeira">Ingazeira</option>
									<option value="Ipojuca">Ipojuca</option>
									<option value="Ipubi">Ipubi</option>
									<option value="Itacuruba">Itacuruba</option>
									<option value="Itaíba">Itaíba</option>
									<option value="Ilha de Itamaracá">Ilha de Itamaracá</option>
									<option value="Itambé">Itambé</option>
									<option value="Itapetim">Itapetim</option>
									<option value="Itapissuma">Itapissuma</option>
									<option value="Itaquitinga">Itaquitinga</option>
									<option value="Jaboatão dos Guararapes">
										Jaboatão dos Guararapes
									</option>
									<option value="Jaqueira">Jaqueira</option>
									<option value="Jataúba">Jataúba</option>
									<option value="Jatobá">Jatobá</option>
									<option value="João Alfredo">João Alfredo</option>
									<option value="Joaquim Nabuco">Joaquim Nabuco</option>
									<option value="Jucati">Jucati</option>
									<option value="Jupi">Jupi</option>
									<option value="Jurema">Jurema</option>
									<option value="Lagoa do Carro">Lagoa do Carro</option>
									<option value="Lagoa de Itaenga">Lagoa de Itaenga</option>
									<option value="Lagoa do Ouro">Lagoa do Ouro</option>
									<option value="Lagoa dos Gatos">Lagoa dos Gatos</option>
									<option value="Lagoa Grande">Lagoa Grande</option>
									<option value="Lajedo">Lajedo</option>
									<option value="Limoeiro">Limoeiro</option>
									<option value="Macaparana">Macaparana</option>
									<option value="Machados">Machados</option>
									<option value="Manari">Manari</option>
									<option value="Maraial">Maraial</option>
									<option value="Mirandiba">Mirandiba</option>
									<option value="Moreno">Moreno</option>
									<option value="Nazaré da Mata">Nazaré da Mata</option>
									<option value="Olinda">Olinda</option>
									<option value="Orobó">Orobó</option>
									<option value="Orocó">Orocó</option>
									<option value="Ouricuri">Ouricuri</option>
									<option value="Palmares">Palmares</option>
									<option value="Palmeirina">Palmeirina</option>
									<option value="Panelas">Panelas</option>
									<option value="Paranatama">Paranatama</option>
									<option value="Parnamirim">Parnamirim</option>
									<option value="Passira">Passira</option>
									<option value="Paudalho">Paudalho</option>
									<option value="Paulista">Paulista</option>
									<option value="Pedra">Pedra</option>
									<option value="Pesqueira">Pesqueira</option>
									<option value="Petrolândia">Petrolândia</option>
									<option value="Petrolina">Petrolina</option>
									<option value="Poção">Poção</option>
									<option value="Pombos">Pombos</option>
									<option value="Primavera">Primavera</option>
									<option value="Quipapá">Quipapá</option>
									<option value="Quixaba">Quixaba</option>
									<option value="Recife">Recife</option>
									<option value="Riacho das Almas">Riacho das Almas</option>
									<option value="Ribeirão">Ribeirão</option>
									<option value="Rio Formoso">Rio Formoso</option>
									<option value="Sairé">Sairé</option>
									<option value="Salgadinho">Salgadinho</option>
									<option value="Salgueiro">Salgueiro</option>
									<option value="Saloá">Saloá</option>
									<option value="Sanharó">Sanharó</option>
									<option value="Santa Cruz">Santa Cruz</option>
									<option value="Santa Cruz da Baixa Verde">
										Santa Cruz da Baixa Verde
									</option>
									<option value="Santa Cruz do Capibaribe">
										Santa Cruz do Capibaribe
									</option>
									<option value="Santa Filomena">Santa Filomena</option>
									<option value="Santa Maria da Boa Vista">
										Santa Maria da Boa Vista
									</option>
									<option value="Santa Maria do Cambucá">
										Santa Maria do Cambucá
									</option>
									<option value="Santa Terezinha">Santa Terezinha</option>
									<option value="São Benedito do Sul">
										São Benedito do Sul
									</option>
									<option value="São Bento do Una">São Bento do Una</option>
									<option value="São Caitano">São Caitano</option>
									<option value="São João">São João</option>
									<option value="São Joaquim do Monte">
										São Joaquim do Monte
									</option>
									<option value="São José da Coroa Grande">
										São José da Coroa Grande
									</option>
									<option value="São José do Belmonte">
										São José do Belmonte
									</option>
									<option value="São José do Egito">São José do Egito</option>
									<option value="São Lourenço da Mata">
										São Lourenço da Mata
									</option>
									<option value="São Vicente Ferrer">São Vicente Ferrer</option>
									<option value="Serra Talhada">Serra Talhada</option>
									<option value="Serrita">Serrita</option>
									<option value="Sertânia">Sertânia</option>
									<option value="Sirinhaém">Sirinhaém</option>
									<option value="Moreilândia">Moreilândia</option>
									<option value="Solidão">Solidão</option>
									<option value="Surubim">Surubim</option>
									<option value="Tabira">Tabira</option>
									<option value="Tacaimbó">Tacaimbó</option>
									<option value="Tacaratu">Tacaratu</option>
									<option value="Tamandaré">Tamandaré</option>
									<option value="Taquaritinga do Norte">
										Taquaritinga do Norte
									</option>
									<option value="Terezinha">Terezinha</option>
									<option value="Terra Nova">Terra Nova</option>
									<option value="Timbaúba">Timbaúba</option>
									<option value="Toritama">Toritama</option>
									<option value="Tracunhaém">Tracunhaém</option>
									<option value="Trindade">Trindade</option>
									<option value="Triunfo">Triunfo</option>
									<option value="Tupanatinga">Tupanatinga</option>
									<option value="Tuparetama">Tuparetama</option>
									<option value="Venturosa">Venturosa</option>
									<option value="Verdejante">Verdejante</option>
									<option value="Vertente do Lério">Vertente do Lério</option>
									<option value="Vertentes">Vertentes</option>
									<option value="Vicência">Vicência</option>
									<option value="Vitória de Santo Antão">
										Vitória de Santo Antão
									</option>
									<option value="Xexéu">Xexéu</option>
								</optgroup>
								<optgroup class="state-al state-group d-none">
									<option value="Água Branca">Água Branca</option>
									<option value="Anadia">Anadia</option>
									<option value="Arapiraca">Arapiraca</option>
									<option value="Atalaia">Atalaia</option>
									<option value="Barra de Santo Antônio">
										Barra de Santo Antônio
									</option>
									<option value="Barra de São Miguel">
										Barra de São Miguel
									</option>
									<option value="Batalha">Batalha</option>
									<option value="Belém">Belém</option>
									<option value="Belo Monte">Belo Monte</option>
									<option value="Boca da Mata">Boca da Mata</option>
									<option value="Branquinha">Branquinha</option>
									<option value="Cacimbinhas">Cacimbinhas</option>
									<option value="Cajueiro">Cajueiro</option>
									<option value="Campestre">Campestre</option>
									<option value="Campo Alegre">Campo Alegre</option>
									<option value="Campo Grande">Campo Grande</option>
									<option value="Canapi">Canapi</option>
									<option value="Capela">Capela</option>
									<option value="Carneiros">Carneiros</option>
									<option value="Chã Preta">Chã Preta</option>
									<option value="Coité do Nóia">Coité do Nóia</option>
									<option value="Colônia Leopoldina">Colônia Leopoldina</option>
									<option value="Coqueiro Seco">Coqueiro Seco</option>
									<option value="Coruripe">Coruripe</option>
									<option value="Craíbas">Craíbas</option>
									<option value="Delmiro Gouveia">Delmiro Gouveia</option>
									<option value="Dois Riachos">Dois Riachos</option>
									<option value="Estrela de Alagoas">Estrela de Alagoas</option>
									<option value="Feira Grande">Feira Grande</option>
									<option value="Feliz Deserto">Feliz Deserto</option>
									<option value="Flexeiras">Flexeiras</option>
									<option value="Girau do Ponciano">Girau do Ponciano</option>
									<option value="Ibateguara">Ibateguara</option>
									<option value="Igaci">Igaci</option>
									<option value="Igreja Nova">Igreja Nova</option>
									<option value="Inhapi">Inhapi</option>
									<option value="Jacaré dos Homens">Jacaré dos Homens</option>
									<option value="Jacuípe">Jacuípe</option>
									<option value="Japaratinga">Japaratinga</option>
									<option value="Jaramataia">Jaramataia</option>
									<option value="Jequiá da Praia">Jequiá da Praia</option>
									<option value="Joaquim Gomes">Joaquim Gomes</option>
									<option value="Jundiá">Jundiá</option>
									<option value="Junqueiro">Junqueiro</option>
									<option value="Lagoa da Canoa">Lagoa da Canoa</option>
									<option value="Limoeiro de Anadia">Limoeiro de Anadia</option>
									<option value="Maceió">Maceió</option>
									<option value="Major Isidoro">Major Isidoro</option>
									<option value="Maragogi">Maragogi</option>
									<option value="Maravilha">Maravilha</option>
									<option value="Marechal Deodoro">Marechal Deodoro</option>
									<option value="Maribondo">Maribondo</option>
									<option value="Mar Vermelho">Mar Vermelho</option>
									<option value="Mata Grande">Mata Grande</option>
									<option value="Matriz de Camaragibe">
										Matriz de Camaragibe
									</option>
									<option value="Messias">Messias</option>
									<option value="Minador do Negrão">Minador do Negrão</option>
									<option value="Monteirópolis">Monteirópolis</option>
									<option value="Murici">Murici</option>
									<option value="Novo Lino">Novo Lino</option>
									<option value="Olho D'Água das Flores">
										Olho D'Água das Flores
									</option>
									<option value="Olho D'Água do Casado">
										Olho D'Água do Casado
									</option>
									<option value="Olho D'Água Grande">Olho D'Água Grande</option>
									<option value="Olivença">Olivença</option>
									<option value="Ouro Branco">Ouro Branco</option>
									<option value="Palestina">Palestina</option>
									<option value="Palmeira dos Índios">
										Palmeira dos Índios
									</option>
									<option value="Pão de Açúcar">Pão de Açúcar</option>
									<option value="Pariconha">Pariconha</option>
									<option value="Paripueira">Paripueira</option>
									<option value="Passo de Camaragibe">
										Passo de Camaragibe
									</option>
									<option value="Paulo Jacinto">Paulo Jacinto</option>
									<option value="Penedo">Penedo</option>
									<option value="Piaçabuçu">Piaçabuçu</option>
									<option value="Pilar">Pilar</option>
									<option value="Pindoba">Pindoba</option>
									<option value="Piranhas">Piranhas</option>
									<option value="Poço das Trincheiras">
										Poço das Trincheiras
									</option>
									<option value="Porto Calvo">Porto Calvo</option>
									<option value="Porto de Pedras">Porto de Pedras</option>
									<option value="Porto Real do Colégio">
										Porto Real do Colégio
									</option>
									<option value="Quebrangulo">Quebrangulo</option>
									<option value="Rio Largo">Rio Largo</option>
									<option value="Roteiro">Roteiro</option>
									<option value="Santa Luzia do Norte">
										Santa Luzia do Norte
									</option>
									<option value="Santana do Ipanema">Santana do Ipanema</option>
									<option value="Santana do Mundaú">Santana do Mundaú</option>
									<option value="São Brás">São Brás</option>
									<option value="São José da Laje">São José da Laje</option>
									<option value="São José da Tapera">São José da Tapera</option>
									<option value="São Luís do Quitunde">
										São Luís do Quitunde
									</option>
									<option value="São Miguel dos Campos">
										São Miguel dos Campos
									</option>
									<option value="São Miguel dos Milagres">
										São Miguel dos Milagres
									</option>
									<option value="São Sebastião">São Sebastião</option>
									<option value="Satuba">Satuba</option>
									<option value="Senador Rui Palmeira">
										Senador Rui Palmeira
									</option>
									<option value="Tanque D'Arca">Tanque D'Arca</option>
									<option value="Taquarana">Taquarana</option>
									<option value="Teotônio Vilela">Teotônio Vilela</option>
									<option value="Traipu">Traipu</option>
									<option value="União dos Palmares">União dos Palmares</option>
									<option value="Viçosa">Viçosa</option>
								</optgroup>
								<optgroup class="state-se state-group d-none">
									<option value="Amparo de São Francisco">
										Amparo de São Francisco
									</option>
									<option value="Aquidabã">Aquidabã</option>
									<option value="Aracaju">Aracaju</option>
									<option value="Arauá">Arauá</option>
									<option value="Areia Branca">Areia Branca</option>
									<option value="Barra dos Coqueiros">
										Barra dos Coqueiros
									</option>
									<option value="Boquim">Boquim</option>
									<option value="Brejo Grande">Brejo Grande</option>
									<option value="Campo do Brito">Campo do Brito</option>
									<option value="Canhoba">Canhoba</option>
									<option value="Canindé de São Francisco">
										Canindé de São Francisco
									</option>
									<option value="Capela">Capela</option>
									<option value="Carira">Carira</option>
									<option value="Carmópolis">Carmópolis</option>
									<option value="Cedro de São João">Cedro de São João</option>
									<option value="Cristinápolis">Cristinápolis</option>
									<option value="Cumbe">Cumbe</option>
									<option value="optgroupina Pastora">
										optgroupina Pastora
									</option>
									<option value="Estância">Estância</option>
									<option value="Feira Nova">Feira Nova</option>
									<option value="Frei Paulo">Frei Paulo</option>
									<option value="Gararu">Gararu</option>
									<option value="General Maynard">General Maynard</option>
									<option value="Gracho Cardoso">Gracho Cardoso</option>
									<option value="Ilha das Flores">Ilha das Flores</option>
									<option value="Indiaroba">Indiaroba</option>
									<option value="Itabaiana">Itabaiana</option>
									<option value="Itabaianinha">Itabaianinha</option>
									<option value="Itabi">Itabi</option>
									<option value="Itaporanga D'Ajuda">Itaporanga D'Ajuda</option>
									<option value="Japaratuba">Japaratuba</option>
									<option value="Japoatã">Japoatã</option>
									<option value="Lagarto">Lagarto</option>
									<option value="Laranjeiras">Laranjeiras</option>
									<option value="Macambira">Macambira</option>
									<option value="Malhada dos Bois">Malhada dos Bois</option>
									<option value="Malhador">Malhador</option>
									<option value="Maruim">Maruim</option>
									<option value="Moita Bonita">Moita Bonita</option>
									<option value="Monte Alegre de Sergipe">
										Monte Alegre de Sergipe
									</option>
									<option value="Muribeca">Muribeca</option>
									<option value="Neópolis">Neópolis</option>
									<option value="Nossa Senhora Aparecida">
										Nossa Senhora Aparecida
									</option>
									<option value="Nossa Senhora da Glória">
										Nossa Senhora da Glória
									</option>
									<option value="Nossa Senhora das Dores">
										Nossa Senhora das Dores
									</option>
									<option value="Nossa Senhora de Lourdes">
										Nossa Senhora de Lourdes
									</option>
									<option value="Nossa Senhora do Socorro">
										Nossa Senhora do Socorro
									</option>
									<option value="Pacatuba">Pacatuba</option>
									<option value="Pedra Mole">Pedra Mole</option>
									<option value="Pedrinhas">Pedrinhas</option>
									<option value="Pinhão">Pinhão</option>
									<option value="Pirambu">Pirambu</option>
									<option value="Poço Redondo">Poço Redondo</option>
									<option value="Poço Verde">Poço Verde</option>
									<option value="Porto da Folha">Porto da Folha</option>
									<option value="Propriá">Propriá</option>
									<option value="Riachão do Dantas">Riachão do Dantas</option>
									<option value="Riachuelo">Riachuelo</option>
									<option value="Ribeirópolis">Ribeirópolis</option>
									<option value="Rosário do Catete">Rosário do Catete</option>
									<option value="Salgado">Salgado</option>
									<option value="Santa Luzia do Itanhy">
										Santa Luzia do Itanhy
									</option>
									<option value="Santana do São Francisco">
										Santana do São Francisco
									</option>
									<option value="Santa Rosa de Lima">Santa Rosa de Lima</option>
									<option value="Santo Amaro das Brotas">
										Santo Amaro das Brotas
									</option>
									<option value="São Cristóvão">São Cristóvão</option>
									<option value="São Domingos">São Domingos</option>
									<option value="São Francisco">São Francisco</option>
									<option value="São Miguel do Aleixo">
										São Miguel do Aleixo
									</option>
									<option value="Simão Dias">Simão Dias</option>
									<option value="Siriri">Siriri</option>
									<option value="Telha">Telha</option>
									<option value="Tobias Barreto">Tobias Barreto</option>
									<option value="Tomar do Geru">Tomar do Geru</option>
									<option value="Umbaúba">Umbaúba</option>
								</optgroup>
								<optgroup class="state-ba state-group d-none">
									<option value="Abaíra">Abaíra</option>
									<option value="Abaré">Abaré</option>
									<option value="Acajutiba">Acajutiba</option>
									<option value="Adustina">Adustina</option>
									<option value="Água Fria">Água Fria</option>
									<option value="Érico Cardoso">Érico Cardoso</option>
									<option value="Aiquara">Aiquara</option>
									<option value="Alagoinhas">Alagoinhas</option>
									<option value="Alcobaça">Alcobaça</option>
									<option value="Almadina">Almadina</option>
									<option value="Amargosa">Amargosa</option>
									<option value="Amélia Rodrigues">Amélia Rodrigues</option>
									<option value="América Dourada">América Dourada</option>
									<option value="Anagé">Anagé</option>
									<option value="Andaraí">Andaraí</option>
									<option value="Andorinha">Andorinha</option>
									<option value="Angical">Angical</option>
									<option value="Anguera">Anguera</option>
									<option value="Antas">Antas</option>
									<option value="Antônio Cardoso">Antônio Cardoso</option>
									<option value="Antônio Gonçalves">Antônio Gonçalves</option>
									<option value="Aporá">Aporá</option>
									<option value="Apuarema">Apuarema</option>
									<option value="Aracatu">Aracatu</option>
									<option value="Araças">Araças</option>
									<option value="Araci">Araci</option>
									<option value="Aramari">Aramari</option>
									<option value="Arataca">Arataca</option>
									<option value="Aratuípe">Aratuípe</option>
									<option value="Aurelino Leal">Aurelino Leal</option>
									<option value="Baianópolis">Baianópolis</option>
									<option value="Baixa Grande">Baixa Grande</option>
									<option value="Banzaê">Banzaê</option>
									<option value="Barra">Barra</option>
									<option value="Barra da Estiva">Barra da Estiva</option>
									<option value="Barra do Choça">Barra do Choça</option>
									<option value="Barra do Mendes">Barra do Mendes</option>
									<option value="Barra do Rocha">Barra do Rocha</option>
									<option value="Barreiras">Barreiras</option>
									<option value="Barro Alto">Barro Alto</option>
									<option value="Barrocas">Barrocas</option>
									<option value="Barro Preto">Barro Preto</option>
									<option value="Belmonte">Belmonte</option>
									<option value="Belo Campo">Belo Campo</option>
									<option value="Biritinga">Biritinga</option>
									<option value="Boa Nova">Boa Nova</option>
									<option value="Boa Vista do Tupim">Boa Vista do Tupim</option>
									<option value="Bom Jesus da Lapa">Bom Jesus da Lapa</option>
									<option value="Bom Jesus da Serra">Bom Jesus da Serra</option>
									<option value="Boninal">Boninal</option>
									<option value="Bonito">Bonito</option>
									<option value="Boquira">Boquira</option>
									<option value="Botuporã">Botuporã</option>
									<option value="Brejões">Brejões</option>
									<option value="Brejolândia">Brejolândia</option>
									<option value="Brotas de Macaúbas">Brotas de Macaúbas</option>
									<option value="Brumado">Brumado</option>
									<option value="Buerarema">Buerarema</option>
									<option value="Buritirama">Buritirama</option>
									<option value="Caatiba">Caatiba</option>
									<option value="Cabaceiras do Paraguaçu">
										Cabaceiras do Paraguaçu
									</option>
									<option value="Cachoeira">Cachoeira</option>
									<option value="Caculé">Caculé</option>
									<option value="Caém">Caém</option>
									<option value="Caetanos">Caetanos</option>
									<option value="Caetité">Caetité</option>
									<option value="Cafarnaum">Cafarnaum</option>
									<option value="Cairu">Cairu</option>
									<option value="Caldeirão Grande">Caldeirão Grande</option>
									<option value="Camacan">Camacan</option>
									<option value="Camaçari">Camaçari</option>
									<option value="Camamu">Camamu</option>
									<option value="Campo Alegre de Lourdes">
										Campo Alegre de Lourdes
									</option>
									<option value="Campo Formoso">Campo Formoso</option>
									<option value="Canápolis">Canápolis</option>
									<option value="Canarana">Canarana</option>
									<option value="Canavieiras">Canavieiras</option>
									<option value="Candeal">Candeal</option>
									<option value="Candeias">Candeias</option>
									<option value="Candiba">Candiba</option>
									<option value="Cândido Sales">Cândido Sales</option>
									<option value="Cansanção">Cansanção</option>
									<option value="Canudos">Canudos</option>
									<option value="Capela do Alto Alegre">
										Capela do Alto Alegre
									</option>
									<option value="Capim Grosso">Capim Grosso</option>
									<option value="Caraíbas">Caraíbas</option>
									<option value="Caravelas">Caravelas</option>
									<option value="Cardeal da Silva">Cardeal da Silva</option>
									<option value="Carinhanha">Carinhanha</option>
									<option value="Casa Nova">Casa Nova</option>
									<option value="Castro Alves">Castro Alves</option>
									<option value="Catolândia">Catolândia</option>
									<option value="Catu">Catu</option>
									<option value="Caturama">Caturama</option>
									<option value="Central">Central</option>
									<option value="Chorrochó">Chorrochó</option>
									<option value="Cícero Dantas">Cícero Dantas</option>
									<option value="Cipó">Cipó</option>
									<option value="Coaraci">Coaraci</option>
									<option value="Cocos">Cocos</option>
									<option value="Conceição da Feira">Conceição da Feira</option>
									<option value="Conceição do Almeida">
										Conceição do Almeida
									</option>
									<option value="Conceição do Coité">Conceição do Coité</option>
									<option value="Conceição do Jacuípe">
										Conceição do Jacuípe
									</option>
									<option value="Conde">Conde</option>
									<option value="Condeúba">Condeúba</option>
									<option value="Contendas do Sincorá">
										Contendas do Sincorá
									</option>
									<option value="Coração de Maria">Coração de Maria</option>
									<option value="Cordeiros">Cordeiros</option>
									<option value="Coribe">Coribe</option>
									<option value="Coronel João Sá">Coronel João Sá</option>
									<option value="Correntina">Correntina</option>
									<option value="Cotegipe">Cotegipe</option>
									<option value="Cravolândia">Cravolândia</option>
									<option value="Crisópolis">Crisópolis</option>
									<option value="Cristópolis">Cristópolis</option>
									<option value="Cruz das Almas">Cruz das Almas</option>
									<option value="Curaçá">Curaçá</option>
									<option value="Dário Meira">Dário Meira</option>
									<option value="Dias D'Ávila">Dias D'Ávila</option>
									<option value="Dom Basílio">Dom Basílio</option>
									<option value="Dom Macedo Costa">Dom Macedo Costa</option>
									<option value="Elísio Medrado">Elísio Medrado</option>
									<option value="Encruzilhada">Encruzilhada</option>
									<option value="Entre Rios">Entre Rios</option>
									<option value="Esplanada">Esplanada</option>
									<option value="Euclides da Cunha">Euclides da Cunha</option>
									<option value="Eunápolis">Eunápolis</option>
									<option value="Fátima">Fátima</option>
									<option value="Feira da Mata">Feira da Mata</option>
									<option value="Feira de Santana">Feira de Santana</option>
									<option value="Filadélfia">Filadélfia</option>
									<option value="Firmino Alves">Firmino Alves</option>
									<option value="Floresta Azul">Floresta Azul</option>
									<option value="Formosa do Rio Preto">
										Formosa do Rio Preto
									</option>
									<option value="Gandu">Gandu</option>
									<option value="Gavião">Gavião</option>
									<option value="Gentio do Ouro">Gentio do Ouro</option>
									<option value="Glória">Glória</option>
									<option value="Gongogi">Gongogi</option>
									<option value="Governador Mangabeira">
										Governador Mangabeira
									</option>
									<option value="Guajeru">Guajeru</option>
									<option value="Guanambi">Guanambi</option>
									<option value="Guaratinga">Guaratinga</option>
									<option value="Heliópolis">Heliópolis</option>
									<option value="Iaçu">Iaçu</option>
									<option value="Ibiassucê">Ibiassucê</option>
									<option value="Ibicaraí">Ibicaraí</option>
									<option value="Ibicoara">Ibicoara</option>
									<option value="Ibicuí">Ibicuí</option>
									<option value="Ibipeba">Ibipeba</option>
									<option value="Ibipitanga">Ibipitanga</option>
									<option value="Ibiquera">Ibiquera</option>
									<option value="Ibirapitanga">Ibirapitanga</option>
									<option value="Ibirapuã">Ibirapuã</option>
									<option value="Ibirataia">Ibirataia</option>
									<option value="Ibitiara">Ibitiara</option>
									<option value="Ibititá">Ibititá</option>
									<option value="Ibotirama">Ibotirama</option>
									<option value="Ichu">Ichu</option>
									<option value="Igaporã">Igaporã</option>
									<option value="Igrapiúna">Igrapiúna</option>
									<option value="Iguaí">Iguaí</option>
									<option value="Ilhéus">Ilhéus</option>
									<option value="Inhambupe">Inhambupe</option>
									<option value="Ipecaetá">Ipecaetá</option>
									<option value="Ipiaú">Ipiaú</option>
									<option value="Ipirá">Ipirá</option>
									<option value="Ipupiara">Ipupiara</option>
									<option value="Irajuba">Irajuba</option>
									<option value="Iramaia">Iramaia</option>
									<option value="Iraquara">Iraquara</option>
									<option value="Irará">Irará</option>
									<option value="Irecê">Irecê</option>
									<option value="Itabela">Itabela</option>
									<option value="Itaberaba">Itaberaba</option>
									<option value="Itabuna">Itabuna</option>
									<option value="Itacaré">Itacaré</option>
									<option value="Itaeté">Itaeté</option>
									<option value="Itagi">Itagi</option>
									<option value="Itagibá">Itagibá</option>
									<option value="Itagimirim">Itagimirim</option>
									<option value="Itaguaçu da Bahia">Itaguaçu da Bahia</option>
									<option value="Itaju do Colônia">Itaju do Colônia</option>
									<option value="Itajuípe">Itajuípe</option>
									<option value="Itamaraju">Itamaraju</option>
									<option value="Itamari">Itamari</option>
									<option value="Itambé">Itambé</option>
									<option value="Itanagra">Itanagra</option>
									<option value="Itanhém">Itanhém</option>
									<option value="Itaparica">Itaparica</option>
									<option value="Itapé">Itapé</option>
									<option value="Itapebi">Itapebi</option>
									<option value="Itapetinga">Itapetinga</option>
									<option value="Itapicuru">Itapicuru</option>
									<option value="Itapitanga">Itapitanga</option>
									<option value="Itaquara">Itaquara</option>
									<option value="Itarantim">Itarantim</option>
									<option value="Itatim">Itatim</option>
									<option value="Itiruçu">Itiruçu</option>
									<option value="Itiúba">Itiúba</option>
									<option value="Itororó">Itororó</option>
									<option value="Ituaçu">Ituaçu</option>
									<option value="Ituberá">Ituberá</option>
									<option value="Iuiú">Iuiú</option>
									<option value="Jaborandi">Jaborandi</option>
									<option value="Jacaraci">Jacaraci</option>
									<option value="Jacobina">Jacobina</option>
									<option value="Jaguaquara">Jaguaquara</option>
									<option value="Jaguarari">Jaguarari</option>
									<option value="Jaguaripe">Jaguaripe</option>
									<option value="Jandaíra">Jandaíra</option>
									<option value="Jequié">Jequié</option>
									<option value="Jeremoabo">Jeremoabo</option>
									<option value="Jiquiriçá">Jiquiriçá</option>
									<option value="Jitaúna">Jitaúna</option>
									<option value="João Dourado">João Dourado</option>
									<option value="Juazeiro">Juazeiro</option>
									<option value="Jucuruçu">Jucuruçu</option>
									<option value="Jussara">Jussara</option>
									<option value="Jussari">Jussari</option>
									<option value="Jussiape">Jussiape</option>
									<option value="Lafaiete Coutinho">Lafaiete Coutinho</option>
									<option value="Lagoa Real">Lagoa Real</option>
									<option value="Laje">Laje</option>
									<option value="Lajedão">Lajedão</option>
									<option value="Lajedinho">Lajedinho</option>
									<option value="Lajedo do Tabocal">Lajedo do Tabocal</option>
									<option value="Lamarão">Lamarão</option>
									<option value="Lapão">Lapão</option>
									<option value="Lauro de Freitas">Lauro de Freitas</option>
									<option value="Lençóis">Lençóis</option>
									<option value="Licínio de Almeida">Licínio de Almeida</option>
									<option value="Livramento de Nossa Senhora">
										Livramento de Nossa Senhora
									</option>
									<option value="Luís Eduardo Magalhães">
										Luís Eduardo Magalhães
									</option>
									<option value="Macajuba">Macajuba</option>
									<option value="Macarani">Macarani</option>
									<option value="Macaúbas">Macaúbas</option>
									<option value="Macururé">Macururé</option>
									<option value="Madre de Deus">Madre de Deus</option>
									<option value="Maetinga">Maetinga</option>
									<option value="Maiquinique">Maiquinique</option>
									<option value="Mairi">Mairi</option>
									<option value="Malhada">Malhada</option>
									<option value="Malhada de Pedras">Malhada de Pedras</option>
									<option value="Manoel Vitorino">Manoel Vitorino</option>
									<option value="Mansidão">Mansidão</option>
									<option value="Maracás">Maracás</option>
									<option value="Maragogipe">Maragogipe</option>
									<option value="Maraú">Maraú</option>
									<option value="Marcionílio Souza">Marcionílio Souza</option>
									<option value="Mascote">Mascote</option>
									<option value="Mata de São João">Mata de São João</option>
									<option value="Matina">Matina</option>
									<option value="Medeiros Neto">Medeiros Neto</option>
									<option value="Miguel Calmon">Miguel Calmon</option>
									<option value="Milagres">Milagres</option>
									<option value="Mirangaba">Mirangaba</option>
									<option value="Mirante">Mirante</option>
									<option value="Monte Santo">Monte Santo</option>
									<option value="Morpará">Morpará</option>
									<option value="Morro do Chapéu">Morro do Chapéu</option>
									<option value="Mortugaba">Mortugaba</option>
									<option value="Mucugê">Mucugê</option>
									<option value="Mucuri">Mucuri</option>
									<option value="Mulungu do Morro">Mulungu do Morro</option>
									<option value="Mundo Novo">Mundo Novo</option>
									<option value="Muniz Ferreira">Muniz Ferreira</option>
									<option value="Muquém de São Francisco">
										Muquém de São Francisco
									</option>
									<option value="Muritiba">Muritiba</option>
									<option value="Mutuípe">Mutuípe</option>
									<option value="Nazaré">Nazaré</option>
									<option value="Nilo Peçanha">Nilo Peçanha</option>
									<option value="Nordestina">Nordestina</option>
									<option value="Nova Canaã">Nova Canaã</option>
									<option value="Nova Fátima">Nova Fátima</option>
									<option value="Nova Ibiá">Nova Ibiá</option>
									<option value="Nova Itarana">Nova Itarana</option>
									<option value="Nova Redenção">Nova Redenção</option>
									<option value="Nova Soure">Nova Soure</option>
									<option value="Nova Viçosa">Nova Viçosa</option>
									<option value="Novo Horizonte">Novo Horizonte</option>
									<option value="Novo Triunfo">Novo Triunfo</option>
									<option value="Olindina">Olindina</option>
									<option value="Oliveira dos Brejinhos">
										Oliveira dos Brejinhos
									</option>
									<option value="Ouriçangas">Ouriçangas</option>
									<option value="Ourolândia">Ourolândia</option>
									<option value="Palmas de Monte Alto">
										Palmas de Monte Alto
									</option>
									<option value="Palmeiras">Palmeiras</option>
									<option value="Paramirim">Paramirim</option>
									<option value="Paratinga">Paratinga</option>
									<option value="Paripiranga">Paripiranga</option>
									<option value="Pau Brasil">Pau Brasil</option>
									<option value="Paulo Afonso">Paulo Afonso</option>
									<option value="Pé de Serra">Pé de Serra</option>
									<option value="Pedrão">Pedrão</option>
									<option value="Pedro Alexandre">Pedro Alexandre</option>
									<option value="Piatã">Piatã</option>
									<option value="Pilão Arcado">Pilão Arcado</option>
									<option value="Pindaí">Pindaí</option>
									<option value="Pindobaçu">Pindobaçu</option>
									<option value="Pintadas">Pintadas</option>
									<option value="Piraí do Norte">Piraí do Norte</option>
									<option value="Piripá">Piripá</option>
									<option value="Piritiba">Piritiba</option>
									<option value="Planaltino">Planaltino</option>
									<option value="Planalto">Planalto</option>
									<option value="Poções">Poções</option>
									<option value="Pojuca">Pojuca</option>
									<option value="Ponto Novo">Ponto Novo</option>
									<option value="Porto Seguro">Porto Seguro</option>
									<option value="Potiraguá">Potiraguá</option>
									<option value="Prado">Prado</option>
									<option value="Presidente Dutra">Presidente Dutra</option>
									<option value="Presidente Jânio Quadros">
										Presidente Jânio Quadros
									</option>
									<option value="Presidente Tancredo Neves">
										Presidente Tancredo Neves
									</option>
									<option value="Queimadas">Queimadas</option>
									<option value="Quijingue">Quijingue</option>
									<option value="Quixabeira">Quixabeira</option>
									<option value="Rafael Jambeiro">Rafael Jambeiro</option>
									<option value="Remanso">Remanso</option>
									<option value="Retirolândia">Retirolândia</option>
									<option value="Riachão das Neves">Riachão das Neves</option>
									<option value="Riachão do Jacuípe">Riachão do Jacuípe</option>
									<option value="Riacho de Santana">Riacho de Santana</option>
									<option value="Ribeira do Amparo">Ribeira do Amparo</option>
									<option value="Ribeira do Pombal">Ribeira do Pombal</option>
									<option value="Ribeirão do Largo">Ribeirão do Largo</option>
									<option value="Rio de Contas">Rio de Contas</option>
									<option value="Rio do Antônio">Rio do Antônio</option>
									<option value="Rio do Pires">Rio do Pires</option>
									<option value="Rio Real">Rio Real</option>
									<option value="Rodelas">Rodelas</option>
									<option value="Ruy Barbosa">Ruy Barbosa</option>
									<option value="Salinas da Margarida">
										Salinas da Margarida
									</option>
									<option value="Salvador">Salvador</option>
									<option value="Santa Bárbara">Santa Bárbara</option>
									<option value="Santa Brígida">Santa Brígida</option>
									<option value="Santa Cruz Cabrália">
										Santa Cruz Cabrália
									</option>
									<option value="Santa Cruz da Vitória">
										Santa Cruz da Vitória
									</option>
									<option value="Santa Inês">Santa Inês</option>
									<option value="Santaluz">Santaluz</option>
									<option value="Santa Luzia">Santa Luzia</option>
									<option value="Santa Maria da Vitória">
										Santa Maria da Vitória
									</option>
									<option value="Santana">Santana</option>
									<option value="Santanópolis">Santanópolis</option>
									<option value="Santa Rita de Cássia">
										Santa Rita de Cássia
									</option>
									<option value="Santa Teresinha">Santa Teresinha</option>
									<option value="Santo Amaro">Santo Amaro</option>
									<option value="Santo Antônio de Jesus">
										Santo Antônio de Jesus
									</option>
									<option value="Santo Estêvão">Santo Estêvão</option>
									<option value="São Desidério">São Desidério</option>
									<option value="São Domingos">São Domingos</option>
									<option value="São Félix">São Félix</option>
									<option value="São Félix do Coribe">
										São Félix do Coribe
									</option>
									<option value="São Felipe">São Felipe</option>
									<option value="São Francisco do Conde">
										São Francisco do Conde
									</option>
									<option value="São Gabriel">São Gabriel</option>
									<option value="São Gonçalo dos Campos">
										São Gonçalo dos Campos
									</option>
									<option value="São José da Vitória">
										São José da Vitória
									</option>
									<option value="São José do Jacuípe">
										São José do Jacuípe
									</option>
									<option value="São Miguel das Matas">
										São Miguel das Matas
									</option>
									<option value="São Sebastião do Passé">
										São Sebastião do Passé
									</option>
									<option value="Sapeaçu">Sapeaçu</option>
									<option value="Sátiro Dias">Sátiro Dias</option>
									<option value="Saubara">Saubara</option>
									<option value="Saúde">Saúde</option>
									<option value="Seabra">Seabra</option>
									<option value="Sebastião Laranjeiras">
										Sebastião Laranjeiras
									</option>
									<option value="Senhor do Bonfim">Senhor do Bonfim</option>
									<option value="Serra do Ramalho">Serra do Ramalho</option>
									<option value="Sento Sé">Sento Sé</option>
									<option value="Serra Dourada">Serra Dourada</option>
									<option value="Serra Preta">Serra Preta</option>
									<option value="Serrinha">Serrinha</option>
									<option value="Serrolândia">Serrolândia</option>
									<option value="Simões Filho">Simões Filho</option>
									<option value="Sítio do Mato">Sítio do Mato</option>
									<option value="Sítio do Quinto">Sítio do Quinto</option>
									<option value="Sobradinho">Sobradinho</option>
									<option value="Souto Soares">Souto Soares</option>
									<option value="Tabocas do Brejo Velho">
										Tabocas do Brejo Velho
									</option>
									<option value="Tanhaçu">Tanhaçu</option>
									<option value="Tanque Novo">Tanque Novo</option>
									<option value="Tanquinho">Tanquinho</option>
									<option value="Taperoá">Taperoá</option>
									<option value="Tapiramutá">Tapiramutá</option>
									<option value="Teixeira de Freitas">
										Teixeira de Freitas
									</option>
									<option value="Teodoro Sampaio">Teodoro Sampaio</option>
									<option value="Teofilândia">Teofilândia</option>
									<option value="Teolândia">Teolândia</option>
									<option value="Terra Nova">Terra Nova</option>
									<option value="Tremedal">Tremedal</option>
									<option value="Tucano">Tucano</option>
									<option value="Uauá">Uauá</option>
									<option value="Ubaíra">Ubaíra</option>
									<option value="Ubaitaba">Ubaitaba</option>
									<option value="Ubatã">Ubatã</option>
									<option value="Uibaí">Uibaí</option>
									<option value="Umburanas">Umburanas</option>
									<option value="Una">Una</option>
									<option value="Urandi">Urandi</option>
									<option value="Uruçuca">Uruçuca</option>
									<option value="Utinga">Utinga</option>
									<option value="Valença">Valença</option>
									<option value="Valente">Valente</option>
									<option value="Várzea da Roça">Várzea da Roça</option>
									<option value="Várzea do Poço">Várzea do Poço</option>
									<option value="Várzea Nova">Várzea Nova</option>
									<option value="Varzedo">Varzedo</option>
									<option value="Vera Cruz">Vera Cruz</option>
									<option value="Vereda">Vereda</option>
									<option value="Vitória da Conquista">
										Vitória da Conquista
									</option>
									<option value="Wagner">Wagner</option>
									<option value="Wanderley">Wanderley</option>
									<option value="Wenceslau Guimarães">
										Wenceslau Guimarães
									</option>
									<option value="Xique-Xique">Xique-Xique</option>
								</optgroup>
								<optgroup class="state-mg state-group d-none">
									<option value="Abadia dos Dourados">
										Abadia dos Dourados
									</option>
									<option value="Abaeté">Abaeté</option>
									<option value="Abre Campo">Abre Campo</option>
									<option value="Acaiaca">Acaiaca</option>
									<option value="Açucena">Açucena</option>
									<option value="Água Boa">Água Boa</option>
									<option value="Água Comprida">Água Comprida</option>
									<option value="Aguanil">Aguanil</option>
									<option value="Águas Formosas">Águas Formosas</option>
									<option value="Águas Vermelhas">Águas Vermelhas</option>
									<option value="Aimorés">Aimorés</option>
									<option value="Aiuruoca">Aiuruoca</option>
									<option value="Alagoa">Alagoa</option>
									<option value="Albertina">Albertina</option>
									<option value="Além Paraíba">Além Paraíba</option>
									<option value="Alfenas">Alfenas</option>
									<option value="Alfredo Vasconcelos">
										Alfredo Vasconcelos
									</option>
									<option value="Almenara">Almenara</option>
									<option value="Alpercata">Alpercata</option>
									<option value="Alpinópolis">Alpinópolis</option>
									<option value="Alterosa">Alterosa</option>
									<option value="Alto Caparaó">Alto Caparaó</option>
									<option value="Alto Rio Doce">Alto Rio Doce</option>
									<option value="Alvarenga">Alvarenga</option>
									<option value="Alvinópolis">Alvinópolis</option>
									<option value="Alvorada de Minas">Alvorada de Minas</option>
									<option value="Amparo do Serra">Amparo do Serra</option>
									<option value="Andradas">Andradas</option>
									<option value="Cachoeira de Pajeú">Cachoeira de Pajeú</option>
									<option value="Andrelândia">Andrelândia</option>
									<option value="Angelândia">Angelândia</option>
									<option value="Antônio Carlos">Antônio Carlos</option>
									<option value="Antônio Dias">Antônio Dias</option>
									<option value="Antônio Prado de Minas">
										Antônio Prado de Minas
									</option>
									<option value="Araçaí">Araçaí</option>
									<option value="Aracitaba">Aracitaba</option>
									<option value="Araçuaí">Araçuaí</option>
									<option value="Araguari">Araguari</option>
									<option value="Arantina">Arantina</option>
									<option value="Araponga">Araponga</option>
									<option value="Araporã">Araporã</option>
									<option value="Arapuá">Arapuá</option>
									<option value="Araújos">Araújos</option>
									<option value="Araxá">Araxá</option>
									<option value="Arceburgo">Arceburgo</option>
									<option value="Arcos">Arcos</option>
									<option value="Areado">Areado</option>
									<option value="Argirita">Argirita</option>
									<option value="Aricanduva">Aricanduva</option>
									<option value="Arinos">Arinos</option>
									<option value="Astolfo Dutra">Astolfo Dutra</option>
									<option value="Ataléia">Ataléia</option>
									<option value="Augusto de Lima">Augusto de Lima</option>
									<option value="Baependi">Baependi</option>
									<option value="Baldim">Baldim</option>
									<option value="Bambuí">Bambuí</option>
									<option value="Bandeira">Bandeira</option>
									<option value="Bandeira do Sul">Bandeira do Sul</option>
									<option value="Barão de Cocais">Barão de Cocais</option>
									<option value="Barão de Monte Alto">
										Barão de Monte Alto
									</option>
									<option value="Barbacena">Barbacena</option>
									<option value="Barra Longa">Barra Longa</option>
									<option value="Barroso">Barroso</option>
									<option value="Bela Vista de Minas">
										Bela Vista de Minas
									</option>
									<option value="Belmiro Braga">Belmiro Braga</option>
									<option value="Belo Horizonte">Belo Horizonte</option>
									<option value="Belo Oriente">Belo Oriente</option>
									<option value="Belo Vale">Belo Vale</option>
									<option value="Berilo">Berilo</option>
									<option value="Bertópolis">Bertópolis</option>
									<option value="Berizal">Berizal</option>
									<option value="Betim">Betim</option>
									<option value="Bias Fortes">Bias Fortes</option>
									<option value="Bicas">Bicas</option>
									<option value="Biquinhas">Biquinhas</option>
									<option value="Boa Esperança">Boa Esperança</option>
									<option value="Bocaina de Minas">Bocaina de Minas</option>
									<option value="Bocaiúva">Bocaiúva</option>
									<option value="Bom Despacho">Bom Despacho</option>
									<option value="Bom Jardim de Minas">
										Bom Jardim de Minas
									</option>
									<option value="Bom Jesus da Penha">Bom Jesus da Penha</option>
									<option value="Bom Jesus do Amparo">
										Bom Jesus do Amparo
									</option>
									<option value="Bom Jesus do Galho">Bom Jesus do Galho</option>
									<option value="Bom Repouso">Bom Repouso</option>
									<option value="Bom Sucesso">Bom Sucesso</option>
									<option value="Bonfim">Bonfim</option>
									<option value="Bonfinópolis de Minas">
										Bonfinópolis de Minas
									</option>
									<option value="Bonito de Minas">Bonito de Minas</option>
									<option value="Borda da Mata">Borda da Mata</option>
									<option value="Botelhos">Botelhos</option>
									<option value="Botumirim">Botumirim</option>
									<option value="Brasilândia de Minas">
										Brasilândia de Minas
									</option>
									<option value="Brasília de Minas">Brasília de Minas</option>
									<option value="Brás Pires">Brás Pires</option>
									<option value="Braúnas">Braúnas</option>
									<option value="Brazópolis">Brazópolis</option>
									<option value="Brumadinho">Brumadinho</option>
									<option value="Bueno Brandão">Bueno Brandão</option>
									<option value="Buenópolis">Buenópolis</option>
									<option value="Bugre">Bugre</option>
									<option value="Buritis">Buritis</option>
									<option value="Buritizeiro">Buritizeiro</option>
									<option value="Cabeceira Grande">Cabeceira Grande</option>
									<option value="Cabo Verde">Cabo Verde</option>
									<option value="Cachoeira da Prata">Cachoeira da Prata</option>
									<option value="Cachoeira de Minas">Cachoeira de Minas</option>
									<option value="Cachoeira Dourada">Cachoeira Dourada</option>
									<option value="Caetanópolis">Caetanópolis</option>
									<option value="Caeté">Caeté</option>
									<option value="Caiana">Caiana</option>
									<option value="Cajuri">Cajuri</option>
									<option value="Caldas">Caldas</option>
									<option value="Camacho">Camacho</option>
									<option value="Camanducaia">Camanducaia</option>
									<option value="Cambuí">Cambuí</option>
									<option value="Cambuquira">Cambuquira</option>
									<option value="Campanário">Campanário</option>
									<option value="Campanha">Campanha</option>
									<option value="Campestre">Campestre</option>
									<option value="Campina Verde">Campina Verde</option>
									<option value="Campo Azul">Campo Azul</option>
									<option value="Campo Belo">Campo Belo</option>
									<option value="Campo do Meio">Campo do Meio</option>
									<option value="Campo Florido">Campo Florido</option>
									<option value="Campos Altos">Campos Altos</option>
									<option value="Campos Gerais">Campos Gerais</option>
									<option value="Canaã">Canaã</option>
									<option value="Canápolis">Canápolis</option>
									<option value="Cana Verde">Cana Verde</option>
									<option value="Candeias">Candeias</option>
									<option value="Cantagalo">Cantagalo</option>
									<option value="Caparaó">Caparaó</option>
									<option value="Capela Nova">Capela Nova</option>
									<option value="Capelinha">Capelinha</option>
									<option value="Capetinga">Capetinga</option>
									<option value="Capim Branco">Capim Branco</option>
									<option value="Capinópolis">Capinópolis</option>
									<option value="Capitão Andrade">Capitão Andrade</option>
									<option value="Capitão Enéas">Capitão Enéas</option>
									<option value="Capitólio">Capitólio</option>
									<option value="Caputira">Caputira</option>
									<option value="Caraí">Caraí</option>
									<option value="Caranaíba">Caranaíba</option>
									<option value="Carandaí">Carandaí</option>
									<option value="Carangola">Carangola</option>
									<option value="Caratinga">Caratinga</option>
									<option value="Carbonita">Carbonita</option>
									<option value="Careaçu">Careaçu</option>
									<option value="Carlos Chagas">Carlos Chagas</option>
									<option value="Carmésia">Carmésia</option>
									<option value="Carmo da Cachoeira">Carmo da Cachoeira</option>
									<option value="Carmo da Mata">Carmo da Mata</option>
									<option value="Carmo de Minas">Carmo de Minas</option>
									<option value="Carmo do Cajuru">Carmo do Cajuru</option>
									<option value="Carmo do Paranaíba">Carmo do Paranaíba</option>
									<option value="Carmo do Rio Claro">Carmo do Rio Claro</option>
									<option value="Carmópolis de Minas">
										Carmópolis de Minas
									</option>
									<option value="Carneirinho">Carneirinho</option>
									<option value="Carrancas">Carrancas</option>
									<option value="Carvalhópolis">Carvalhópolis</option>
									<option value="Carvalhos">Carvalhos</option>
									<option value="Casa Grande">Casa Grande</option>
									<option value="Cascalho Rico">Cascalho Rico</option>
									<option value="Cássia">Cássia</option>
									<option value="Conceição da Barra de Minas">
										Conceição da Barra de Minas
									</option>
									<option value="Cataguases">Cataguases</option>
									<option value="Catas Altas">Catas Altas</option>
									<option value="Catas Altas da Noruega">
										Catas Altas da Noruega
									</option>
									<option value="Catuji">Catuji</option>
									<option value="Catuti">Catuti</option>
									<option value="Caxambu">Caxambu</option>
									<option value="Cedro do Abaeté">Cedro do Abaeté</option>
									<option value="Central de Minas">Central de Minas</option>
									<option value="Centralina">Centralina</option>
									<option value="Chácara">Chácara</option>
									<option value="Chalé">Chalé</option>
									<option value="Chapada do Norte">Chapada do Norte</option>
									<option value="Chapada Gaúcha">Chapada Gaúcha</option>
									<option value="Chiador">Chiador</option>
									<option value="Cipotânea">Cipotânea</option>
									<option value="Claraval">Claraval</option>
									<option value="Claro dos Poções">Claro dos Poções</option>
									<option value="Cláudio">Cláudio</option>
									<option value="Coimbra">Coimbra</option>
									<option value="Coluna">Coluna</option>
									<option value="Comendador Gomes">Comendador Gomes</option>
									<option value="Comercinho">Comercinho</option>
									<option value="Conceição da Aparecida">
										Conceição da Aparecida
									</option>
									<option value="Conceição das Pedras">
										Conceição das Pedras
									</option>
									<option value="Conceição das Alagoas">
										Conceição das Alagoas
									</option>
									<option value="Conceição de Ipanema">
										Conceição de Ipanema
									</option>
									<option value="Conceição do Mato Dentro">
										Conceição do Mato Dentro
									</option>
									<option value="Conceição do Pará">Conceição do Pará</option>
									<option value="Conceição do Rio Verde">
										Conceição do Rio Verde
									</option>
									<option value="Conceição dos Ouros">
										Conceição dos Ouros
									</option>
									<option value="Cônego Marinho">Cônego Marinho</option>
									<option value="Confins">Confins</option>
									<option value="Congonhal">Congonhal</option>
									<option value="Congonhas">Congonhas</option>
									<option value="Congonhas do Norte">Congonhas do Norte</option>
									<option value="Conquista">Conquista</option>
									<option value="Conselheiro Lafaiete">
										Conselheiro Lafaiete
									</option>
									<option value="Conselheiro Pena">Conselheiro Pena</option>
									<option value="Consolação">Consolação</option>
									<option value="Contagem">Contagem</option>
									<option value="Coqueiral">Coqueiral</option>
									<option value="Coração de Jesus">Coração de Jesus</option>
									<option value="Cordisburgo">Cordisburgo</option>
									<option value="Cordislândia">Cordislândia</option>
									<option value="Corinto">Corinto</option>
									<option value="Coroaci">Coroaci</option>
									<option value="Coromandel">Coromandel</option>
									<option value="Coronel Fabriciano">Coronel Fabriciano</option>
									<option value="Coronel Murta">Coronel Murta</option>
									<option value="Coronel Pacheco">Coronel Pacheco</option>
									<option value="Coronel Xavier Chaves">
										Coronel Xavier Chaves
									</option>
									<option value="Córrego Danta">Córrego Danta</option>
									<option value="Córrego do Bom Jesus">
										Córrego do Bom Jesus
									</option>
									<option value="Córrego Fundo">Córrego Fundo</option>
									<option value="Córrego Novo">Córrego Novo</option>
									<option value="Couto de Magalhães de Minas">
										Couto de Magalhães de Minas
									</option>
									<option value="Crisólita">Crisólita</option>
									<option value="Cristais">Cristais</option>
									<option value="Cristália">Cristália</option>
									<option value="Cristiano Otoni">Cristiano Otoni</option>
									<option value="Cristina">Cristina</option>
									<option value="Crucilândia">Crucilândia</option>
									<option value="Cruzeiro da Fortaleza">
										Cruzeiro da Fortaleza
									</option>
									<option value="Cruzília">Cruzília</option>
									<option value="Cuparaque">Cuparaque</option>
									<option value="Curral de Dentro">Curral de Dentro</option>
									<option value="Curvelo">Curvelo</option>
									<option value="Datas">Datas</option>
									<option value="Delfim Moreira">Delfim Moreira</option>
									<option value="Delfinópolis">Delfinópolis</option>
									<option value="Delta">Delta</option>
									<option value="Descoberto">Descoberto</option>
									<option value="Desterro de Entre Rios">
										Desterro de Entre Rios
									</option>
									<option value="Desterro do Melo">Desterro do Melo</option>
									<option value="Diamantina">Diamantina</option>
									<option value="Diogo de Vasconcelos">
										Diogo de Vasconcelos
									</option>
									<option value="Dionísio">Dionísio</option>
									<option value="optgroupinésia">optgroupinésia</option>
									<option value="optgroupino">optgroupino</option>
									<option value="optgroupino das Laranjeiras">
										optgroupino das Laranjeiras
									</option>
									<option value="optgroupinolândia de Minas">
										optgroupinolândia de Minas
									</option>
									<option value="optgroupinópolis">optgroupinópolis</option>
									<option value="optgroupisa Alegre">optgroupisa Alegre</option>
									<option value="optgroupisa Nova">optgroupisa Nova</option>
									<option value="optgroupisópolis">optgroupisópolis</option>
									<option value="Dom Bosco">Dom Bosco</option>
									<option value="Dom Cavati">Dom Cavati</option>
									<option value="Dom Joaquim">Dom Joaquim</option>
									<option value="Dom Silvério">Dom Silvério</option>
									<option value="Dom Viçoso">Dom Viçoso</option>
									<option value="Dona Eusébia">Dona Eusébia</option>
									<option value="Dores de Campos">Dores de Campos</option>
									<option value="Dores de Guanhães">Dores de Guanhães</option>
									<option value="Dores do Indaiá">Dores do Indaiá</option>
									<option value="Dores do Turvo">Dores do Turvo</option>
									<option value="Doresópolis">Doresópolis</option>
									<option value="Douradoquara">Douradoquara</option>
									<option value="Durandé">Durandé</option>
									<option value="Elói Mendes">Elói Mendes</option>
									<option value="Engenheiro Caldas">Engenheiro Caldas</option>
									<option value="Engenheiro Navarro">Engenheiro Navarro</option>
									<option value="Entre Folhas">Entre Folhas</option>
									<option value="Entre Rios de Minas">
										Entre Rios de Minas
									</option>
									<option value="Ervália">Ervália</option>
									<option value="Esmeraldas">Esmeraldas</option>
									<option value="Espera Feliz">Espera Feliz</option>
									<option value="Espinosa">Espinosa</option>
									<option value="Espírito Santo do Dourado">
										Espírito Santo do Dourado
									</option>
									<option value="Estiva">Estiva</option>
									<option value="Estrela Dalva">Estrela Dalva</option>
									<option value="Estrela do Indaiá">Estrela do Indaiá</option>
									<option value="Estrela do Sul">Estrela do Sul</option>
									<option value="Eugenópolis">Eugenópolis</option>
									<option value="Ewbank da Câmara">Ewbank da Câmara</option>
									<option value="Extrema">Extrema</option>
									<option value="Fama">Fama</option>
									<option value="Faria Lemos">Faria Lemos</option>
									<option value="Felício dos Santos">Felício dos Santos</option>
									<option value="São Gonçalo do Rio Preto">
										São Gonçalo do Rio Preto
									</option>
									<option value="Felisburgo">Felisburgo</option>
									<option value="Felixlândia">Felixlândia</option>
									<option value="Fernandes Tourinho">Fernandes Tourinho</option>
									<option value="Ferros">Ferros</option>
									<option value="Fervedouro">Fervedouro</option>
									<option value="Florestal">Florestal</option>
									<option value="Formiga">Formiga</option>
									<option value="Formoso">Formoso</option>
									<option value="Fortaleza de Minas">Fortaleza de Minas</option>
									<option value="Fortuna de Minas">Fortuna de Minas</option>
									<option value="Francisco Badaró">Francisco Badaró</option>
									<option value="Francisco Dumont">Francisco Dumont</option>
									<option value="Francisco Sá">Francisco Sá</option>
									<option value="Franciscópolis">Franciscópolis</option>
									<option value="Frei Gaspar">Frei Gaspar</option>
									<option value="Frei Inocêncio">Frei Inocêncio</option>
									<option value="Frei Lagonegro">Frei Lagonegro</option>
									<option value="Fronteira">Fronteira</option>
									<option value="Fronteira dos Vales">
										Fronteira dos Vales
									</option>
									<option value="Fruta de Leite">Fruta de Leite</option>
									<option value="Frutal">Frutal</option>
									<option value="Funilândia">Funilândia</option>
									<option value="Galiléia">Galiléia</option>
									<option value="Gameleiras">Gameleiras</option>
									<option value="Glaucilândia">Glaucilândia</option>
									<option value="Goiabeira">Goiabeira</option>
									<option value="Goianá">Goianá</option>
									<option value="Gonçalves">Gonçalves</option>
									<option value="Gonzaga">Gonzaga</option>
									<option value="Gouveia">Gouveia</option>
									<option value="Governador Valadares">
										Governador Valadares
									</option>
									<option value="Grão Mogol">Grão Mogol</option>
									<option value="Grupiara">Grupiara</option>
									<option value="Guanhães">Guanhães</option>
									<option value="Guapé">Guapé</option>
									<option value="Guaraciaba">Guaraciaba</option>
									<option value="Guaraciama">Guaraciama</option>
									<option value="Guaranésia">Guaranésia</option>
									<option value="Guarani">Guarani</option>
									<option value="Guarará">Guarará</option>
									<option value="Guarda-Mor">Guarda-Mor</option>
									<option value="Guaxupé">Guaxupé</option>
									<option value="Guidoval">Guidoval</option>
									<option value="Guimarânia">Guimarânia</option>
									<option value="Guiricema">Guiricema</option>
									<option value="Gurinhatã">Gurinhatã</option>
									<option value="Heliodora">Heliodora</option>
									<option value="Iapu">Iapu</option>
									<option value="Ibertioga">Ibertioga</option>
									<option value="Ibiá">Ibiá</option>
									<option value="Ibiaí">Ibiaí</option>
									<option value="Ibiracatu">Ibiracatu</option>
									<option value="Ibiraci">Ibiraci</option>
									<option value="Ibirité">Ibirité</option>
									<option value="Ibitiúra de Minas">Ibitiúra de Minas</option>
									<option value="Ibituruna">Ibituruna</option>
									<option value="Icaraí de Minas">Icaraí de Minas</option>
									<option value="Igarapé">Igarapé</option>
									<option value="Igaratinga">Igaratinga</option>
									<option value="Iguatama">Iguatama</option>
									<option value="Ijaci">Ijaci</option>
									<option value="Ilicínea">Ilicínea</option>
									<option value="Imbé de Minas">Imbé de Minas</option>
									<option value="Inconfidentes">Inconfidentes</option>
									<option value="Indaiabira">Indaiabira</option>
									<option value="Indianópolis">Indianópolis</option>
									<option value="Ingaí">Ingaí</option>
									<option value="Inhapim">Inhapim</option>
									<option value="Inhaúma">Inhaúma</option>
									<option value="Inimutaba">Inimutaba</option>
									<option value="Ipaba">Ipaba</option>
									<option value="Ipanema">Ipanema</option>
									<option value="Ipatinga">Ipatinga</option>
									<option value="Ipiaçu">Ipiaçu</option>
									<option value="Ipuiúna">Ipuiúna</option>
									<option value="Iraí de Minas">Iraí de Minas</option>
									<option value="Itabira">Itabira</option>
									<option value="Itabirinha">Itabirinha</option>
									<option value="Itabirito">Itabirito</option>
									<option value="Itacambira">Itacambira</option>
									<option value="Itacarambi">Itacarambi</option>
									<option value="Itaguara">Itaguara</option>
									<option value="Itaipé">Itaipé</option>
									<option value="Itajubá">Itajubá</option>
									<option value="Itamarandiba">Itamarandiba</option>
									<option value="Itamarati de Minas">Itamarati de Minas</option>
									<option value="Itambacuri">Itambacuri</option>
									<option value="Itambé do Mato Dentro">
										Itambé do Mato Dentro
									</option>
									<option value="Itamogi">Itamogi</option>
									<option value="Itamonte">Itamonte</option>
									<option value="Itanhandu">Itanhandu</option>
									<option value="Itanhomi">Itanhomi</option>
									<option value="Itaobim">Itaobim</option>
									<option value="Itapagipe">Itapagipe</option>
									<option value="Itapecerica">Itapecerica</option>
									<option value="Itapeva">Itapeva</option>
									<option value="Itatiaiuçu">Itatiaiuçu</option>
									<option value="Itaú de Minas">Itaú de Minas</option>
									<option value="Itaúna">Itaúna</option>
									<option value="Itaverava">Itaverava</option>
									<option value="Itinga">Itinga</option>
									<option value="Itueta">Itueta</option>
									<option value="Ituiutaba">Ituiutaba</option>
									<option value="Itumirim">Itumirim</option>
									<option value="Iturama">Iturama</option>
									<option value="Itutinga">Itutinga</option>
									<option value="Jaboticatubas">Jaboticatubas</option>
									<option value="Jacinto">Jacinto</option>
									<option value="Jacuí">Jacuí</option>
									<option value="Jacutinga">Jacutinga</option>
									<option value="Jaguaraçu">Jaguaraçu</option>
									<option value="Jaíba">Jaíba</option>
									<option value="Jampruca">Jampruca</option>
									<option value="Janaúba">Janaúba</option>
									<option value="Januária">Januária</option>
									<option value="Japaraíba">Japaraíba</option>
									<option value="Japonvar">Japonvar</option>
									<option value="Jeceaba">Jeceaba</option>
									<option value="Jenipapo de Minas">Jenipapo de Minas</option>
									<option value="Jequeri">Jequeri</option>
									<option value="Jequitaí">Jequitaí</option>
									<option value="Jequitibá">Jequitibá</option>
									<option value="Jequitinhonha">Jequitinhonha</option>
									<option value="Jesuânia">Jesuânia</option>
									<option value="Joaíma">Joaíma</option>
									<option value="Joanésia">Joanésia</option>
									<option value="João Monlevade">João Monlevade</option>
									<option value="João Pinheiro">João Pinheiro</option>
									<option value="Joaquim Felício">Joaquim Felício</option>
									<option value="Jordânia">Jordânia</option>
									<option value="José Gonçalves de Minas">
										José Gonçalves de Minas
									</option>
									<option value="José Raydan">José Raydan</option>
									<option value="Josenópolis">Josenópolis</option>
									<option value="Nova União">Nova União</option>
									<option value="Juatuba">Juatuba</option>
									<option value="Juiz de Fora">Juiz de Fora</option>
									<option value="Juramento">Juramento</option>
									<option value="Juruaia">Juruaia</option>
									<option value="Juvenília">Juvenília</option>
									<option value="Ladainha">Ladainha</option>
									<option value="Lagamar">Lagamar</option>
									<option value="Lagoa da Prata">Lagoa da Prata</option>
									<option value="Lagoa dos Patos">Lagoa dos Patos</option>
									<option value="Lagoa Dourada">Lagoa Dourada</option>
									<option value="Lagoa Formosa">Lagoa Formosa</option>
									<option value="Lagoa Grande">Lagoa Grande</option>
									<option value="Lagoa Santa">Lagoa Santa</option>
									<option value="Lajinha">Lajinha</option>
									<option value="Lambari">Lambari</option>
									<option value="Lamim">Lamim</option>
									<option value="Laranjal">Laranjal</option>
									<option value="Lassance">Lassance</option>
									<option value="Lavras">Lavras</option>
									<option value="Leandro Ferreira">Leandro Ferreira</option>
									<option value="Leme do Prado">Leme do Prado</option>
									<option value="Leopoldina">Leopoldina</option>
									<option value="Liberdade">Liberdade</option>
									<option value="Lima Duarte">Lima Duarte</option>
									<option value="Limeira do Oeste">Limeira do Oeste</option>
									<option value="Lontra">Lontra</option>
									<option value="Luisburgo">Luisburgo</option>
									<option value="Luislândia">Luislândia</option>
									<option value="Luminárias">Luminárias</option>
									<option value="Luz">Luz</option>
									<option value="Machacalis">Machacalis</option>
									<option value="Machado">Machado</option>
									<option value="Madre de Deus de Minas">
										Madre de Deus de Minas
									</option>
									<option value="Malacacheta">Malacacheta</option>
									<option value="Mamonas">Mamonas</option>
									<option value="Manga">Manga</option>
									<option value="Manhuaçu">Manhuaçu</option>
									<option value="Manhumirim">Manhumirim</option>
									<option value="Mantena">Mantena</option>
									<option value="Maravilhas">Maravilhas</option>
									<option value="Mar de Espanha">Mar de Espanha</option>
									<option value="Maria da Fé">Maria da Fé</option>
									<option value="Mariana">Mariana</option>
									<option value="Marilac">Marilac</option>
									<option value="Mário Campos">Mário Campos</option>
									<option value="Maripá de Minas">Maripá de Minas</option>
									<option value="Marliéria">Marliéria</option>
									<option value="Marmelópolis">Marmelópolis</option>
									<option value="Martinho Campos">Martinho Campos</option>
									<option value="Martins Soares">Martins Soares</option>
									<option value="Mata Verde">Mata Verde</option>
									<option value="Materlândia">Materlândia</option>
									<option value="Mateus Leme">Mateus Leme</option>
									<option value="Matias Barbosa">Matias Barbosa</option>
									<option value="Matias Cardoso">Matias Cardoso</option>
									<option value="Matipó">Matipó</option>
									<option value="Mato Verde">Mato Verde</option>
									<option value="Matozinhos">Matozinhos</option>
									<option value="Matutina">Matutina</option>
									<option value="Medeiros">Medeiros</option>
									<option value="Medina">Medina</option>
									<option value="Mendes Pimentel">Mendes Pimentel</option>
									<option value="Mercês">Mercês</option>
									<option value="Mesquita">Mesquita</option>
									<option value="Minas Novas">Minas Novas</option>
									<option value="Minduri">Minduri</option>
									<option value="Mirabela">Mirabela</option>
									<option value="Miradouro">Miradouro</option>
									<option value="Miraí">Miraí</option>
									<option value="Miravânia">Miravânia</option>
									<option value="Moeda">Moeda</option>
									<option value="Moema">Moema</option>
									<option value="Monjolos">Monjolos</option>
									<option value="Monsenhor Paulo">Monsenhor Paulo</option>
									<option value="Montalvânia">Montalvânia</option>
									<option value="Monte Alegre de Minas">
										Monte Alegre de Minas
									</option>
									<option value="Monte Azul">Monte Azul</option>
									<option value="Monte Belo">Monte Belo</option>
									<option value="Monte Carmelo">Monte Carmelo</option>
									<option value="Monte Formoso">Monte Formoso</option>
									<option value="Monte Santo de Minas">
										Monte Santo de Minas
									</option>
									<option value="Montes Claros">Montes Claros</option>
									<option value="Monte Sião">Monte Sião</option>
									<option value="Montezuma">Montezuma</option>
									<option value="Morada Nova de Minas">
										Morada Nova de Minas
									</option>
									<option value="Morro da Garça">Morro da Garça</option>
									<option value="Morro do Pilar">Morro do Pilar</option>
									<option value="Munhoz">Munhoz</option>
									<option value="Muriaé">Muriaé</option>
									<option value="Mutum">Mutum</option>
									<option value="Muzambinho">Muzambinho</option>
									<option value="Nacip Raydan">Nacip Raydan</option>
									<option value="Nanuque">Nanuque</option>
									<option value="Naque">Naque</option>
									<option value="Natalândia">Natalândia</option>
									<option value="Natércia">Natércia</option>
									<option value="Nazareno">Nazareno</option>
									<option value="Nepomuceno">Nepomuceno</option>
									<option value="Ninheira">Ninheira</option>
									<option value="Nova Belém">Nova Belém</option>
									<option value="Nova Era">Nova Era</option>
									<option value="Nova Lima">Nova Lima</option>
									<option value="Nova Módica">Nova Módica</option>
									<option value="Nova Ponte">Nova Ponte</option>
									<option value="Nova Porteirinha">Nova Porteirinha</option>
									<option value="Nova Resende">Nova Resende</option>
									<option value="Nova Serrana">Nova Serrana</option>
									<option value="Novo Cruzeiro">Novo Cruzeiro</option>
									<option value="Novo Oriente de Minas">
										Novo Oriente de Minas
									</option>
									<option value="Novorizonte">Novorizonte</option>
									<option value="Olaria">Olaria</option>
									<option value="Olhos-D'Água">Olhos-D'Água</option>
									<option value="Olímpio Noronha">Olímpio Noronha</option>
									<option value="Oliveira">Oliveira</option>
									<option value="Oliveira Fortes">Oliveira Fortes</option>
									<option value="Onça de Pitangui">Onça de Pitangui</option>
									<option value="Oratórios">Oratórios</option>
									<option value="Orizânia">Orizânia</option>
									<option value="Ouro Branco">Ouro Branco</option>
									<option value="Ouro Fino">Ouro Fino</option>
									<option value="Ouro Preto">Ouro Preto</option>
									<option value="Ouro Verde de Minas">
										Ouro Verde de Minas
									</option>
									<option value="Padre Carvalho">Padre Carvalho</option>
									<option value="Padre Paraíso">Padre Paraíso</option>
									<option value="Paineiras">Paineiras</option>
									<option value="Pains">Pains</option>
									<option value="Pai Pedro">Pai Pedro</option>
									<option value="Paiva">Paiva</option>
									<option value="Palma">Palma</option>
									<option value="Palmópolis">Palmópolis</option>
									<option value="Papagaios">Papagaios</option>
									<option value="Paracatu">Paracatu</option>
									<option value="Pará de Minas">Pará de Minas</option>
									<option value="Paraguaçu">Paraguaçu</option>
									<option value="Paraisópolis">Paraisópolis</option>
									<option value="Paraopeba">Paraopeba</option>
									<option value="Passabém">Passabém</option>
									<option value="Passa Quatro">Passa Quatro</option>
									<option value="Passa Tempo">Passa Tempo</option>
									<option value="Passa-Vinte">Passa-Vinte</option>
									<option value="Passos">Passos</option>
									<option value="Patis">Patis</option>
									<option value="Patos de Minas">Patos de Minas</option>
									<option value="Patrocínio">Patrocínio</option>
									<option value="Patrocínio do Muriaé">
										Patrocínio do Muriaé
									</option>
									<option value="Paula Cândido">Paula Cândido</option>
									<option value="Paulistas">Paulistas</option>
									<option value="Pavão">Pavão</option>
									<option value="Peçanha">Peçanha</option>
									<option value="Pedra Azul">Pedra Azul</option>
									<option value="Pedra Bonita">Pedra Bonita</option>
									<option value="Pedra do Anta">Pedra do Anta</option>
									<option value="Pedra do Indaiá">Pedra do Indaiá</option>
									<option value="Pedra Dourada">Pedra Dourada</option>
									<option value="Pedralva">Pedralva</option>
									<option value="Pedras de Maria da Cruz">
										Pedras de Maria da Cruz
									</option>
									<option value="Pedrinópolis">Pedrinópolis</option>
									<option value="Pedro Leopoldo">Pedro Leopoldo</option>
									<option value="Pedro Teixeira">Pedro Teixeira</option>
									<option value="Pequeri">Pequeri</option>
									<option value="Pequi">Pequi</option>
									<option value="Perdigão">Perdigão</option>
									<option value="Perdizes">Perdizes</option>
									<option value="Perdões">Perdões</option>
									<option value="Periquito">Periquito</option>
									<option value="Pescador">Pescador</option>
									<option value="Piau">Piau</option>
									<option value="Piedade de Caratinga">
										Piedade de Caratinga
									</option>
									<option value="Piedade de Ponte Nova">
										Piedade de Ponte Nova
									</option>
									<option value="Piedade do Rio Grande">
										Piedade do Rio Grande
									</option>
									<option value="Piedade dos Gerais">Piedade dos Gerais</option>
									<option value="Pimenta">Pimenta</option>
									<option value="Pingo-D'Água">Pingo-D'Água</option>
									<option value="Pintópolis">Pintópolis</option>
									<option value="Piracema">Piracema</option>
									<option value="Pirajuba">Pirajuba</option>
									<option value="Piranga">Piranga</option>
									<option value="Piranguçu">Piranguçu</option>
									<option value="Piranguinho">Piranguinho</option>
									<option value="Pirapetinga">Pirapetinga</option>
									<option value="Pirapora">Pirapora</option>
									<option value="Piraúba">Piraúba</option>
									<option value="Pitangui">Pitangui</option>
									<option value="Piumhi">Piumhi</option>
									<option value="Planura">Planura</option>
									<option value="Poço Fundo">Poço Fundo</option>
									<option value="Poços de Caldas">Poços de Caldas</option>
									<option value="Pocrane">Pocrane</option>
									<option value="Pompéu">Pompéu</option>
									<option value="Ponte Nova">Ponte Nova</option>
									<option value="Ponto Chique">Ponto Chique</option>
									<option value="Ponto dos Volantes">Ponto dos Volantes</option>
									<option value="Porteirinha">Porteirinha</option>
									<option value="Porto Firme">Porto Firme</option>
									<option value="Poté">Poté</option>
									<option value="Pouso Alegre">Pouso Alegre</option>
									<option value="Pouso Alto">Pouso Alto</option>
									<option value="Prados">Prados</option>
									<option value="Prata">Prata</option>
									<option value="Pratápolis">Pratápolis</option>
									<option value="Pratinha">Pratinha</option>
									<option value="Presidente Bernardes">
										Presidente Bernardes
									</option>
									<option value="Presidente Juscelino">
										Presidente Juscelino
									</option>
									<option value="Presidente Kubitschek">
										Presidente Kubitschek
									</option>
									<option value="Presidente Olegário">
										Presidente Olegário
									</option>
									<option value="Alto Jequitibá">Alto Jequitibá</option>
									<option value="Prudente de Morais">Prudente de Morais</option>
									<option value="Quartel Geral">Quartel Geral</option>
									<option value="Queluzito">Queluzito</option>
									<option value="Raposos">Raposos</option>
									<option value="Raul Soares">Raul Soares</option>
									<option value="Recreio">Recreio</option>
									<option value="Reduto">Reduto</option>
									<option value="Resende Costa">Resende Costa</option>
									<option value="Resplendor">Resplendor</option>
									<option value="Ressaquinha">Ressaquinha</option>
									<option value="Riachinho">Riachinho</option>
									<option value="Riacho dos Machados">
										Riacho dos Machados
									</option>
									<option value="Ribeirão das Neves">Ribeirão das Neves</option>
									<option value="Ribeirão Vermelho">Ribeirão Vermelho</option>
									<option value="Rio Acima">Rio Acima</option>
									<option value="Rio Casca">Rio Casca</option>
									<option value="Rio Doce">Rio Doce</option>
									<option value="Rio do Prado">Rio do Prado</option>
									<option value="Rio Espera">Rio Espera</option>
									<option value="Rio Manso">Rio Manso</option>
									<option value="Rio Novo">Rio Novo</option>
									<option value="Rio Paranaíba">Rio Paranaíba</option>
									<option value="Rio Pardo de Minas">Rio Pardo de Minas</option>
									<option value="Rio Piracicaba">Rio Piracicaba</option>
									<option value="Rio Pomba">Rio Pomba</option>
									<option value="Rio Preto">Rio Preto</option>
									<option value="Rio Vermelho">Rio Vermelho</option>
									<option value="Ritápolis">Ritápolis</option>
									<option value="Rochedo de Minas">Rochedo de Minas</option>
									<option value="Rodeiro">Rodeiro</option>
									<option value="Romaria">Romaria</option>
									<option value="Rosário da Limeira">Rosário da Limeira</option>
									<option value="Rubelita">Rubelita</option>
									<option value="Rubim">Rubim</option>
									<option value="Sabará">Sabará</option>
									<option value="Sabinópolis">Sabinópolis</option>
									<option value="Sacramento">Sacramento</option>
									<option value="Salinas">Salinas</option>
									<option value="Salto da optgroupisa">
										Salto da optgroupisa
									</option>
									<option value="Santa Bárbara">Santa Bárbara</option>
									<option value="Santa Bárbara do Leste">
										Santa Bárbara do Leste
									</option>
									<option value="Santa Bárbara do Monte Verde">
										Santa Bárbara do Monte Verde
									</option>
									<option value="Santa Bárbara do Tugúrio">
										Santa Bárbara do Tugúrio
									</option>
									<option value="Santa Cruz de Minas">
										Santa Cruz de Minas
									</option>
									<option value="Santa Cruz de Salinas">
										Santa Cruz de Salinas
									</option>
									<option value="Santa Cruz do Escalvado">
										Santa Cruz do Escalvado
									</option>
									<option value="Santa Efigênia de Minas">
										Santa Efigênia de Minas
									</option>
									<option value="Santa Fé de Minas">Santa Fé de Minas</option>
									<option value="Santa Helena de Minas">
										Santa Helena de Minas
									</option>
									<option value="Santa Juliana">Santa Juliana</option>
									<option value="Santa Luzia">Santa Luzia</option>
									<option value="Santa Margarida">Santa Margarida</option>
									<option value="Santa Maria de Itabira">
										Santa Maria de Itabira
									</option>
									<option value="Santa Maria do Salto">
										Santa Maria do Salto
									</option>
									<option value="Santa Maria do Suaçuí">
										Santa Maria do Suaçuí
									</option>
									<option value="Santana da Vargem">Santana da Vargem</option>
									<option value="Santana de Cataguases">
										Santana de Cataguases
									</option>
									<option value="Santana de Pirapama">
										Santana de Pirapama
									</option>
									<option value="Santana do Deserto">Santana do Deserto</option>
									<option value="Santana do Garambéu">
										Santana do Garambéu
									</option>
									<option value="Santana do Jacaré">Santana do Jacaré</option>
									<option value="Santana do Manhuaçu">
										Santana do Manhuaçu
									</option>
									<option value="Santana do Paraíso">Santana do Paraíso</option>
									<option value="Santana do Riacho">Santana do Riacho</option>
									<option value="Santana dos Montes">Santana dos Montes</option>
									<option value="Santa Rita de Caldas">
										Santa Rita de Caldas
									</option>
									<option value="Santa Rita de Jacutinga">
										Santa Rita de Jacutinga
									</option>
									<option value="Santa Rita de Minas">
										Santa Rita de Minas
									</option>
									<option value="Santa Rita de Ibitipoca">
										Santa Rita de Ibitipoca
									</option>
									<option value="Santa Rita do Itueto">
										Santa Rita do Itueto
									</option>
									<option value="Santa Rita do Sapucaí">
										Santa Rita do Sapucaí
									</option>
									<option value="Santa Rosa da Serra">
										Santa Rosa da Serra
									</option>
									<option value="Santa Vitória">Santa Vitória</option>
									<option value="Santo Antônio do Amparo">
										Santo Antônio do Amparo
									</option>
									<option value="Santo Antônio do Aventureiro">
										Santo Antônio do Aventureiro
									</option>
									<option value="Santo Antônio do Grama">
										Santo Antônio do Grama
									</option>
									<option value="Santo Antônio do Itambé">
										Santo Antônio do Itambé
									</option>
									<option value="Santo Antônio do Jacinto">
										Santo Antônio do Jacinto
									</option>
									<option value="Santo Antônio do Monte">
										Santo Antônio do Monte
									</option>
									<option value="Santo Antônio do Retiro">
										Santo Antônio do Retiro
									</option>
									<option value="Santo Antônio do Rio Abaixo">
										Santo Antônio do Rio Abaixo
									</option>
									<option value="Santo Hipólito">Santo Hipólito</option>
									<option value="Santos Dumont">Santos Dumont</option>
									<option value="São Bento Abade">São Bento Abade</option>
									<option value="São Brás do Suaçuí">São Brás do Suaçuí</option>
									<option value="São Domingos das Dores">
										São Domingos das Dores
									</option>
									<option value="São Domingos do Prata">
										São Domingos do Prata
									</option>
									<option value="São Félix de Minas">São Félix de Minas</option>
									<option value="São Francisco">São Francisco</option>
									<option value="São Francisco de Paula">
										São Francisco de Paula
									</option>
									<option value="São Francisco de Sales">
										São Francisco de Sales
									</option>
									<option value="São Francisco do Glória">
										São Francisco do Glória
									</option>
									<option value="São Geraldo">São Geraldo</option>
									<option value="São Geraldo da Piedade">
										São Geraldo da Piedade
									</option>
									<option value="São Geraldo do Baixio">
										São Geraldo do Baixio
									</option>
									<option value="São Gonçalo do Abaeté">
										São Gonçalo do Abaeté
									</option>
									<option value="São Gonçalo do Pará">
										São Gonçalo do Pará
									</option>
									<option value="São Gonçalo do Rio Abaixo">
										São Gonçalo do Rio Abaixo
									</option>
									<option value="São Gonçalo do Sapucaí">
										São Gonçalo do Sapucaí
									</option>
									<option value="São Gotardo">São Gotardo</option>
									<option value="São João Batista do Glória">
										São João Batista do Glória
									</option>
									<option value="São João da Lagoa">São João da Lagoa</option>
									<option value="São João da Mata">São João da Mata</option>
									<option value="São João da Ponte">São João da Ponte</option>
									<option value="São João das Missões">
										São João das Missões
									</option>
									<option value="São João del Rei">São João del Rei</option>
									<option value="São João do Manhuaçu">
										São João do Manhuaçu
									</option>
									<option value="São João do Manteninha">
										São João do Manteninha
									</option>
									<option value="São João do Oriente">
										São João do Oriente
									</option>
									<option value="São João do Pacuí">São João do Pacuí</option>
									<option value="São João do Paraíso">
										São João do Paraíso
									</option>
									<option value="São João Evangelista">
										São João Evangelista
									</option>
									<option value="São João Nepomuceno">
										São João Nepomuceno
									</option>
									<option value="São Joaquim de Bicas">
										São Joaquim de Bicas
									</option>
									<option value="São José da Barra">São José da Barra</option>
									<option value="São José da Lapa">São José da Lapa</option>
									<option value="São José da Safira">São José da Safira</option>
									<option value="São José da Varginha">
										São José da Varginha
									</option>
									<option value="São José do Alegre">São José do Alegre</option>
									<option value="São José do optgroupino">
										São José do optgroupino
									</option>
									<option value="São José do Goiabal">
										São José do Goiabal
									</option>
									<option value="São José do Jacuri">São José do Jacuri</option>
									<option value="São José do Mantimento">
										São José do Mantimento
									</option>
									<option value="São Lourenço">São Lourenço</option>
									<option value="São Miguel do Anta">São Miguel do Anta</option>
									<option value="São Pedro da União">São Pedro da União</option>
									<option value="São Pedro dos Ferros">
										São Pedro dos Ferros
									</option>
									<option value="São Pedro do Suaçuí">
										São Pedro do Suaçuí
									</option>
									<option value="São Romão">São Romão</option>
									<option value="São Roque de Minas">São Roque de Minas</option>
									<option value="São Sebastião da Bela Vista">
										São Sebastião da Bela Vista
									</option>
									<option value="São Sebastião da Vargem Alegre">
										São Sebastião da Vargem Alegre
									</option>
									<option value="São Sebastião do Anta">
										São Sebastião do Anta
									</option>
									<option value="São Sebastião do Maranhão">
										São Sebastião do Maranhão
									</option>
									<option value="São Sebastião do Oeste">
										São Sebastião do Oeste
									</option>
									<option value="São Sebastião do Paraíso">
										São Sebastião do Paraíso
									</option>
									<option value="São Sebastião do Rio Preto">
										São Sebastião do Rio Preto
									</option>
									<option value="São Sebastião do Rio Verde">
										São Sebastião do Rio Verde
									</option>
									<option value="São Tiago">São Tiago</option>
									<option value="São Tomás de Aquino">
										São Tomás de Aquino
									</option>
									<option value="São Thomé das Letras">
										São Thomé das Letras
									</option>
									<option value="São Vicente de Minas">
										São Vicente de Minas
									</option>
									<option value="Sapucaí-Mirim">Sapucaí-Mirim</option>
									<option value="Sardoá">Sardoá</option>
									<option value="Sarzedo">Sarzedo</option>
									<option value="Setubinha">Setubinha</option>
									<option value="Sem-Peixe">Sem-Peixe</option>
									<option value="Senador Amaral">Senador Amaral</option>
									<option value="Senador Cortes">Senador Cortes</option>
									<option value="Senador Firmino">Senador Firmino</option>
									<option value="Senador José Bento">Senador José Bento</option>
									<option value="Senador Modestino Gonçalves">
										Senador Modestino Gonçalves
									</option>
									<option value="Senhora de Oliveira">
										Senhora de Oliveira
									</option>
									<option value="Senhora do Porto">Senhora do Porto</option>
									<option value="Senhora dos Remédios">
										Senhora dos Remédios
									</option>
									<option value="Sericita">Sericita</option>
									<option value="Seritinga">Seritinga</option>
									<option value="Serra Azul de Minas">
										Serra Azul de Minas
									</option>
									<option value="Serra da Saudade">Serra da Saudade</option>
									<option value="Serra dos Aimorés">Serra dos Aimorés</option>
									<option value="Serra do Salitre">Serra do Salitre</option>
									<option value="Serrania">Serrania</option>
									<option value="Serranópolis de Minas">
										Serranópolis de Minas
									</option>
									<option value="Serranos">Serranos</option>
									<option value="Serro">Serro</option>
									<option value="Sete Lagoas">Sete Lagoas</option>
									<option value="Silveirânia">Silveirânia</option>
									<option value="Silvianópolis">Silvianópolis</option>
									<option value="Simão Pereira">Simão Pereira</option>
									<option value="Simonésia">Simonésia</option>
									<option value="Sobrália">Sobrália</option>
									<option value="Soledade de Minas">Soledade de Minas</option>
									<option value="Tabuleiro">Tabuleiro</option>
									<option value="Taiobeiras">Taiobeiras</option>
									<option value="Taparuba">Taparuba</option>
									<option value="Tapira">Tapira</option>
									<option value="Tapiraí">Tapiraí</option>
									<option value="Taquaraçu de Minas">Taquaraçu de Minas</option>
									<option value="Tarumirim">Tarumirim</option>
									<option value="Teixeiras">Teixeiras</option>
									<option value="Teófilo Otoni">Teófilo Otoni</option>
									<option value="Timóteo">Timóteo</option>
									<option value="Tiradentes">Tiradentes</option>
									<option value="Tiros">Tiros</option>
									<option value="Tocantins">Tocantins</option>
									<option value="Tocos do Moji">Tocos do Moji</option>
									<option value="Toledo">Toledo</option>
									<option value="Tombos">Tombos</option>
									<option value="Três Corações">Três Corações</option>
									<option value="Três Marias">Três Marias</option>
									<option value="Três Pontas">Três Pontas</option>
									<option value="Tumiritinga">Tumiritinga</option>
									<option value="Tupaciguara">Tupaciguara</option>
									<option value="Turmalina">Turmalina</option>
									<option value="Turvolândia">Turvolândia</option>
									<option value="Ubá">Ubá</option>
									<option value="Ubaí">Ubaí</option>
									<option value="Ubaporanga">Ubaporanga</option>
									<option value="Uberaba">Uberaba</option>
									<option value="Uberlândia">Uberlândia</option>
									<option value="Umburatiba">Umburatiba</option>
									<option value="Unaí">Unaí</option>
									<option value="União de Minas">União de Minas</option>
									<option value="Uruana de Minas">Uruana de Minas</option>
									<option value="Urucânia">Urucânia</option>
									<option value="Urucuia">Urucuia</option>
									<option value="Vargem Alegre">Vargem Alegre</option>
									<option value="Vargem Bonita">Vargem Bonita</option>
									<option value="Vargem Grande do Rio Pardo">
										Vargem Grande do Rio Pardo
									</option>
									<option value="Varginha">Varginha</option>
									<option value="Varjão de Minas">Varjão de Minas</option>
									<option value="Várzea da Palma">Várzea da Palma</option>
									<option value="Varzelândia">Varzelândia</option>
									<option value="Vazante">Vazante</option>
									<option value="Verdelândia">Verdelândia</option>
									<option value="Veredinha">Veredinha</option>
									<option value="Veríssimo">Veríssimo</option>
									<option value="Vermelho Novo">Vermelho Novo</option>
									<option value="Vespasiano">Vespasiano</option>
									<option value="Viçosa">Viçosa</option>
									<option value="Vieiras">Vieiras</option>
									<option value="Mathias Lobato">Mathias Lobato</option>
									<option value="Virgem da Lapa">Virgem da Lapa</option>
									<option value="Virgínia">Virgínia</option>
									<option value="Virginópolis">Virginópolis</option>
									<option value="Virgolândia">Virgolândia</option>
									<option value="Visconde do Rio Branco">
										Visconde do Rio Branco
									</option>
									<option value="Volta Grande">Volta Grande</option>
									<option value="Wenceslau Braz">Wenceslau Braz</option>
								</optgroup>
								<optgroup class="state-es state-group d-none">
									<option value="Afonso Cláudio">Afonso Cláudio</option>
									<option value="Águia Branca">Águia Branca</option>
									<option value="Água Doce do Norte">Água Doce do Norte</option>
									<option value="Alegre">Alegre</option>
									<option value="Alfredo Chaves">Alfredo Chaves</option>
									<option value="Alto Rio Novo">Alto Rio Novo</option>
									<option value="Anchieta">Anchieta</option>
									<option value="Apiacá">Apiacá</option>
									<option value="Aracruz">Aracruz</option>
									<option value="Atilio Vivacqua">Atilio Vivacqua</option>
									<option value="Baixo Guandu">Baixo Guandu</option>
									<option value="Barra de São Francisco">
										Barra de São Francisco
									</option>
									<option value="Boa Esperança">Boa Esperança</option>
									<option value="Bom Jesus do Norte">Bom Jesus do Norte</option>
									<option value="Brejetuba">Brejetuba</option>
									<option value="Cachoeiro de Itapemirim">
										Cachoeiro de Itapemirim
									</option>
									<option value="Cariacica">Cariacica</option>
									<option value="Castelo">Castelo</option>
									<option value="Colatina">Colatina</option>
									<option value="Conceição da Barra">Conceição da Barra</option>
									<option value="Conceição do Castelo">
										Conceição do Castelo
									</option>
									<option value="optgroupino de São Lourenço">
										optgroupino de São Lourenço
									</option>
									<option value="Domingos Martins">Domingos Martins</option>
									<option value="Dores do Rio Preto">Dores do Rio Preto</option>
									<option value="Ecoporanga">Ecoporanga</option>
									<option value="Fundão">Fundão</option>
									<option value="Governador Lindenberg">
										Governador Lindenberg
									</option>
									<option value="Guaçuí">Guaçuí</option>
									<option value="Guarapari">Guarapari</option>
									<option value="Ibatiba">Ibatiba</option>
									<option value="Ibiraçu">Ibiraçu</option>
									<option value="Ibitirama">Ibitirama</option>
									<option value="Iconha">Iconha</option>
									<option value="Irupi">Irupi</option>
									<option value="Itaguaçu">Itaguaçu</option>
									<option value="Itapemirim">Itapemirim</option>
									<option value="Itarana">Itarana</option>
									<option value="Iúna">Iúna</option>
									<option value="Jaguaré">Jaguaré</option>
									<option value="Jerônimo Monteiro">Jerônimo Monteiro</option>
									<option value="João Neiva">João Neiva</option>
									<option value="Laranja da Terra">Laranja da Terra</option>
									<option value="Linhares">Linhares</option>
									<option value="Mantenópolis">Mantenópolis</option>
									<option value="Marataízes">Marataízes</option>
									<option value="Marechal Floriano">Marechal Floriano</option>
									<option value="Marilândia">Marilândia</option>
									<option value="Mimoso do Sul">Mimoso do Sul</option>
									<option value="Montanha">Montanha</option>
									<option value="Mucurici">Mucurici</option>
									<option value="Muniz Freire">Muniz Freire</option>
									<option value="Muqui">Muqui</option>
									<option value="Nova Venécia">Nova Venécia</option>
									<option value="Pancas">Pancas</option>
									<option value="Pedro Canário">Pedro Canário</option>
									<option value="Pinheiros">Pinheiros</option>
									<option value="Piúma">Piúma</option>
									<option value="Ponto Belo">Ponto Belo</option>
									<option value="Presidente Kennedy">Presidente Kennedy</option>
									<option value="Rio Bananal">Rio Bananal</option>
									<option value="Rio Novo do Sul">Rio Novo do Sul</option>
									<option value="Santa Leopoldina">Santa Leopoldina</option>
									<option value="Santa Maria de Jetibá">
										Santa Maria de Jetibá
									</option>
									<option value="Santa Teresa">Santa Teresa</option>
									<option value="São Domingos do Norte">
										São Domingos do Norte
									</option>
									<option value="São Gabriel da Palha">
										São Gabriel da Palha
									</option>
									<option value="São José do Calçado">
										São José do Calçado
									</option>
									<option value="São Mateus">São Mateus</option>
									<option value="São Roque do Canaã">São Roque do Canaã</option>
									<option value="Serra">Serra</option>
									<option value="Sooretama">Sooretama</option>
									<option value="Vargem Alta">Vargem Alta</option>
									<option value="Venda Nova do Imigrante">
										Venda Nova do Imigrante
									</option>
									<option value="Viana">Viana</option>
									<option value="Vila Pavão">Vila Pavão</option>
									<option value="Vila Valério">Vila Valério</option>
									<option value="Vila Velha">Vila Velha</option>
									<option value="Vitória">Vitória</option>
								</optgroup>
								<optgroup class="state-rj state-group d-none">
									<option value="Angra dos Reis">Angra dos Reis</option>
									<option value="Aperibé">Aperibé</option>
									<option value="Araruama">Araruama</option>
									<option value="Areal">Areal</option>
									<option value="Armação dos Búzios">Armação dos Búzios</option>
									<option value="Arraial do Cabo">Arraial do Cabo</option>
									<option value="Barra do Piraí">Barra do Piraí</option>
									<option value="Barra Mansa">Barra Mansa</option>
									<option value="Belford Roxo">Belford Roxo</option>
									<option value="Bom Jardim">Bom Jardim</option>
									<option value="Bom Jesus do Itabapoana">
										Bom Jesus do Itabapoana
									</option>
									<option value="Cabo Frio">Cabo Frio</option>
									<option value="Cachoeiras de Macacu">
										Cachoeiras de Macacu
									</option>
									<option value="Cambuci">Cambuci</option>
									<option value="Carapebus">Carapebus</option>
									<option value="Comendador Levy Gasparian">
										Comendador Levy Gasparian
									</option>
									<option value="Campos dos Goytacazes">
										Campos dos Goytacazes
									</option>
									<option value="Cantagalo">Cantagalo</option>
									<option value="Cardoso Moreira">Cardoso Moreira</option>
									<option value="Carmo">Carmo</option>
									<option value="Casimiro de Abreu">Casimiro de Abreu</option>
									<option value="Conceição de Macabu">
										Conceição de Macabu
									</option>
									<option value="Cordeiro">Cordeiro</option>
									<option value="Duas Barras">Duas Barras</option>
									<option value="Duque de Caxias">Duque de Caxias</option>
									<option value="Engenheiro Paulo de Frontin">
										Engenheiro Paulo de Frontin
									</option>
									<option value="Guapimirim">Guapimirim</option>
									<option value="Iguaba Grande">Iguaba Grande</option>
									<option value="Itaboraí">Itaboraí</option>
									<option value="Itaguaí">Itaguaí</option>
									<option value="Italva">Italva</option>
									<option value="Itaocara">Itaocara</option>
									<option value="Itaperuna">Itaperuna</option>
									<option value="Itatiaia">Itatiaia</option>
									<option value="Japeri">Japeri</option>
									<option value="Laje do Muriaé">Laje do Muriaé</option>
									<option value="Macaé">Macaé</option>
									<option value="Macuco">Macuco</option>
									<option value="Magé">Magé</option>
									<option value="Mangaratiba">Mangaratiba</option>
									<option value="Maricá">Maricá</option>
									<option value="Mendes">Mendes</option>
									<option value="Mesquita">Mesquita</option>
									<option value="Miguel Pereira">Miguel Pereira</option>
									<option value="Miracema">Miracema</option>
									<option value="Natividade">Natividade</option>
									<option value="Nilópolis">Nilópolis</option>
									<option value="Niterói">Niterói</option>
									<option value="Nova Friburgo">Nova Friburgo</option>
									<option value="Nova Iguaçu">Nova Iguaçu</option>
									<option value="Paracambi">Paracambi</option>
									<option value="Paraíba do Sul">Paraíba do Sul</option>
									<option value="Paraty">Paraty</option>
									<option value="Paty do Alferes">Paty do Alferes</option>
									<option value="Petrópolis">Petrópolis</option>
									<option value="Pinheiral">Pinheiral</option>
									<option value="Piraí">Piraí</option>
									<option value="Porciúncula">Porciúncula</option>
									<option value="Porto Real">Porto Real</option>
									<option value="Quatis">Quatis</option>
									<option value="Queimados">Queimados</option>
									<option value="Quissamã">Quissamã</option>
									<option value="Resende">Resende</option>
									<option value="Rio Bonito">Rio Bonito</option>
									<option value="Rio Claro">Rio Claro</option>
									<option value="Rio das Flores">Rio das Flores</option>
									<option value="Rio das Ostras">Rio das Ostras</option>
									<option value="Rio de Janeiro">Rio de Janeiro</option>
									<option value="Santa Maria Madalena">
										Santa Maria Madalena
									</option>
									<option value="Santo Antônio de Pádua">
										Santo Antônio de Pádua
									</option>
									<option value="São Francisco de Itabapoana">
										São Francisco de Itabapoana
									</option>
									<option value="São Fidélis">São Fidélis</option>
									<option value="São Gonçalo">São Gonçalo</option>
									<option value="São João da Barra">São João da Barra</option>
									<option value="São João de Meriti">São João de Meriti</option>
									<option value="São José de Ubá">São José de Ubá</option>
									<option value="São José do Vale do Rio Preto">
										São José do Vale do Rio Preto
									</option>
									<option value="São Pedro da Aldeia">
										São Pedro da Aldeia
									</option>
									<option value="São Sebastião do Alto">
										São Sebastião do Alto
									</option>
									<option value="Sapucaia">Sapucaia</option>
									<option value="Saquarema">Saquarema</option>
									<option value="Seropédica">Seropédica</option>
									<option value="Silva Jardim">Silva Jardim</option>
									<option value="Sumidouro">Sumidouro</option>
									<option value="Tanguá">Tanguá</option>
									<option value="Teresópolis">Teresópolis</option>
									<option value="Trajano de Moraes">Trajano de Moraes</option>
									<option value="Três Rios">Três Rios</option>
									<option value="Valença">Valença</option>
									<option value="Varre-Sai">Varre-Sai</option>
									<option value="Vassouras">Vassouras</option>
									<option value="Volta Redonda">Volta Redonda</option>
								</optgroup>
								<optgroup class="state-sp state-group d-none">
									<option value="Adamantina">Adamantina</option>
									<option value="Adolfo">Adolfo</option>
									<option value="Aguaí">Aguaí</option>
									<option value="Águas da Prata">Águas da Prata</option>
									<option value="Águas de Lindóia">Águas de Lindóia</option>
									<option value="Águas de Santa Bárbara">
										Águas de Santa Bárbara
									</option>
									<option value="Águas de São Pedro">Águas de São Pedro</option>
									<option value="Agudos">Agudos</option>
									<option value="Alambari">Alambari</option>
									<option value="Alfredo Marcondes">Alfredo Marcondes</option>
									<option value="Altair">Altair</option>
									<option value="Altinópolis">Altinópolis</option>
									<option value="Alto Alegre">Alto Alegre</option>
									<option value="Alumínio">Alumínio</option>
									<option value="Álvares Florence">Álvares Florence</option>
									<option value="Álvares Machado">Álvares Machado</option>
									<option value="Álvaro de Carvalho">Álvaro de Carvalho</option>
									<option value="Alvinlândia">Alvinlândia</option>
									<option value="Americana">Americana</option>
									<option value="Américo Brasiliense">
										Américo Brasiliense
									</option>
									<option value="Américo de Campos">Américo de Campos</option>
									<option value="Amparo">Amparo</option>
									<option value="Analândia">Analândia</option>
									<option value="Andradina">Andradina</option>
									<option value="Angatuba">Angatuba</option>
									<option value="Anhembi">Anhembi</option>
									<option value="Anhumas">Anhumas</option>
									<option value="Aparecida">Aparecida</option>
									<option value="Aparecida D'Oeste">Aparecida D'Oeste</option>
									<option value="Apiaí">Apiaí</option>
									<option value="Araçariguama">Araçariguama</option>
									<option value="Araçatuba">Araçatuba</option>
									<option value="Araçoiaba da Serra">Araçoiaba da Serra</option>
									<option value="Aramina">Aramina</option>
									<option value="Arandu">Arandu</option>
									<option value="Arapeí">Arapeí</option>
									<option value="Araraquara">Araraquara</option>
									<option value="Araras">Araras</option>
									<option value="Arco-Íris">Arco-Íris</option>
									<option value="Arealva">Arealva</option>
									<option value="Areias">Areias</option>
									<option value="Areiópolis">Areiópolis</option>
									<option value="Ariranha">Ariranha</option>
									<option value="Artur Nogueira">Artur Nogueira</option>
									<option value="Arujá">Arujá</option>
									<option value="Aspásia">Aspásia</option>
									<option value="Assis">Assis</option>
									<option value="Atibaia">Atibaia</option>
									<option value="Auriflama">Auriflama</option>
									<option value="Avaí">Avaí</option>
									<option value="Avanhandava">Avanhandava</option>
									<option value="Avaré">Avaré</option>
									<option value="Bady Bassitt">Bady Bassitt</option>
									<option value="Balbinos">Balbinos</option>
									<option value="Bálsamo">Bálsamo</option>
									<option value="Bananal">Bananal</option>
									<option value="Barão de Antonina">Barão de Antonina</option>
									<option value="Barbosa">Barbosa</option>
									<option value="Bariri">Bariri</option>
									<option value="Barra Bonita">Barra Bonita</option>
									<option value="Barra do Chapéu">Barra do Chapéu</option>
									<option value="Barra do Turvo">Barra do Turvo</option>
									<option value="Barretos">Barretos</option>
									<option value="Barrinha">Barrinha</option>
									<option value="Barueri">Barueri</option>
									<option value="Bastos">Bastos</option>
									<option value="Batatais">Batatais</option>
									<option value="Bauru">Bauru</option>
									<option value="Bebedouro">Bebedouro</option>
									<option value="Bento de Abreu">Bento de Abreu</option>
									<option value="Bernardino de Campos">
										Bernardino de Campos
									</option>
									<option value="Bertioga">Bertioga</option>
									<option value="Bilac">Bilac</option>
									<option value="Birigui">Birigui</option>
									<option value="Biritiba-Mirim">Biritiba-Mirim</option>
									<option value="Boa Esperança do Sul">
										Boa Esperança do Sul
									</option>
									<option value="Bocaina">Bocaina</option>
									<option value="Bofete">Bofete</option>
									<option value="Boituva">Boituva</option>
									<option value="Bom Jesus dos Perdões">
										Bom Jesus dos Perdões
									</option>
									<option value="Bom Sucesso de Itararé">
										Bom Sucesso de Itararé
									</option>
									<option value="Borá">Borá</option>
									<option value="Boracéia">Boracéia</option>
									<option value="Borborema">Borborema</option>
									<option value="Borebi">Borebi</option>
									<option value="Botucatu">Botucatu</option>
									<option value="Bragança Paulista">Bragança Paulista</option>
									<option value="Braúna">Braúna</option>
									<option value="Brejo Alegre">Brejo Alegre</option>
									<option value="Brodowski">Brodowski</option>
									<option value="Brotas">Brotas</option>
									<option value="Buri">Buri</option>
									<option value="Buritama">Buritama</option>
									<option value="Buritizal">Buritizal</option>
									<option value="Cabrália Paulista">Cabrália Paulista</option>
									<option value="Cabreúva">Cabreúva</option>
									<option value="Caçapava">Caçapava</option>
									<option value="Cachoeira Paulista">Cachoeira Paulista</option>
									<option value="Caconde">Caconde</option>
									<option value="Cafelândia">Cafelândia</option>
									<option value="Caiabu">Caiabu</option>
									<option value="Caieiras">Caieiras</option>
									<option value="Caiuá">Caiuá</option>
									<option value="Cajamar">Cajamar</option>
									<option value="Cajati">Cajati</option>
									<option value="Cajobi">Cajobi</option>
									<option value="Cajuru">Cajuru</option>
									<option value="Campina do Monte Alegre">
										Campina do Monte Alegre
									</option>
									<option value="Campinas">Campinas</option>
									<option value="Campo Limpo Paulista">
										Campo Limpo Paulista
									</option>
									<option value="Campos do Jordão">Campos do Jordão</option>
									<option value="Campos Novos Paulista">
										Campos Novos Paulista
									</option>
									<option value="Cananéia">Cananéia</option>
									<option value="Canas">Canas</option>
									<option value="Cândido Mota">Cândido Mota</option>
									<option value="Cândido Rodrigues">Cândido Rodrigues</option>
									<option value="Canitar">Canitar</option>
									<option value="Capão Bonito">Capão Bonito</option>
									<option value="Capela do Alto">Capela do Alto</option>
									<option value="Capivari">Capivari</option>
									<option value="Caraguatatuba">Caraguatatuba</option>
									<option value="Carapicuíba">Carapicuíba</option>
									<option value="Cardoso">Cardoso</option>
									<option value="Casa Branca">Casa Branca</option>
									<option value="Cássia dos Coqueiros">
										Cássia dos Coqueiros
									</option>
									<option value="Castilho">Castilho</option>
									<option value="Catanduva">Catanduva</option>
									<option value="Catiguá">Catiguá</option>
									<option value="Cedral">Cedral</option>
									<option value="Cerqueira César">Cerqueira César</option>
									<option value="Cerquilho">Cerquilho</option>
									<option value="Cesário Lange">Cesário Lange</option>
									<option value="Charqueada">Charqueada</option>
									<option value="Clementina">Clementina</option>
									<option value="Colina">Colina</option>
									<option value="Colômbia">Colômbia</option>
									<option value="Conchal">Conchal</option>
									<option value="Conchas">Conchas</option>
									<option value="Cordeirópolis">Cordeirópolis</option>
									<option value="Coroados">Coroados</option>
									<option value="Coronel Macedo">Coronel Macedo</option>
									<option value="Corumbataí">Corumbataí</option>
									<option value="Cosmópolis">Cosmópolis</option>
									<option value="Cosmorama">Cosmorama</option>
									<option value="Cotia">Cotia</option>
									<option value="Cravinhos">Cravinhos</option>
									<option value="Cristais Paulista">Cristais Paulista</option>
									<option value="Cruzália">Cruzália</option>
									<option value="Cruzeiro">Cruzeiro</option>
									<option value="Cubatão">Cubatão</option>
									<option value="Cunha">Cunha</option>
									<option value="Descalvado">Descalvado</option>
									<option value="Diadema">Diadema</option>
									<option value="Dirce Reis">Dirce Reis</option>
									<option value="optgroupinolândia">optgroupinolândia</option>
									<option value="Dobrada">Dobrada</option>
									<option value="Dois Córregos">Dois Córregos</option>
									<option value="Dolcinópolis">Dolcinópolis</option>
									<option value="Dourado">Dourado</option>
									<option value="Dracena">Dracena</option>
									<option value="Duartina">Duartina</option>
									<option value="Dumont">Dumont</option>
									<option value="Echaporã">Echaporã</option>
									<option value="Eldorado">Eldorado</option>
									<option value="Elias Fausto">Elias Fausto</option>
									<option value="Elisiário">Elisiário</option>
									<option value="Embaúba">Embaúba</option>
									<option value="Embu das Artes">Embu das Artes</option>
									<option value="Embu-Guaçu">Embu-Guaçu</option>
									<option value="Emilianópolis">Emilianópolis</option>
									<option value="Engenheiro Coelho">Engenheiro Coelho</option>
									<option value="Espírito Santo do Pinhal">
										Espírito Santo do Pinhal
									</option>
									<option value="Espírito Santo do Turvo">
										Espírito Santo do Turvo
									</option>
									<option value="Estrela D'Oeste">Estrela D'Oeste</option>
									<option value="Estrela do Norte">Estrela do Norte</option>
									<option value="Euclides da Cunha Paulista">
										Euclides da Cunha Paulista
									</option>
									<option value="Fartura">Fartura</option>
									<option value="Fernandópolis">Fernandópolis</option>
									<option value="Fernando Prestes">Fernando Prestes</option>
									<option value="Fernão">Fernão</option>
									<option value="Ferraz de Vasconcelos">
										Ferraz de Vasconcelos
									</option>
									<option value="Flora Rica">Flora Rica</option>
									<option value="Floreal">Floreal</option>
									<option value="Flórida Paulista">Flórida Paulista</option>
									<option value="Florínia">Florínia</option>
									<option value="Franca">Franca</option>
									<option value="Francisco Morato">Francisco Morato</option>
									<option value="Franco da Rocha">Franco da Rocha</option>
									<option value="Gabriel Monteiro">Gabriel Monteiro</option>
									<option value="Gália">Gália</option>
									<option value="Garça">Garça</option>
									<option value="Gastão Vidigal">Gastão Vidigal</option>
									<option value="Gavião Peixoto">Gavião Peixoto</option>
									<option value="General Salgado">General Salgado</option>
									<option value="Getulina">Getulina</option>
									<option value="Glicério">Glicério</option>
									<option value="Guaiçara">Guaiçara</option>
									<option value="Guaimbê">Guaimbê</option>
									<option value="Guaíra">Guaíra</option>
									<option value="Guapiaçu">Guapiaçu</option>
									<option value="Guapiara">Guapiara</option>
									<option value="Guará">Guará</option>
									<option value="Guaraçaí">Guaraçaí</option>
									<option value="Guaraci">Guaraci</option>
									<option value="Guarani D'Oeste">Guarani D'Oeste</option>
									<option value="Guarantã">Guarantã</option>
									<option value="Guararapes">Guararapes</option>
									<option value="Guararema">Guararema</option>
									<option value="Guaratinguetá">Guaratinguetá</option>
									<option value="Guareí">Guareí</option>
									<option value="Guariba">Guariba</option>
									<option value="Guarujá">Guarujá</option>
									<option value="Guarulhos">Guarulhos</option>
									<option value="Guatapará">Guatapará</option>
									<option value="Guzolândia">Guzolândia</option>
									<option value="Herculândia">Herculândia</option>
									<option value="Holambra">Holambra</option>
									<option value="Hortolândia">Hortolândia</option>
									<option value="Iacanga">Iacanga</option>
									<option value="Iacri">Iacri</option>
									<option value="Iaras">Iaras</option>
									<option value="Ibaté">Ibaté</option>
									<option value="Ibirá">Ibirá</option>
									<option value="Ibirarema">Ibirarema</option>
									<option value="Ibitinga">Ibitinga</option>
									<option value="Ibiúna">Ibiúna</option>
									<option value="Icém">Icém</option>
									<option value="Iepê">Iepê</option>
									<option value="Igaraçu do Tietê">Igaraçu do Tietê</option>
									<option value="Igarapava">Igarapava</option>
									<option value="Igaratá">Igaratá</option>
									<option value="Iguape">Iguape</option>
									<option value="Ilhabela">Ilhabela</option>
									<option value="Ilha Comprida">Ilha Comprida</option>
									<option value="Ilha Solteira">Ilha Solteira</option>
									<option value="Indaiatuba">Indaiatuba</option>
									<option value="Indiana">Indiana</option>
									<option value="Indiaporã">Indiaporã</option>
									<option value="Inúbia Paulista">Inúbia Paulista</option>
									<option value="Ipaussu">Ipaussu</option>
									<option value="Iperó">Iperó</option>
									<option value="Ipeúna">Ipeúna</option>
									<option value="Ipiguá">Ipiguá</option>
									<option value="Iporanga">Iporanga</option>
									<option value="Ipuã">Ipuã</option>
									<option value="Iracemápolis">Iracemápolis</option>
									<option value="Irapuã">Irapuã</option>
									<option value="Irapuru">Irapuru</option>
									<option value="Itaberá">Itaberá</option>
									<option value="Itaí">Itaí</option>
									<option value="Itajobi">Itajobi</option>
									<option value="Itaju">Itaju</option>
									<option value="Itanhaém">Itanhaém</option>
									<option value="Itaóca">Itaóca</option>
									<option value="Itapecerica da Serra">
										Itapecerica da Serra
									</option>
									<option value="Itapetininga">Itapetininga</option>
									<option value="Itapeva">Itapeva</option>
									<option value="Itapevi">Itapevi</option>
									<option value="Itapira">Itapira</option>
									<option value="Itapirapuã Paulista">
										Itapirapuã Paulista
									</option>
									<option value="Itápolis">Itápolis</option>
									<option value="Itaporanga">Itaporanga</option>
									<option value="Itapuí">Itapuí</option>
									<option value="Itapura">Itapura</option>
									<option value="Itaquaquecetuba">Itaquaquecetuba</option>
									<option value="Itararé">Itararé</option>
									<option value="Itariri">Itariri</option>
									<option value="Itatiba">Itatiba</option>
									<option value="Itatinga">Itatinga</option>
									<option value="Itirapina">Itirapina</option>
									<option value="Itirapuã">Itirapuã</option>
									<option value="Itobi">Itobi</option>
									<option value="Itu">Itu</option>
									<option value="Itupeva">Itupeva</option>
									<option value="Ituverava">Ituverava</option>
									<option value="Jaborandi">Jaborandi</option>
									<option value="Jaboticabal">Jaboticabal</option>
									<option value="Jacareí">Jacareí</option>
									<option value="Jaci">Jaci</option>
									<option value="Jacupiranga">Jacupiranga</option>
									<option value="Jaguariúna">Jaguariúna</option>
									<option value="Jales">Jales</option>
									<option value="Jambeiro">Jambeiro</option>
									<option value="Jandira">Jandira</option>
									<option value="Jardinópolis">Jardinópolis</option>
									<option value="Jarinu">Jarinu</option>
									<option value="Jaú">Jaú</option>
									<option value="Jeriquara">Jeriquara</option>
									<option value="Joanópolis">Joanópolis</option>
									<option value="João Ramalho">João Ramalho</option>
									<option value="José Bonifácio">José Bonifácio</option>
									<option value="Júlio Mesquita">Júlio Mesquita</option>
									<option value="Jumirim">Jumirim</option>
									<option value="Jundiaí">Jundiaí</option>
									<option value="Junqueirópolis">Junqueirópolis</option>
									<option value="Juquiá">Juquiá</option>
									<option value="Juquitiba">Juquitiba</option>
									<option value="Lagoinha">Lagoinha</option>
									<option value="Laranjal Paulista">Laranjal Paulista</option>
									<option value="Lavínia">Lavínia</option>
									<option value="Lavrinhas">Lavrinhas</option>
									<option value="Leme">Leme</option>
									<option value="Lençóis Paulista">Lençóis Paulista</option>
									<option value="Limeira">Limeira</option>
									<option value="Lindóia">Lindóia</option>
									<option value="Lins">Lins</option>
									<option value="Lorena">Lorena</option>
									<option value="Lourdes">Lourdes</option>
									<option value="Louveira">Louveira</option>
									<option value="Lucélia">Lucélia</option>
									<option value="Lucianópolis">Lucianópolis</option>
									<option value="Luís Antônio">Luís Antônio</option>
									<option value="Luiziânia">Luiziânia</option>
									<option value="Lupércio">Lupércio</option>
									<option value="Lutécia">Lutécia</option>
									<option value="Macatuba">Macatuba</option>
									<option value="Macaubal">Macaubal</option>
									<option value="Macedônia">Macedônia</option>
									<option value="Magda">Magda</option>
									<option value="Mairinque">Mairinque</option>
									<option value="Mairiporã">Mairiporã</option>
									<option value="Manduri">Manduri</option>
									<option value="Marabá Paulista">Marabá Paulista</option>
									<option value="Maracaí">Maracaí</option>
									<option value="Marapoama">Marapoama</option>
									<option value="Mariápolis">Mariápolis</option>
									<option value="Marília">Marília</option>
									<option value="Marinópolis">Marinópolis</option>
									<option value="Martinópolis">Martinópolis</option>
									<option value="Matão">Matão</option>
									<option value="Mauá">Mauá</option>
									<option value="Mendonça">Mendonça</option>
									<option value="Meridiano">Meridiano</option>
									<option value="Mesópolis">Mesópolis</option>
									<option value="Miguelópolis">Miguelópolis</option>
									<option value="Mineiros do Tietê">Mineiros do Tietê</option>
									<option value="Miracatu">Miracatu</option>
									<option value="Mira Estrela">Mira Estrela</option>
									<option value="Mirandópolis">Mirandópolis</option>
									<option value="Mirante do Paranapanema">
										Mirante do Paranapanema
									</option>
									<option value="Mirassol">Mirassol</option>
									<option value="Mirassolândia">Mirassolândia</option>
									<option value="Mococa">Mococa</option>
									<option value="Mogi das Cruzes">Mogi das Cruzes</option>
									<option value="Mogi Guaçu">Mogi Guaçu</option>
									<option value="Moji Mirim">Moji Mirim</option>
									<option value="Mombuca">Mombuca</option>
									<option value="Monções">Monções</option>
									<option value="Mongaguá">Mongaguá</option>
									<option value="Monte Alegre do Sul">
										Monte Alegre do Sul
									</option>
									<option value="Monte Alto">Monte Alto</option>
									<option value="Monte Aprazível">Monte Aprazível</option>
									<option value="Monte Azul Paulista">
										Monte Azul Paulista
									</option>
									<option value="Monte Castelo">Monte Castelo</option>
									<option value="Monteiro Lobato">Monteiro Lobato</option>
									<option value="Monte Mor">Monte Mor</option>
									<option value="Morro Agudo">Morro Agudo</option>
									<option value="Morungaba">Morungaba</option>
									<option value="Motuca">Motuca</option>
									<option value="Murutinga do Sul">Murutinga do Sul</option>
									<option value="Nantes">Nantes</option>
									<option value="Narandiba">Narandiba</option>
									<option value="Natividade da Serra">
										Natividade da Serra
									</option>
									<option value="Nazaré Paulista">Nazaré Paulista</option>
									<option value="Neves Paulista">Neves Paulista</option>
									<option value="Nhandeara">Nhandeara</option>
									<option value="Nipoã">Nipoã</option>
									<option value="Nova Aliança">Nova Aliança</option>
									<option value="Nova Campina">Nova Campina</option>
									<option value="Nova Canaã Paulista">
										Nova Canaã Paulista
									</option>
									<option value="Nova Castilho">Nova Castilho</option>
									<option value="Nova Europa">Nova Europa</option>
									<option value="Nova Granada">Nova Granada</option>
									<option value="Nova Guataporanga">Nova Guataporanga</option>
									<option value="Nova Independência">Nova Independência</option>
									<option value="Novais">Novais</option>
									<option value="Nova Luzitânia">Nova Luzitânia</option>
									<option value="Nova Odessa">Nova Odessa</option>
									<option value="Novo Horizonte">Novo Horizonte</option>
									<option value="Nuporanga">Nuporanga</option>
									<option value="Ocauçu">Ocauçu</option>
									<option value="Óleo">Óleo</option>
									<option value="Olímpia">Olímpia</option>
									<option value="Onda Verde">Onda Verde</option>
									<option value="Oriente">Oriente</option>
									<option value="Orindiúva">Orindiúva</option>
									<option value="Orlândia">Orlândia</option>
									<option value="Osasco">Osasco</option>
									<option value="Oscar Bressane">Oscar Bressane</option>
									<option value="Osvaldo Cruz">Osvaldo Cruz</option>
									<option value="Ourinhos">Ourinhos</option>
									<option value="Ouroeste">Ouroeste</option>
									<option value="Ouro Verde">Ouro Verde</option>
									<option value="Pacaembu">Pacaembu</option>
									<option value="Palestina">Palestina</option>
									<option value="Palmares Paulista">Palmares Paulista</option>
									<option value="Palmeira D'Oeste">Palmeira D'Oeste</option>
									<option value="Palmital">Palmital</option>
									<option value="Panorama">Panorama</option>
									<option value="Paraguaçu Paulista">Paraguaçu Paulista</option>
									<option value="Paraibuna">Paraibuna</option>
									<option value="Paraíso">Paraíso</option>
									<option value="Paranapanema">Paranapanema</option>
									<option value="Paranapuã">Paranapuã</option>
									<option value="Parapuã">Parapuã</option>
									<option value="Pardinho">Pardinho</option>
									<option value="Pariquera-Açu">Pariquera-Açu</option>
									<option value="Parisi">Parisi</option>
									<option value="Patrocínio Paulista">
										Patrocínio Paulista
									</option>
									<option value="Paulicéia">Paulicéia</option>
									<option value="Paulínia">Paulínia</option>
									<option value="Paulistânia">Paulistânia</option>
									<option value="Paulo de Faria">Paulo de Faria</option>
									<option value="Pederneiras">Pederneiras</option>
									<option value="Pedra Bela">Pedra Bela</option>
									<option value="Pedranópolis">Pedranópolis</option>
									<option value="Pedregulho">Pedregulho</option>
									<option value="Pedreira">Pedreira</option>
									<option value="Pedrinhas Paulista">Pedrinhas Paulista</option>
									<option value="Pedro de Toledo">Pedro de Toledo</option>
									<option value="Penápolis">Penápolis</option>
									<option value="Pereira Barreto">Pereira Barreto</option>
									<option value="Pereiras">Pereiras</option>
									<option value="Peruíbe">Peruíbe</option>
									<option value="Piacatu">Piacatu</option>
									<option value="Piedade">Piedade</option>
									<option value="Pilar do Sul">Pilar do Sul</option>
									<option value="Pindamonhangaba">Pindamonhangaba</option>
									<option value="Pindorama">Pindorama</option>
									<option value="Pinhalzinho">Pinhalzinho</option>
									<option value="Piquerobi">Piquerobi</option>
									<option value="Piquete">Piquete</option>
									<option value="Piracaia">Piracaia</option>
									<option value="Piracicaba">Piracicaba</option>
									<option value="Piraju">Piraju</option>
									<option value="Pirajuí">Pirajuí</option>
									<option value="Pirangi">Pirangi</option>
									<option value="Pirapora do Bom Jesus">
										Pirapora do Bom Jesus
									</option>
									<option value="Pirapozinho">Pirapozinho</option>
									<option value="Pirassununga">Pirassununga</option>
									<option value="Piratininga">Piratininga</option>
									<option value="Pitangueiras">Pitangueiras</option>
									<option value="Planalto">Planalto</option>
									<option value="Platina">Platina</option>
									<option value="Poá">Poá</option>
									<option value="Poloni">Poloni</option>
									<option value="Pompéia">Pompéia</option>
									<option value="Pongaí">Pongaí</option>
									<option value="Pontal">Pontal</option>
									<option value="Pontalinda">Pontalinda</option>
									<option value="Pontes Gestal">Pontes Gestal</option>
									<option value="Populina">Populina</option>
									<option value="Porangaba">Porangaba</option>
									<option value="Porto Feliz">Porto Feliz</option>
									<option value="Porto Ferreira">Porto Ferreira</option>
									<option value="Potim">Potim</option>
									<option value="Potirendaba">Potirendaba</option>
									<option value="Pracinha">Pracinha</option>
									<option value="Pradópolis">Pradópolis</option>
									<option value="Praia Grande">Praia Grande</option>
									<option value="Pratânia">Pratânia</option>
									<option value="Presidente Alves">Presidente Alves</option>
									<option value="Presidente Bernardes">
										Presidente Bernardes
									</option>
									<option value="Presidente Epitácio">
										Presidente Epitácio
									</option>
									<option value="Presidente Prudente">
										Presidente Prudente
									</option>
									<option value="Presidente Venceslau">
										Presidente Venceslau
									</option>
									<option value="Promissão">Promissão</option>
									<option value="Quadra">Quadra</option>
									<option value="Quatá">Quatá</option>
									<option value="Queiroz">Queiroz</option>
									<option value="Queluz">Queluz</option>
									<option value="Quintana">Quintana</option>
									<option value="Rafard">Rafard</option>
									<option value="Rancharia">Rancharia</option>
									<option value="Redenção da Serra">Redenção da Serra</option>
									<option value="Regente Feijó">Regente Feijó</option>
									<option value="Reginópolis">Reginópolis</option>
									<option value="Registro">Registro</option>
									<option value="Restinga">Restinga</option>
									<option value="Ribeira">Ribeira</option>
									<option value="Ribeirão Bonito">Ribeirão Bonito</option>
									<option value="Ribeirão Branco">Ribeirão Branco</option>
									<option value="Ribeirão Corrente">Ribeirão Corrente</option>
									<option value="Ribeirão do Sul">Ribeirão do Sul</option>
									<option value="Ribeirão dos Índios">
										Ribeirão dos Índios
									</option>
									<option value="Ribeirão Grande">Ribeirão Grande</option>
									<option value="Ribeirão Pires">Ribeirão Pires</option>
									<option value="Ribeirão Preto">Ribeirão Preto</option>
									<option value="Riversul">Riversul</option>
									<option value="Rifaina">Rifaina</option>
									<option value="Rincão">Rincão</option>
									<option value="Rinópolis">Rinópolis</option>
									<option value="Rio Claro">Rio Claro</option>
									<option value="Rio das Pedras">Rio das Pedras</option>
									<option value="Rio Grande da Serra">
										Rio Grande da Serra
									</option>
									<option value="Riolândia">Riolândia</option>
									<option value="Rosana">Rosana</option>
									<option value="Roseira">Roseira</option>
									<option value="Rubiácea">Rubiácea</option>
									<option value="Rubinéia">Rubinéia</option>
									<option value="Sabino">Sabino</option>
									<option value="Sagres">Sagres</option>
									<option value="Sales">Sales</option>
									<option value="Sales Oliveira">Sales Oliveira</option>
									<option value="Salesópolis">Salesópolis</option>
									<option value="Salmourão">Salmourão</option>
									<option value="Saltinho">Saltinho</option>
									<option value="Salto">Salto</option>
									<option value="Salto de Pirapora">Salto de Pirapora</option>
									<option value="Salto Grande">Salto Grande</option>
									<option value="Sandovalina">Sandovalina</option>
									<option value="Santa Adélia">Santa Adélia</option>
									<option value="Santa Albertina">Santa Albertina</option>
									<option value="Santa Bárbara D'Oeste">
										Santa Bárbara D'Oeste
									</option>
									<option value="Santa Branca">Santa Branca</option>
									<option value="Santa Clara D'Oeste">
										Santa Clara D'Oeste
									</option>
									<option value="Santa Cruz da Conceição">
										Santa Cruz da Conceição
									</option>
									<option value="Santa Cruz da Esperança">
										Santa Cruz da Esperança
									</option>
									<option value="Santa Cruz das Palmeiras">
										Santa Cruz das Palmeiras
									</option>
									<option value="Santa Cruz do Rio Pardo">
										Santa Cruz do Rio Pardo
									</option>
									<option value="Santa Ernestina">Santa Ernestina</option>
									<option value="Santa Fé do Sul">Santa Fé do Sul</option>
									<option value="Santa Gertrudes">Santa Gertrudes</option>
									<option value="Santa Isabel">Santa Isabel</option>
									<option value="Santa Lúcia">Santa Lúcia</option>
									<option value="Santa Maria da Serra">
										Santa Maria da Serra
									</option>
									<option value="Santa Mercedes">Santa Mercedes</option>
									<option value="Santana da Ponte Pensa">
										Santana da Ponte Pensa
									</option>
									<option value="Santana de Parnaíba">
										Santana de Parnaíba
									</option>
									<option value="Santa Rita D'Oeste">Santa Rita D'Oeste</option>
									<option value="Santa Rita do Passa Quatro">
										Santa Rita do Passa Quatro
									</option>
									<option value="Santa Rosa de Viterbo">
										Santa Rosa de Viterbo
									</option>
									<option value="Santa Salete">Santa Salete</option>
									<option value="Santo Anastácio">Santo Anastácio</option>
									<option value="Santo André">Santo André</option>
									<option value="Santo Antônio da Alegria">
										Santo Antônio da Alegria
									</option>
									<option value="Santo Antônio de Posse">
										Santo Antônio de Posse
									</option>
									<option value="Santo Antônio do Aracanguá">
										Santo Antônio do Aracanguá
									</option>
									<option value="Santo Antônio do Jardim">
										Santo Antônio do Jardim
									</option>
									<option value="Santo Antônio do Pinhal">
										Santo Antônio do Pinhal
									</option>
									<option value="Santo Expedito">Santo Expedito</option>
									<option value="Santópolis do Aguapeí">
										Santópolis do Aguapeí
									</option>
									<option value="Santos">Santos</option>
									<option value="São Bento do Sapucaí">
										São Bento do Sapucaí
									</option>
									<option value="São Bernardo do Campo">
										São Bernardo do Campo
									</option>
									<option value="São Caetano do Sul">São Caetano do Sul</option>
									<option value="São Carlos">São Carlos</option>
									<option value="São Francisco">São Francisco</option>
									<option value="São João da Boa Vista">
										São João da Boa Vista
									</option>
									<option value="São João das Duas Pontes">
										São João das Duas Pontes
									</option>
									<option value="São João de Iracema">
										São João de Iracema
									</option>
									<option value="São João do Pau D'Alho">
										São João do Pau D'Alho
									</option>
									<option value="São Joaquim da Barra">
										São Joaquim da Barra
									</option>
									<option value="São José da Bela Vista">
										São José da Bela Vista
									</option>
									<option value="São José do Barreiro">
										São José do Barreiro
									</option>
									<option value="São José do Rio Pardo">
										São José do Rio Pardo
									</option>
									<option value="São José do Rio Preto">
										São José do Rio Preto
									</option>
									<option value="São José dos Campos">
										São José dos Campos
									</option>
									<option value="São Lourenço da Serra">
										São Lourenço da Serra
									</option>
									<option value="São Luís do Paraitinga">
										São Luís do Paraitinga
									</option>
									<option value="São Manuel">São Manuel</option>
									<option value="São Miguel Arcanjo">São Miguel Arcanjo</option>
									<option value="São Paulo">São Paulo</option>
									<option value="São Pedro">São Pedro</option>
									<option value="São Pedro do Turvo">São Pedro do Turvo</option>
									<option value="São Roque">São Roque</option>
									<option value="São Sebastião">São Sebastião</option>
									<option value="São Sebastião da Grama">
										São Sebastião da Grama
									</option>
									<option value="São Simão">São Simão</option>
									<option value="São Vicente">São Vicente</option>
									<option value="Sarapuí">Sarapuí</option>
									<option value="Sarutaiá">Sarutaiá</option>
									<option value="Sebastianópolis do Sul">
										Sebastianópolis do Sul
									</option>
									<option value="Serra Azul">Serra Azul</option>
									<option value="Serrana">Serrana</option>
									<option value="Serra Negra">Serra Negra</option>
									<option value="Sertãozinho">Sertãozinho</option>
									<option value="Sete Barras">Sete Barras</option>
									<option value="Severínia">Severínia</option>
									<option value="Silveiras">Silveiras</option>
									<option value="Socorro">Socorro</option>
									<option value="Sorocaba">Sorocaba</option>
									<option value="Sud Mennucci">Sud Mennucci</option>
									<option value="Sumaré">Sumaré</option>
									<option value="Suzano">Suzano</option>
									<option value="Suzanápolis">Suzanápolis</option>
									<option value="Tabapuã">Tabapuã</option>
									<option value="Tabatinga">Tabatinga</option>
									<option value="Taboão da Serra">Taboão da Serra</option>
									<option value="Taciba">Taciba</option>
									<option value="Taguaí">Taguaí</option>
									<option value="Taiaçu">Taiaçu</option>
									<option value="Taiúva">Taiúva</option>
									<option value="Tambaú">Tambaú</option>
									<option value="Tanabi">Tanabi</option>
									<option value="Tapiraí">Tapiraí</option>
									<option value="Tapiratiba">Tapiratiba</option>
									<option value="Taquaral">Taquaral</option>
									<option value="Taquaritinga">Taquaritinga</option>
									<option value="Taquarituba">Taquarituba</option>
									<option value="Taquarivaí">Taquarivaí</option>
									<option value="Tarabai">Tarabai</option>
									<option value="Tarumã">Tarumã</option>
									<option value="Tatuí">Tatuí</option>
									<option value="Taubaté">Taubaté</option>
									<option value="Tejupá">Tejupá</option>
									<option value="Teodoro Sampaio">Teodoro Sampaio</option>
									<option value="Terra Roxa">Terra Roxa</option>
									<option value="Tietê">Tietê</option>
									<option value="Timburi">Timburi</option>
									<option value="Torre de Pedra">Torre de Pedra</option>
									<option value="Torrinha">Torrinha</option>
									<option value="Trabiju">Trabiju</option>
									<option value="Tremembé">Tremembé</option>
									<option value="Três Fronteiras">Três Fronteiras</option>
									<option value="Tuiuti">Tuiuti</option>
									<option value="Tupã">Tupã</option>
									<option value="Tupi Paulista">Tupi Paulista</option>
									<option value="Turiúba">Turiúba</option>
									<option value="Turmalina">Turmalina</option>
									<option value="Ubarana">Ubarana</option>
									<option value="Ubatuba">Ubatuba</option>
									<option value="Ubirajara">Ubirajara</option>
									<option value="Uchoa">Uchoa</option>
									<option value="União Paulista">União Paulista</option>
									<option value="Urânia">Urânia</option>
									<option value="Uru">Uru</option>
									<option value="Urupês">Urupês</option>
									<option value="Valentim Gentil">Valentim Gentil</option>
									<option value="Valinhos">Valinhos</option>
									<option value="Valparaíso">Valparaíso</option>
									<option value="Vargem">Vargem</option>
									<option value="Vargem Grande do Sul">
										Vargem Grande do Sul
									</option>
									<option value="Vargem Grande Paulista">
										Vargem Grande Paulista
									</option>
									<option value="Várzea Paulista">Várzea Paulista</option>
									<option value="Vera Cruz">Vera Cruz</option>
									<option value="Vinhedo">Vinhedo</option>
									<option value="Viradouro">Viradouro</option>
									<option value="Vista Alegre do Alto">
										Vista Alegre do Alto
									</option>
									<option value="Vitória Brasil">Vitória Brasil</option>
									<option value="Votorantim">Votorantim</option>
									<option value="Votuporanga">Votuporanga</option>
									<option value="Zacarias">Zacarias</option>
									<option value="Chavantes">Chavantes</option>
									<option value="Estiva Gerbi">Estiva Gerbi</option>
								</optgroup>
								<optgroup class="state-pr state-group d-none">
									<option value="Abatiá">Abatiá</option>
									<option value="Adrianópolis">Adrianópolis</option>
									<option value="Agudos do Sul">Agudos do Sul</option>
									<option value="Almirante Tamandaré">
										Almirante Tamandaré
									</option>
									<option value="Altamira do Paraná">Altamira do Paraná</option>
									<option value="Altônia">Altônia</option>
									<option value="Alto Paraná">Alto Paraná</option>
									<option value="Alto Piquiri">Alto Piquiri</option>
									<option value="Alvorada do Sul">Alvorada do Sul</option>
									<option value="Amaporã">Amaporã</option>
									<option value="Ampére">Ampére</option>
									<option value="Anahy">Anahy</option>
									<option value="Andirá">Andirá</option>
									<option value="Ângulo">Ângulo</option>
									<option value="Antonina">Antonina</option>
									<option value="Antônio Olinto">Antônio Olinto</option>
									<option value="Apucarana">Apucarana</option>
									<option value="Arapongas">Arapongas</option>
									<option value="Arapoti">Arapoti</option>
									<option value="Arapuã">Arapuã</option>
									<option value="Araruna">Araruna</option>
									<option value="Araucária">Araucária</option>
									<option value="Ariranha do Ivaí">Ariranha do Ivaí</option>
									<option value="Assaí">Assaí</option>
									<option value="Assis Chateaubriand">
										Assis Chateaubriand
									</option>
									<option value="Astorga">Astorga</option>
									<option value="Atalaia">Atalaia</option>
									<option value="Balsa Nova">Balsa Nova</option>
									<option value="Bandeirantes">Bandeirantes</option>
									<option value="Barbosa Ferraz">Barbosa Ferraz</option>
									<option value="Barracão">Barracão</option>
									<option value="Barra do Jacaré">Barra do Jacaré</option>
									<option value="Bela Vista da Caroba">
										Bela Vista da Caroba
									</option>
									<option value="Bela Vista do Paraíso">
										Bela Vista do Paraíso
									</option>
									<option value="Bituruna">Bituruna</option>
									<option value="Boa Esperança">Boa Esperança</option>
									<option value="Boa Esperança do Iguaçu">
										Boa Esperança do Iguaçu
									</option>
									<option value="Boa Ventura de São Roque">
										Boa Ventura de São Roque
									</option>
									<option value="Boa Vista da Aparecida">
										Boa Vista da Aparecida
									</option>
									<option value="Bocaiúva do Sul">Bocaiúva do Sul</option>
									<option value="Bom Jesus do Sul">Bom Jesus do Sul</option>
									<option value="Bom Sucesso">Bom Sucesso</option>
									<option value="Bom Sucesso do Sul">Bom Sucesso do Sul</option>
									<option value="Borrazópolis">Borrazópolis</option>
									<option value="Braganey">Braganey</option>
									<option value="Brasilândia do Sul">Brasilândia do Sul</option>
									<option value="Cafeara">Cafeara</option>
									<option value="Cafelândia">Cafelândia</option>
									<option value="Cafezal do Sul">Cafezal do Sul</option>
									<option value="Califórnia">Califórnia</option>
									<option value="Cambará">Cambará</option>
									<option value="Cambé">Cambé</option>
									<option value="Cambira">Cambira</option>
									<option value="Campina da Lagoa">Campina da Lagoa</option>
									<option value="Campina do Simão">Campina do Simão</option>
									<option value="Campina Grande do Sul">
										Campina Grande do Sul
									</option>
									<option value="Campo Bonito">Campo Bonito</option>
									<option value="Campo do Tenente">Campo do Tenente</option>
									<option value="Campo Largo">Campo Largo</option>
									<option value="Campo Magro">Campo Magro</option>
									<option value="Campo Mourão">Campo Mourão</option>
									<option value="Cândido de Abreu">Cândido de Abreu</option>
									<option value="Candói">Candói</option>
									<option value="Cantagalo">Cantagalo</option>
									<option value="Capanema">Capanema</option>
									<option value="Capitão Leônidas Marques">
										Capitão Leônidas Marques
									</option>
									<option value="Carambeí">Carambeí</option>
									<option value="Carlópolis">Carlópolis</option>
									<option value="Cascavel">Cascavel</option>
									<option value="Castro">Castro</option>
									<option value="Catanduvas">Catanduvas</option>
									<option value="Centenário do Sul">Centenário do Sul</option>
									<option value="Cerro Azul">Cerro Azul</option>
									<option value="Céu Azul">Céu Azul</option>
									<option value="Chopinzinho">Chopinzinho</option>
									<option value="Cianorte">Cianorte</option>
									<option value="Cidade Gaúcha">Cidade Gaúcha</option>
									<option value="Clevelândia">Clevelândia</option>
									<option value="Colombo">Colombo</option>
									<option value="Colorado">Colorado</option>
									<option value="Congonhinhas">Congonhinhas</option>
									<option value="Conselheiro Mairinck">
										Conselheiro Mairinck
									</option>
									<option value="Contenda">Contenda</option>
									<option value="Corbélia">Corbélia</option>
									<option value="Cornélio Procópio">Cornélio Procópio</option>
									<option value="Coronel Domingos Soares">
										Coronel Domingos Soares
									</option>
									<option value="Coronel Vivida">Coronel Vivida</option>
									<option value="Corumbataí do Sul">Corumbataí do Sul</option>
									<option value="Cruzeiro do Iguaçu">Cruzeiro do Iguaçu</option>
									<option value="Cruzeiro do Oeste">Cruzeiro do Oeste</option>
									<option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
									<option value="Cruz Machado">Cruz Machado</option>
									<option value="Cruzmaltina">Cruzmaltina</option>
									<option value="Curitiba">Curitiba</option>
									<option value="Curiúva">Curiúva</option>
									<option value="Diamante do Norte">Diamante do Norte</option>
									<option value="Diamante do Sul">Diamante do Sul</option>
									<option value="Diamante D'Oeste">Diamante D'Oeste</option>
									<option value="Dois Vizinhos">Dois Vizinhos</option>
									<option value="Douradina">Douradina</option>
									<option value="Doutor Camargo">Doutor Camargo</option>
									<option value="Enéas Marques">Enéas Marques</option>
									<option value="Engenheiro Beltrão">Engenheiro Beltrão</option>
									<option value="Esperança Nova">Esperança Nova</option>
									<option value="Entre Rios do Oeste">
										Entre Rios do Oeste
									</option>
									<option value="Espigão Alto do Iguaçu">
										Espigão Alto do Iguaçu
									</option>
									<option value="Farol">Farol</option>
									<option value="Faxinal">Faxinal</option>
									<option value="Fazenda Rio Grande">Fazenda Rio Grande</option>
									<option value="Fênix">Fênix</option>
									<option value="Fernandes Pinheiro">Fernandes Pinheiro</option>
									<option value="Figueira">Figueira</option>
									<option value="Floraí">Floraí</option>
									<option value="Flor da Serra do Sul">
										Flor da Serra do Sul
									</option>
									<option value="Floresta">Floresta</option>
									<option value="Florestópolis">Florestópolis</option>
									<option value="Flórida">Flórida</option>
									<option value="Formosa do Oeste">Formosa do Oeste</option>
									<option value="Foz do Iguaçu">Foz do Iguaçu</option>
									<option value="Francisco Alves">Francisco Alves</option>
									<option value="Francisco Beltrão">Francisco Beltrão</option>
									<option value="Foz do Jordão">Foz do Jordão</option>
									<option value="General Carneiro">General Carneiro</option>
									<option value="Godoy Moreira">Godoy Moreira</option>
									<option value="Goioerê">Goioerê</option>
									<option value="Goioxim">Goioxim</option>
									<option value="Grandes Rios">Grandes Rios</option>
									<option value="Guaíra">Guaíra</option>
									<option value="Guairaçá">Guairaçá</option>
									<option value="Guamiranga">Guamiranga</option>
									<option value="Guapirama">Guapirama</option>
									<option value="Guaporema">Guaporema</option>
									<option value="Guaraci">Guaraci</option>
									<option value="Guaraniaçu">Guaraniaçu</option>
									<option value="Guarapuava">Guarapuava</option>
									<option value="Guaraqueçaba">Guaraqueçaba</option>
									<option value="Guaratuba">Guaratuba</option>
									<option value="Honório Serpa">Honório Serpa</option>
									<option value="Ibaiti">Ibaiti</option>
									<option value="Ibema">Ibema</option>
									<option value="Ibiporã">Ibiporã</option>
									<option value="Icaraíma">Icaraíma</option>
									<option value="Iguaraçu">Iguaraçu</option>
									<option value="Iguatu">Iguatu</option>
									<option value="Imbaú">Imbaú</option>
									<option value="Imbituva">Imbituva</option>
									<option value="Inácio Martins">Inácio Martins</option>
									<option value="Inajá">Inajá</option>
									<option value="Indianópolis">Indianópolis</option>
									<option value="Ipiranga">Ipiranga</option>
									<option value="Iporã">Iporã</option>
									<option value="Iracema do Oeste">Iracema do Oeste</option>
									<option value="Irati">Irati</option>
									<option value="Iretama">Iretama</option>
									<option value="Itaguajé">Itaguajé</option>
									<option value="Itaipulândia">Itaipulândia</option>
									<option value="Itambaracá">Itambaracá</option>
									<option value="Itambé">Itambé</option>
									<option value="Itapejara D'Oeste">Itapejara D'Oeste</option>
									<option value="Itaperuçu">Itaperuçu</option>
									<option value="Itaúna do Sul">Itaúna do Sul</option>
									<option value="Ivaí">Ivaí</option>
									<option value="Ivaiporã">Ivaiporã</option>
									<option value="Ivaté">Ivaté</option>
									<option value="Ivatuba">Ivatuba</option>
									<option value="Jaboti">Jaboti</option>
									<option value="Jacarezinho">Jacarezinho</option>
									<option value="Jaguapitã">Jaguapitã</option>
									<option value="Jaguariaíva">Jaguariaíva</option>
									<option value="Jandaia do Sul">Jandaia do Sul</option>
									<option value="Janiópolis">Janiópolis</option>
									<option value="Japira">Japira</option>
									<option value="Japurá">Japurá</option>
									<option value="Jardim Alegre">Jardim Alegre</option>
									<option value="Jardim Olinda">Jardim Olinda</option>
									<option value="Jataizinho">Jataizinho</option>
									<option value="Jesuítas">Jesuítas</option>
									<option value="Joaquim Távora">Joaquim Távora</option>
									<option value="Jundiaí do Sul">Jundiaí do Sul</option>
									<option value="Juranda">Juranda</option>
									<option value="Jussara">Jussara</option>
									<option value="Kaloré">Kaloré</option>
									<option value="Lapa">Lapa</option>
									<option value="Laranjal">Laranjal</option>
									<option value="Laranjeiras do Sul">Laranjeiras do Sul</option>
									<option value="Leópolis">Leópolis</option>
									<option value="Lidianópolis">Lidianópolis</option>
									<option value="Lindoeste">Lindoeste</option>
									<option value="Loanda">Loanda</option>
									<option value="Lobato">Lobato</option>
									<option value="Londrina">Londrina</option>
									<option value="Luiziana">Luiziana</option>
									<option value="Lunardelli">Lunardelli</option>
									<option value="Lupionópolis">Lupionópolis</option>
									<option value="Mallet">Mallet</option>
									<option value="Mamborê">Mamborê</option>
									<option value="Mandaguaçu">Mandaguaçu</option>
									<option value="Mandaguari">Mandaguari</option>
									<option value="Mandirituba">Mandirituba</option>
									<option value="Manfrinópolis">Manfrinópolis</option>
									<option value="Mangueirinha">Mangueirinha</option>
									<option value="Manoel Ribas">Manoel Ribas</option>
									<option value="Marechal Cândido Rondon">
										Marechal Cândido Rondon
									</option>
									<option value="Maria Helena">Maria Helena</option>
									<option value="Marialva">Marialva</option>
									<option value="Marilândia do Sul">Marilândia do Sul</option>
									<option value="Marilena">Marilena</option>
									<option value="Mariluz">Mariluz</option>
									<option value="Maringá">Maringá</option>
									<option value="Mariópolis">Mariópolis</option>
									<option value="Maripá">Maripá</option>
									<option value="Marmeleiro">Marmeleiro</option>
									<option value="Marquinho">Marquinho</option>
									<option value="Marumbi">Marumbi</option>
									<option value="Matelândia">Matelândia</option>
									<option value="Matinhos">Matinhos</option>
									<option value="Mato Rico">Mato Rico</option>
									<option value="Mauá da Serra">Mauá da Serra</option>
									<option value="Medianeira">Medianeira</option>
									<option value="Mercedes">Mercedes</option>
									<option value="Mirador">Mirador</option>
									<option value="Miraselva">Miraselva</option>
									<option value="Missal">Missal</option>
									<option value="Moreira Sales">Moreira Sales</option>
									<option value="Morretes">Morretes</option>
									<option value="Munhoz de Melo">Munhoz de Melo</option>
									<option value="Nossa Senhora das Graças">
										Nossa Senhora das Graças
									</option>
									<option value="Nova Aliança do Ivaí">
										Nova Aliança do Ivaí
									</option>
									<option value="Nova América da Colina">
										Nova América da Colina
									</option>
									<option value="Nova Aurora">Nova Aurora</option>
									<option value="Nova Cantu">Nova Cantu</option>
									<option value="Nova Esperança">Nova Esperança</option>
									<option value="Nova Esperança do Sudoeste">
										Nova Esperança do Sudoeste
									</option>
									<option value="Nova Fátima">Nova Fátima</option>
									<option value="Nova Laranjeiras">Nova Laranjeiras</option>
									<option value="Nova Londrina">Nova Londrina</option>
									<option value="Nova Olímpia">Nova Olímpia</option>
									<option value="Nova Santa Bárbara">Nova Santa Bárbara</option>
									<option value="Nova Santa Rosa">Nova Santa Rosa</option>
									<option value="Nova Prata do Iguaçu">
										Nova Prata do Iguaçu
									</option>
									<option value="Nova Tebas">Nova Tebas</option>
									<option value="Novo Itacolomi">Novo Itacolomi</option>
									<option value="Ortigueira">Ortigueira</option>
									<option value="Ourizona">Ourizona</option>
									<option value="Ouro Verde do Oeste">
										Ouro Verde do Oeste
									</option>
									<option value="Paiçandu">Paiçandu</option>
									<option value="Palmas">Palmas</option>
									<option value="Palmeira">Palmeira</option>
									<option value="Palmital">Palmital</option>
									<option value="Palotina">Palotina</option>
									<option value="Paraíso do Norte">Paraíso do Norte</option>
									<option value="Paranacity">Paranacity</option>
									<option value="Paranaguá">Paranaguá</option>
									<option value="Paranapoema">Paranapoema</option>
									<option value="Paranavaí">Paranavaí</option>
									<option value="Pato Bragado">Pato Bragado</option>
									<option value="Pato Branco">Pato Branco</option>
									<option value="Paula Freitas">Paula Freitas</option>
									<option value="Paulo Frontin">Paulo Frontin</option>
									<option value="Peabiru">Peabiru</option>
									<option value="Perobal">Perobal</option>
									<option value="Pérola">Pérola</option>
									<option value="Pérola D'Oeste">Pérola D'Oeste</option>
									<option value="Piên">Piên</option>
									<option value="Pinhais">Pinhais</option>
									<option value="Pinhalão">Pinhalão</option>
									<option value="Pinhal de São Bento">
										Pinhal de São Bento
									</option>
									<option value="Pinhão">Pinhão</option>
									<option value="Piraí do Sul">Piraí do Sul</option>
									<option value="Piraquara">Piraquara</option>
									<option value="Pitanga">Pitanga</option>
									<option value="Pitangueiras">Pitangueiras</option>
									<option value="Planaltina do Paraná">
										Planaltina do Paraná
									</option>
									<option value="Planalto">Planalto</option>
									<option value="Ponta Grossa">Ponta Grossa</option>
									<option value="Pontal do Paraná">Pontal do Paraná</option>
									<option value="Porecatu">Porecatu</option>
									<option value="Porto Amazonas">Porto Amazonas</option>
									<option value="Porto Barreiro">Porto Barreiro</option>
									<option value="Porto Rico">Porto Rico</option>
									<option value="Porto Vitória">Porto Vitória</option>
									<option value="Prado Ferreira">Prado Ferreira</option>
									<option value="Pranchita">Pranchita</option>
									<option value="Presidente Castelo Branco">
										Presidente Castelo Branco
									</option>
									<option value="Primeiro de Maio">Primeiro de Maio</option>
									<option value="Prudentópolis">Prudentópolis</option>
									<option value="Quarto Centenário">Quarto Centenário</option>
									<option value="Quatiguá">Quatiguá</option>
									<option value="Quatro Barras">Quatro Barras</option>
									<option value="Quatro Pontes">Quatro Pontes</option>
									<option value="Quedas do Iguaçu">Quedas do Iguaçu</option>
									<option value="Querência do Norte">Querência do Norte</option>
									<option value="Quinta do Sol">Quinta do Sol</option>
									<option value="Quitandinha">Quitandinha</option>
									<option value="Ramilândia">Ramilândia</option>
									<option value="Rancho Alegre">Rancho Alegre</option>
									<option value="Rancho Alegre D'Oeste">
										Rancho Alegre D'Oeste
									</option>
									<option value="Realeza">Realeza</option>
									<option value="Rebouças">Rebouças</option>
									<option value="Renascença">Renascença</option>
									<option value="Reserva">Reserva</option>
									<option value="Reserva do Iguaçu">Reserva do Iguaçu</option>
									<option value="Ribeirão Claro">Ribeirão Claro</option>
									<option value="Ribeirão do Pinhal">Ribeirão do Pinhal</option>
									<option value="Rio Azul">Rio Azul</option>
									<option value="Rio Bom">Rio Bom</option>
									<option value="Rio Bonito do Iguaçu">
										Rio Bonito do Iguaçu
									</option>
									<option value="Rio Branco do Ivaí">Rio Branco do Ivaí</option>
									<option value="Rio Branco do Sul">Rio Branco do Sul</option>
									<option value="Rio Negro">Rio Negro</option>
									<option value="Rolândia">Rolândia</option>
									<option value="Roncador">Roncador</option>
									<option value="Rondon">Rondon</option>
									<option value="Rosário do Ivaí">Rosário do Ivaí</option>
									<option value="Sabáudia">Sabáudia</option>
									<option value="Salgado Filho">Salgado Filho</option>
									<option value="Salto do Itararé">Salto do Itararé</option>
									<option value="Salto do Lontra">Salto do Lontra</option>
									<option value="Santa Amélia">Santa Amélia</option>
									<option value="Santa Cecília do Pavão">
										Santa Cecília do Pavão
									</option>
									<option value="Santa Cruz de Monte Castelo">
										Santa Cruz de Monte Castelo
									</option>
									<option value="Santa Fé">Santa Fé</option>
									<option value="Santa Helena">Santa Helena</option>
									<option value="Santa Inês">Santa Inês</option>
									<option value="Santa Isabel do Ivaí">
										Santa Isabel do Ivaí
									</option>
									<option value="Santa Izabel do Oeste">
										Santa Izabel do Oeste
									</option>
									<option value="Santa Lúcia">Santa Lúcia</option>
									<option value="Santa Maria do Oeste">
										Santa Maria do Oeste
									</option>
									<option value="Santa Mariana">Santa Mariana</option>
									<option value="Santa Mônica">Santa Mônica</option>
									<option value="Santana do Itararé">Santana do Itararé</option>
									<option value="Santa Tereza do Oeste">
										Santa Tereza do Oeste
									</option>
									<option value="Santa Terezinha de Itaipu">
										Santa Terezinha de Itaipu
									</option>
									<option value="Santo Antônio da Platina">
										Santo Antônio da Platina
									</option>
									<option value="Santo Antônio do Caiuá">
										Santo Antônio do Caiuá
									</option>
									<option value="Santo Antônio do Paraíso">
										Santo Antônio do Paraíso
									</option>
									<option value="Santo Antônio do Sudoeste">
										Santo Antônio do Sudoeste
									</option>
									<option value="Santo Inácio">Santo Inácio</option>
									<option value="São Carlos do Ivaí">São Carlos do Ivaí</option>
									<option value="São Jerônimo da Serra">
										São Jerônimo da Serra
									</option>
									<option value="São João">São João</option>
									<option value="São João do Caiuá">São João do Caiuá</option>
									<option value="São João do Ivaí">São João do Ivaí</option>
									<option value="São João do Triunfo">
										São João do Triunfo
									</option>
									<option value="São Jorge D'Oeste">São Jorge D'Oeste</option>
									<option value="São Jorge do Ivaí">São Jorge do Ivaí</option>
									<option value="São Jorge do Patrocínio">
										São Jorge do Patrocínio
									</option>
									<option value="São José da Boa Vista">
										São José da Boa Vista
									</option>
									<option value="São José das Palmeiras">
										São José das Palmeiras
									</option>
									<option value="São José dos Pinhais">
										São José dos Pinhais
									</option>
									<option value="São Manoel do Paraná">
										São Manoel do Paraná
									</option>
									<option value="São Mateus do Sul">São Mateus do Sul</option>
									<option value="São Miguel do Iguaçu">
										São Miguel do Iguaçu
									</option>
									<option value="São Pedro do Iguaçu">
										São Pedro do Iguaçu
									</option>
									<option value="São Pedro do Ivaí">São Pedro do Ivaí</option>
									<option value="São Pedro do Paraná">
										São Pedro do Paraná
									</option>
									<option value="São Sebastião da Amoreira">
										São Sebastião da Amoreira
									</option>
									<option value="São Tomé">São Tomé</option>
									<option value="Sapopema">Sapopema</option>
									<option value="Sarandi">Sarandi</option>
									<option value="Saudade do Iguaçu">Saudade do Iguaçu</option>
									<option value="Sengés">Sengés</option>
									<option value="Serranópolis do Iguaçu">
										Serranópolis do Iguaçu
									</option>
									<option value="Sertaneja">Sertaneja</option>
									<option value="Sertanópolis">Sertanópolis</option>
									<option value="Siqueira Campos">Siqueira Campos</option>
									<option value="Sulina">Sulina</option>
									<option value="Tamarana">Tamarana</option>
									<option value="Tamboara">Tamboara</option>
									<option value="Tapejara">Tapejara</option>
									<option value="Tapira">Tapira</option>
									<option value="Teixeira Soares">Teixeira Soares</option>
									<option value="Telêmaco Borba">Telêmaco Borba</option>
									<option value="Terra Boa">Terra Boa</option>
									<option value="Terra Rica">Terra Rica</option>
									<option value="Terra Roxa">Terra Roxa</option>
									<option value="Tibagi">Tibagi</option>
									<option value="Tijucas do Sul">Tijucas do Sul</option>
									<option value="Toledo">Toledo</option>
									<option value="Tomazina">Tomazina</option>
									<option value="Três Barras do Paraná">
										Três Barras do Paraná
									</option>
									<option value="Tunas do Paraná">Tunas do Paraná</option>
									<option value="Tuneiras do Oeste">Tuneiras do Oeste</option>
									<option value="Tupãssi">Tupãssi</option>
									<option value="Turvo">Turvo</option>
									<option value="Ubiratã">Ubiratã</option>
									<option value="Umuarama">Umuarama</option>
									<option value="União da Vitória">União da Vitória</option>
									<option value="Uniflor">Uniflor</option>
									<option value="Uraí">Uraí</option>
									<option value="Wenceslau Braz">Wenceslau Braz</option>
									<option value="Ventania">Ventania</option>
									<option value="Vera Cruz do Oeste">Vera Cruz do Oeste</option>
									<option value="Verê">Verê</option>
									<option value="Alto Paraíso">Alto Paraíso</option>
									<option value="Doutor Ulysses">Doutor Ulysses</option>
									<option value="Virmond">Virmond</option>
									<option value="Vitorino">Vitorino</option>
									<option value="Xambrê">Xambrê</option>
								</optgroup>
								<optgroup class="state-sc state-group d-none">
									<option value="Abdon Batista">Abdon Batista</option>
									<option value="Abelardo Luz">Abelardo Luz</option>
									<option value="Agrolândia">Agrolândia</option>
									<option value="Agronômica">Agronômica</option>
									<option value="Água Doce">Água Doce</option>
									<option value="Águas de Chapecó">Águas de Chapecó</option>
									<option value="Águas Frias">Águas Frias</option>
									<option value="Águas Mornas">Águas Mornas</option>
									<option value="Alfredo Wagner">Alfredo Wagner</option>
									<option value="Alto Bela Vista">Alto Bela Vista</option>
									<option value="Anchieta">Anchieta</option>
									<option value="Angelina">Angelina</option>
									<option value="Anita Garibaldi">Anita Garibaldi</option>
									<option value="Anitápolis">Anitápolis</option>
									<option value="Antônio Carlos">Antônio Carlos</option>
									<option value="Apiúna">Apiúna</option>
									<option value="Arabutã">Arabutã</option>
									<option value="Araquari">Araquari</option>
									<option value="Araranguá">Araranguá</option>
									<option value="Armazém">Armazém</option>
									<option value="Arroio Trinta">Arroio Trinta</option>
									<option value="Arvoredo">Arvoredo</option>
									<option value="Ascurra">Ascurra</option>
									<option value="Atalanta">Atalanta</option>
									<option value="Aurora">Aurora</option>
									<option value="Balneário Arroio do Silva">
										Balneário Arroio do Silva
									</option>
									<option value="Balneário Camboriú">Balneário Camboriú</option>
									<option value="Balneário Barra do Sul">
										Balneário Barra do Sul
									</option>
									<option value="Balneário Gaivota">Balneário Gaivota</option>
									<option value="Bandeirante">Bandeirante</option>
									<option value="Barra Bonita">Barra Bonita</option>
									<option value="Barra Velha">Barra Velha</option>
									<option value="Bela Vista do Toldo">
										Bela Vista do Toldo
									</option>
									<option value="Belmonte">Belmonte</option>
									<option value="Benedito Novo">Benedito Novo</option>
									<option value="Biguaçu">Biguaçu</option>
									<option value="Blumenau">Blumenau</option>
									<option value="Bocaina do Sul">Bocaina do Sul</option>
									<option value="Bombinhas">Bombinhas</option>
									<option value="Bom Jardim da Serra">
										Bom Jardim da Serra
									</option>
									<option value="Bom Jesus">Bom Jesus</option>
									<option value="Bom Jesus do Oeste">Bom Jesus do Oeste</option>
									<option value="Bom Retiro">Bom Retiro</option>
									<option value="Botuverá">Botuverá</option>
									<option value="Braço do Norte">Braço do Norte</option>
									<option value="Braço do Trombudo">Braço do Trombudo</option>
									<option value="Brunópolis">Brunópolis</option>
									<option value="Brusque">Brusque</option>
									<option value="Caçador">Caçador</option>
									<option value="Caibi">Caibi</option>
									<option value="Calmon">Calmon</option>
									<option value="Camboriú">Camboriú</option>
									<option value="Capão Alto">Capão Alto</option>
									<option value="Campo Alegre">Campo Alegre</option>
									<option value="Campo Belo do Sul">Campo Belo do Sul</option>
									<option value="Campo Erê">Campo Erê</option>
									<option value="Campos Novos">Campos Novos</option>
									<option value="Canelinha">Canelinha</option>
									<option value="Canoinhas">Canoinhas</option>
									<option value="Capinzal">Capinzal</option>
									<option value="Capivari de Baixo">Capivari de Baixo</option>
									<option value="Catanduvas">Catanduvas</option>
									<option value="Caxambu do Sul">Caxambu do Sul</option>
									<option value="Celso Ramos">Celso Ramos</option>
									<option value="Cerro Negro">Cerro Negro</option>
									<option value="Chapadão do Lageado">
										Chapadão do Lageado
									</option>
									<option value="Chapecó">Chapecó</option>
									<option value="Cocal do Sul">Cocal do Sul</option>
									<option value="Concórdia">Concórdia</option>
									<option value="Cordilheira Alta">Cordilheira Alta</option>
									<option value="Coronel Freitas">Coronel Freitas</option>
									<option value="Coronel Martins">Coronel Martins</option>
									<option value="Corupá">Corupá</option>
									<option value="Correia Pinto">Correia Pinto</option>
									<option value="Criciúma">Criciúma</option>
									<option value="Cunha Porã">Cunha Porã</option>
									<option value="Cunhataí">Cunhataí</option>
									<option value="Curitibanos">Curitibanos</option>
									<option value="Descanso">Descanso</option>
									<option value="Dionísio Cerqueira">Dionísio Cerqueira</option>
									<option value="Dona Emma">Dona Emma</option>
									<option value="Doutor Pedrinho">Doutor Pedrinho</option>
									<option value="Entre Rios">Entre Rios</option>
									<option value="Ermo">Ermo</option>
									<option value="Erval Velho">Erval Velho</option>
									<option value="Faxinal dos Guedes">Faxinal dos Guedes</option>
									<option value="Flor do Sertão">Flor do Sertão</option>
									<option value="Florianópolis">Florianópolis</option>
									<option value="Formosa do Sul">Formosa do Sul</option>
									<option value="Forquilhinha">Forquilhinha</option>
									<option value="Fraiburgo">Fraiburgo</option>
									<option value="Frei Rogério">Frei Rogério</option>
									<option value="Galvão">Galvão</option>
									<option value="Garopaba">Garopaba</option>
									<option value="Garuva">Garuva</option>
									<option value="Gaspar">Gaspar</option>
									<option value="Governador Celso Ramos">
										Governador Celso Ramos
									</option>
									<option value="Grão Pará">Grão Pará</option>
									<option value="Gravatal">Gravatal</option>
									<option value="Guabiruba">Guabiruba</option>
									<option value="Guaraciaba">Guaraciaba</option>
									<option value="Guaramirim">Guaramirim</option>
									<option value="Guarujá do Sul">Guarujá do Sul</option>
									<option value="Guatambú">Guatambú</option>
									<option value="Herval D'Oeste">Herval D'Oeste</option>
									<option value="Ibiam">Ibiam</option>
									<option value="Ibicaré">Ibicaré</option>
									<option value="Ibirama">Ibirama</option>
									<option value="Içara">Içara</option>
									<option value="Ilhota">Ilhota</option>
									<option value="Imaruí">Imaruí</option>
									<option value="Imbituba">Imbituba</option>
									<option value="Imbuia">Imbuia</option>
									<option value="Indaial">Indaial</option>
									<option value="Iomerê">Iomerê</option>
									<option value="Ipira">Ipira</option>
									<option value="Iporã do Oeste">Iporã do Oeste</option>
									<option value="Ipuaçu">Ipuaçu</option>
									<option value="Ipumirim">Ipumirim</option>
									<option value="Iraceminha">Iraceminha</option>
									<option value="Irani">Irani</option>
									<option value="Irati">Irati</option>
									<option value="Irineópolis">Irineópolis</option>
									<option value="Itá">Itá</option>
									<option value="Itaiópolis">Itaiópolis</option>
									<option value="Itajaí">Itajaí</option>
									<option value="Itapema">Itapema</option>
									<option value="Itapiranga">Itapiranga</option>
									<option value="Itapoá">Itapoá</option>
									<option value="Ituporanga">Ituporanga</option>
									<option value="Jaborá">Jaborá</option>
									<option value="Jacinto Machado">Jacinto Machado</option>
									<option value="Jaguaruna">Jaguaruna</option>
									<option value="Jaraguá do Sul">Jaraguá do Sul</option>
									<option value="Jardinópolis">Jardinópolis</option>
									<option value="Joaçaba">Joaçaba</option>
									<option value="Joinville">Joinville</option>
									<option value="José Boiteux">José Boiteux</option>
									<option value="Jupiá">Jupiá</option>
									<option value="Lacerdópolis">Lacerdópolis</option>
									<option value="Lages">Lages</option>
									<option value="Laguna">Laguna</option>
									<option value="Lajeado Grande">Lajeado Grande</option>
									<option value="Laurentino">Laurentino</option>
									<option value="Lauro Muller">Lauro Muller</option>
									<option value="Lebon Régis">Lebon Régis</option>
									<option value="Leoberto Leal">Leoberto Leal</option>
									<option value="Lindóia do Sul">Lindóia do Sul</option>
									<option value="Lontras">Lontras</option>
									<option value="Luiz Alves">Luiz Alves</option>
									<option value="Luzerna">Luzerna</option>
									<option value="Macieira">Macieira</option>
									<option value="Mafra">Mafra</option>
									<option value="Major Gercino">Major Gercino</option>
									<option value="Major Vieira">Major Vieira</option>
									<option value="Maracajá">Maracajá</option>
									<option value="Maravilha">Maravilha</option>
									<option value="Marema">Marema</option>
									<option value="Massaranduba">Massaranduba</option>
									<option value="Matos Costa">Matos Costa</option>
									<option value="Meleiro">Meleiro</option>
									<option value="Mirim Doce">Mirim Doce</option>
									<option value="Modelo">Modelo</option>
									<option value="Mondaí">Mondaí</option>
									<option value="Monte Carlo">Monte Carlo</option>
									<option value="Monte Castelo">Monte Castelo</option>
									<option value="Morro da Fumaça">Morro da Fumaça</option>
									<option value="Morro Grande">Morro Grande</option>
									<option value="Navegantes">Navegantes</option>
									<option value="Nova Erechim">Nova Erechim</option>
									<option value="Nova Itaberaba">Nova Itaberaba</option>
									<option value="Nova Trento">Nova Trento</option>
									<option value="Nova Veneza">Nova Veneza</option>
									<option value="Novo Horizonte">Novo Horizonte</option>
									<option value="Orleans">Orleans</option>
									<option value="Otacílio Costa">Otacílio Costa</option>
									<option value="Ouro">Ouro</option>
									<option value="Ouro Verde">Ouro Verde</option>
									<option value="Paial">Paial</option>
									<option value="Painel">Painel</option>
									<option value="Palhoça">Palhoça</option>
									<option value="Palma Sola">Palma Sola</option>
									<option value="Palmeira">Palmeira</option>
									<option value="Palmitos">Palmitos</option>
									<option value="Papanduva">Papanduva</option>
									<option value="Paraíso">Paraíso</option>
									<option value="Passo de Torres">Passo de Torres</option>
									<option value="Passos Maia">Passos Maia</option>
									<option value="Paulo Lopes">Paulo Lopes</option>
									<option value="Pedras Grandes">Pedras Grandes</option>
									<option value="Penha">Penha</option>
									<option value="Peritiba">Peritiba</option>
									<option value="Pescaria Brava">Pescaria Brava</option>
									<option value="Petrolândia">Petrolândia</option>
									<option value="Balneário Piçarras">Balneário Piçarras</option>
									<option value="Pinhalzinho">Pinhalzinho</option>
									<option value="Pinheiro Preto">Pinheiro Preto</option>
									<option value="Piratuba">Piratuba</option>
									<option value="Planalto Alegre">Planalto Alegre</option>
									<option value="Pomerode">Pomerode</option>
									<option value="Ponte Alta">Ponte Alta</option>
									<option value="Ponte Alta do Norte">
										Ponte Alta do Norte
									</option>
									<option value="Ponte Serrada">Ponte Serrada</option>
									<option value="Porto Belo">Porto Belo</option>
									<option value="Porto União">Porto União</option>
									<option value="Pouso Redondo">Pouso Redondo</option>
									<option value="Praia Grande">Praia Grande</option>
									<option value="Presidente Castello Branco">
										Presidente Castello Branco
									</option>
									<option value="Presidente Getúlio">Presidente Getúlio</option>
									<option value="Presidente Nereu">Presidente Nereu</option>
									<option value="Princesa">Princesa</option>
									<option value="Quilombo">Quilombo</option>
									<option value="Rancho Queimado">Rancho Queimado</option>
									<option value="Rio das Antas">Rio das Antas</option>
									<option value="Rio do Campo">Rio do Campo</option>
									<option value="Rio do Oeste">Rio do Oeste</option>
									<option value="Rio dos Cedros">Rio dos Cedros</option>
									<option value="Rio do Sul">Rio do Sul</option>
									<option value="Rio Fortuna">Rio Fortuna</option>
									<option value="Rio Negrinho">Rio Negrinho</option>
									<option value="Rio Rufino">Rio Rufino</option>
									<option value="Riqueza">Riqueza</option>
									<option value="Rodeio">Rodeio</option>
									<option value="Romelândia">Romelândia</option>
									<option value="Salete">Salete</option>
									<option value="Saltinho">Saltinho</option>
									<option value="Salto Veloso">Salto Veloso</option>
									<option value="Sangão">Sangão</option>
									<option value="Santa Cecília">Santa Cecília</option>
									<option value="Santa Helena">Santa Helena</option>
									<option value="Santa Rosa de Lima">Santa Rosa de Lima</option>
									<option value="Santa Rosa do Sul">Santa Rosa do Sul</option>
									<option value="Santa Terezinha">Santa Terezinha</option>
									<option value="Santa Terezinha do Progresso">
										Santa Terezinha do Progresso
									</option>
									<option value="Santiago do Sul">Santiago do Sul</option>
									<option value="Santo Amaro da Imperatriz">
										Santo Amaro da Imperatriz
									</option>
									<option value="São Bernardino">São Bernardino</option>
									<option value="São Bento do Sul">São Bento do Sul</option>
									<option value="São Bonifácio">São Bonifácio</option>
									<option value="São Carlos">São Carlos</option>
									<option value="São Cristovão do Sul">
										São Cristovão do Sul
									</option>
									<option value="São Domingos">São Domingos</option>
									<option value="São Francisco do Sul">
										São Francisco do Sul
									</option>
									<option value="São João do Oeste">São João do Oeste</option>
									<option value="São João Batista">São João Batista</option>
									<option value="São João do Itaperiú">
										São João do Itaperiú
									</option>
									<option value="São João do Sul">São João do Sul</option>
									<option value="São Joaquim">São Joaquim</option>
									<option value="São José">São José</option>
									<option value="São José do Cedro">São José do Cedro</option>
									<option value="São José do Cerrito">
										São José do Cerrito
									</option>
									<option value="São Lourenço do Oeste">
										São Lourenço do Oeste
									</option>
									<option value="São Ludgero">São Ludgero</option>
									<option value="São Martinho">São Martinho</option>
									<option value="São Miguel da Boa Vista">
										São Miguel da Boa Vista
									</option>
									<option value="São Miguel do Oeste">
										São Miguel do Oeste
									</option>
									<option value="São Pedro de Alcântara">
										São Pedro de Alcântara
									</option>
									<option value="Saudades">Saudades</option>
									<option value="Schroeder">Schroeder</option>
									<option value="Seara">Seara</option>
									<option value="Serra Alta">Serra Alta</option>
									<option value="Siderópolis">Siderópolis</option>
									<option value="Sombrio">Sombrio</option>
									<option value="Sul Brasil">Sul Brasil</option>
									<option value="Taió">Taió</option>
									<option value="Tangará">Tangará</option>
									<option value="Tigrinhos">Tigrinhos</option>
									<option value="Tijucas">Tijucas</option>
									<option value="Timbé do Sul">Timbé do Sul</option>
									<option value="Timbó">Timbó</option>
									<option value="Timbó Grande">Timbó Grande</option>
									<option value="Três Barras">Três Barras</option>
									<option value="Treviso">Treviso</option>
									<option value="Treze de Maio">Treze de Maio</option>
									<option value="Treze Tílias">Treze Tílias</option>
									<option value="Trombudo Central">Trombudo Central</option>
									<option value="Tubarão">Tubarão</option>
									<option value="Tunápolis">Tunápolis</option>
									<option value="Turvo">Turvo</option>
									<option value="União do Oeste">União do Oeste</option>
									<option value="Urubici">Urubici</option>
									<option value="Urupema">Urupema</option>
									<option value="Urussanga">Urussanga</option>
									<option value="Vargeão">Vargeão</option>
									<option value="Vargem">Vargem</option>
									<option value="Vargem Bonita">Vargem Bonita</option>
									<option value="Vidal Ramos">Vidal Ramos</option>
									<option value="Videira">Videira</option>
									<option value="Vitor Meireles">Vitor Meireles</option>
									<option value="Witmarsum">Witmarsum</option>
									<option value="Xanxerê">Xanxerê</option>
									<option value="Xavantina">Xavantina</option>
									<option value="Xaxim">Xaxim</option>
									<option value="Zortéa">Zortéa</option>
									<option value="Balneário Rincão">Balneário Rincão</option>
								</optgroup>
								<optgroup class="state-rs state-group d-none">
									<option value="Aceguá">Aceguá</option>
									<option value="Água Santa">Água Santa</option>
									<option value="Agudo">Agudo</option>
									<option value="Ajuricaba">Ajuricaba</option>
									<option value="Alecrim">Alecrim</option>
									<option value="Alegrete">Alegrete</option>
									<option value="Alegria">Alegria</option>
									<option value="Almirante Tamandaré do Sul">
										Almirante Tamandaré do Sul
									</option>
									<option value="Alpestre">Alpestre</option>
									<option value="Alto Alegre">Alto Alegre</option>
									<option value="Alto Feliz">Alto Feliz</option>
									<option value="Alvorada">Alvorada</option>
									<option value="Amaral Ferrador">Amaral Ferrador</option>
									<option value="Ametista do Sul">Ametista do Sul</option>
									<option value="André da Rocha">André da Rocha</option>
									<option value="Anta Gorda">Anta Gorda</option>
									<option value="Antônio Prado">Antônio Prado</option>
									<option value="Arambaré">Arambaré</option>
									<option value="Araricá">Araricá</option>
									<option value="Aratiba">Aratiba</option>
									<option value="Arroio do Meio">Arroio do Meio</option>
									<option value="Arroio do Sal">Arroio do Sal</option>
									<option value="Arroio do Padre">Arroio do Padre</option>
									<option value="Arroio dos Ratos">Arroio dos Ratos</option>
									<option value="Arroio do Tigre">Arroio do Tigre</option>
									<option value="Arroio Grande">Arroio Grande</option>
									<option value="Arvorezinha">Arvorezinha</option>
									<option value="Augusto Pestana">Augusto Pestana</option>
									<option value="Áurea">Áurea</option>
									<option value="Bagé">Bagé</option>
									<option value="Balneário Pinhal">Balneário Pinhal</option>
									<option value="Barão">Barão</option>
									<option value="Barão de Cotegipe">Barão de Cotegipe</option>
									<option value="Barão do Triunfo">Barão do Triunfo</option>
									<option value="Barracão">Barracão</option>
									<option value="Barra do Guarita">Barra do Guarita</option>
									<option value="Barra do Quaraí">Barra do Quaraí</option>
									<option value="Barra do Ribeiro">Barra do Ribeiro</option>
									<option value="Barra do Rio Azul">Barra do Rio Azul</option>
									<option value="Barra Funda">Barra Funda</option>
									<option value="Barros Cassal">Barros Cassal</option>
									<option value="Benjamin Constant do Sul">
										Benjamin Constant do Sul
									</option>
									<option value="Bento Gonçalves">Bento Gonçalves</option>
									<option value="Boa Vista das Missões">
										Boa Vista das Missões
									</option>
									<option value="Boa Vista do Buricá">
										Boa Vista do Buricá
									</option>
									<option value="Boa Vista do Cadeado">
										Boa Vista do Cadeado
									</option>
									<option value="Boa Vista do Incra">Boa Vista do Incra</option>
									<option value="Boa Vista do Sul">Boa Vista do Sul</option>
									<option value="Bom Jesus">Bom Jesus</option>
									<option value="Bom Princípio">Bom Princípio</option>
									<option value="Bom Progresso">Bom Progresso</option>
									<option value="Bom Retiro do Sul">Bom Retiro do Sul</option>
									<option value="Boqueirão do Leão">Boqueirão do Leão</option>
									<option value="Bossoroca">Bossoroca</option>
									<option value="Bozano">Bozano</option>
									<option value="Braga">Braga</option>
									<option value="Brochier">Brochier</option>
									<option value="Butiá">Butiá</option>
									<option value="Caçapava do Sul">Caçapava do Sul</option>
									<option value="Cacequi">Cacequi</option>
									<option value="Cachoeira do Sul">Cachoeira do Sul</option>
									<option value="Cachoeirinha">Cachoeirinha</option>
									<option value="Cacique Doble">Cacique Doble</option>
									<option value="Caibaté">Caibaté</option>
									<option value="Caiçara">Caiçara</option>
									<option value="Camaquã">Camaquã</option>
									<option value="Camargo">Camargo</option>
									<option value="Cambará do Sul">Cambará do Sul</option>
									<option value="Campestre da Serra">Campestre da Serra</option>
									<option value="Campina das Missões">
										Campina das Missões
									</option>
									<option value="Campinas do Sul">Campinas do Sul</option>
									<option value="Campo Bom">Campo Bom</option>
									<option value="Campo Novo">Campo Novo</option>
									<option value="Campos Borges">Campos Borges</option>
									<option value="Candelária">Candelária</option>
									<option value="Cândido Godói">Cândido Godói</option>
									<option value="Candiota">Candiota</option>
									<option value="Canela">Canela</option>
									<option value="Canguçu">Canguçu</option>
									<option value="Canoas">Canoas</option>
									<option value="Canudos do Vale">Canudos do Vale</option>
									<option value="Capão Bonito do Sul">
										Capão Bonito do Sul
									</option>
									<option value="Capão da Canoa">Capão da Canoa</option>
									<option value="Capão do Cipó">Capão do Cipó</option>
									<option value="Capão do Leão">Capão do Leão</option>
									<option value="Capivari do Sul">Capivari do Sul</option>
									<option value="Capela de Santana">Capela de Santana</option>
									<option value="Capitão">Capitão</option>
									<option value="Carazinho">Carazinho</option>
									<option value="Caraá">Caraá</option>
									<option value="Carlos Barbosa">Carlos Barbosa</option>
									<option value="Carlos Gomes">Carlos Gomes</option>
									<option value="Casca">Casca</option>
									<option value="Caseiros">Caseiros</option>
									<option value="Catuípe">Catuípe</option>
									<option value="Caxias do Sul">Caxias do Sul</option>
									<option value="Centenário">Centenário</option>
									<option value="Cerrito">Cerrito</option>
									<option value="Cerro Branco">Cerro Branco</option>
									<option value="Cerro Grande">Cerro Grande</option>
									<option value="Cerro Grande do Sul">
										Cerro Grande do Sul
									</option>
									<option value="Cerro Largo">Cerro Largo</option>
									<option value="Chapada">Chapada</option>
									<option value="Charqueadas">Charqueadas</option>
									<option value="Charrua">Charrua</option>
									<option value="Chiapetta">Chiapetta</option>
									<option value="Chuí">Chuí</option>
									<option value="Chuvisca">Chuvisca</option>
									<option value="Cidreira">Cidreira</option>
									<option value="Ciríaco">Ciríaco</option>
									<option value="Colinas">Colinas</option>
									<option value="Colorado">Colorado</option>
									<option value="Condor">Condor</option>
									<option value="Constantina">Constantina</option>
									<option value="Coqueiro Baixo">Coqueiro Baixo</option>
									<option value="Coqueiros do Sul">Coqueiros do Sul</option>
									<option value="Coronel Barros">Coronel Barros</option>
									<option value="Coronel Bicaco">Coronel Bicaco</option>
									<option value="Coronel Pilar">Coronel Pilar</option>
									<option value="Cotiporã">Cotiporã</option>
									<option value="Coxilha">Coxilha</option>
									<option value="Crissiumal">Crissiumal</option>
									<option value="Cristal">Cristal</option>
									<option value="Cristal do Sul">Cristal do Sul</option>
									<option value="Cruz Alta">Cruz Alta</option>
									<option value="Cruzaltense">Cruzaltense</option>
									<option value="Cruzeiro do Sul">Cruzeiro do Sul</option>
									<option value="David Canabarro">David Canabarro</option>
									<option value="Derrubadas">Derrubadas</option>
									<option value="Dezesseis de Novembro">
										Dezesseis de Novembro
									</option>
									<option value="Dilermando de Aguiar">
										Dilermando de Aguiar
									</option>
									<option value="Dois Irmãos">Dois Irmãos</option>
									<option value="Dois Irmãos das Missões">
										Dois Irmãos das Missões
									</option>
									<option value="Dois Lajeados">Dois Lajeados</option>
									<option value="Dom Feliciano">Dom Feliciano</option>
									<option value="Dom Pedro de Alcântara">
										Dom Pedro de Alcântara
									</option>
									<option value="Dom Pedrito">Dom Pedrito</option>
									<option value="Dona Francisca">Dona Francisca</option>
									<option value="Doutor Maurício Cardoso">
										Doutor Maurício Cardoso
									</option>
									<option value="Doutor Ricardo">Doutor Ricardo</option>
									<option value="Eldorado do Sul">Eldorado do Sul</option>
									<option value="Encantado">Encantado</option>
									<option value="Encruzilhada do Sul">
										Encruzilhada do Sul
									</option>
									<option value="Engenho Velho">Engenho Velho</option>
									<option value="Entre-Ijuís">Entre-Ijuís</option>
									<option value="Entre Rios do Sul">Entre Rios do Sul</option>
									<option value="Erebango">Erebango</option>
									<option value="Erechim">Erechim</option>
									<option value="Ernestina">Ernestina</option>
									<option value="Herval">Herval</option>
									<option value="Erval Grande">Erval Grande</option>
									<option value="Erval Seco">Erval Seco</option>
									<option value="Esmeralda">Esmeralda</option>
									<option value="Esperança do Sul">Esperança do Sul</option>
									<option value="Espumoso">Espumoso</option>
									<option value="Estação">Estação</option>
									<option value="Estância Velha">Estância Velha</option>
									<option value="Esteio">Esteio</option>
									<option value="Estrela">Estrela</option>
									<option value="Estrela Velha">Estrela Velha</option>
									<option value="Eugênio de Castro">Eugênio de Castro</option>
									<option value="Fagundes Varela">Fagundes Varela</option>
									<option value="Farroupilha">Farroupilha</option>
									<option value="Faxinal do Soturno">Faxinal do Soturno</option>
									<option value="Faxinalzinho">Faxinalzinho</option>
									<option value="Fazenda Vilanova">Fazenda Vilanova</option>
									<option value="Feliz">Feliz</option>
									<option value="Flores da Cunha">Flores da Cunha</option>
									<option value="Floriano Peixoto">Floriano Peixoto</option>
									<option value="Fontoura Xavier">Fontoura Xavier</option>
									<option value="Formigueiro">Formigueiro</option>
									<option value="Forquetinha">Forquetinha</option>
									<option value="Fortaleza dos Valos">
										Fortaleza dos Valos
									</option>
									<option value="Frederico Westphalen">
										Frederico Westphalen
									</option>
									<option value="Garibaldi">Garibaldi</option>
									<option value="Garruchos">Garruchos</option>
									<option value="Gaurama">Gaurama</option>
									<option value="General Câmara">General Câmara</option>
									<option value="Gentil">Gentil</option>
									<option value="Getúlio Vargas">Getúlio Vargas</option>
									<option value="Giruá">Giruá</option>
									<option value="Glorinha">Glorinha</option>
									<option value="Gramado">Gramado</option>
									<option value="Gramado dos Loureiros">
										Gramado dos Loureiros
									</option>
									<option value="Gramado Xavier">Gramado Xavier</option>
									<option value="Gravataí">Gravataí</option>
									<option value="Guabiju">Guabiju</option>
									<option value="Guaíba">Guaíba</option>
									<option value="Guaporé">Guaporé</option>
									<option value="Guarani das Missões">
										Guarani das Missões
									</option>
									<option value="Harmonia">Harmonia</option>
									<option value="Herveiras">Herveiras</option>
									<option value="Horizontina">Horizontina</option>
									<option value="Hulha Negra">Hulha Negra</option>
									<option value="Humaitá">Humaitá</option>
									<option value="Ibarama">Ibarama</option>
									<option value="Ibiaçá">Ibiaçá</option>
									<option value="Ibiraiaras">Ibiraiaras</option>
									<option value="Ibirapuitã">Ibirapuitã</option>
									<option value="Ibirubá">Ibirubá</option>
									<option value="Igrejinha">Igrejinha</option>
									<option value="Ijuí">Ijuí</option>
									<option value="Ilópolis">Ilópolis</option>
									<option value="Imbé">Imbé</option>
									<option value="Imigrante">Imigrante</option>
									<option value="Independência">Independência</option>
									<option value="Inhacorá">Inhacorá</option>
									<option value="Ipê">Ipê</option>
									<option value="Ipiranga do Sul">Ipiranga do Sul</option>
									<option value="Iraí">Iraí</option>
									<option value="Itaara">Itaara</option>
									<option value="Itacurubi">Itacurubi</option>
									<option value="Itapuca">Itapuca</option>
									<option value="Itaqui">Itaqui</option>
									<option value="Itati">Itati</option>
									<option value="Itatiba do Sul">Itatiba do Sul</option>
									<option value="Ivorá">Ivorá</option>
									<option value="Ivoti">Ivoti</option>
									<option value="Jaboticaba">Jaboticaba</option>
									<option value="Jacuizinho">Jacuizinho</option>
									<option value="Jacutinga">Jacutinga</option>
									<option value="Jaguarão">Jaguarão</option>
									<option value="Jaguari">Jaguari</option>
									<option value="Jaquirana">Jaquirana</option>
									<option value="Jari">Jari</option>
									<option value="Jóia">Jóia</option>
									<option value="Júlio de Castilhos">Júlio de Castilhos</option>
									<option value="Lagoa Bonita do Sul">
										Lagoa Bonita do Sul
									</option>
									<option value="Lagoão">Lagoão</option>
									<option value="Lagoa dos Três Cantos">
										Lagoa dos Três Cantos
									</option>
									<option value="Lagoa Vermelha">Lagoa Vermelha</option>
									<option value="Lajeado">Lajeado</option>
									<option value="Lajeado do Bugre">Lajeado do Bugre</option>
									<option value="Lavras do Sul">Lavras do Sul</option>
									<option value="Liberato Salzano">Liberato Salzano</option>
									<option value="Lindolfo Collor">Lindolfo Collor</option>
									<option value="Linha Nova">Linha Nova</option>
									<option value="Machadinho">Machadinho</option>
									<option value="Maçambará">Maçambará</option>
									<option value="Mampituba">Mampituba</option>
									<option value="Manoel Viana">Manoel Viana</option>
									<option value="Maquiné">Maquiné</option>
									<option value="Maratá">Maratá</option>
									<option value="Marau">Marau</option>
									<option value="Marcelino Ramos">Marcelino Ramos</option>
									<option value="Mariana Pimentel">Mariana Pimentel</option>
									<option value="Mariano Moro">Mariano Moro</option>
									<option value="Marques de Souza">Marques de Souza</option>
									<option value="Mata">Mata</option>
									<option value="Mato Castelhano">Mato Castelhano</option>
									<option value="Mato Leitão">Mato Leitão</option>
									<option value="Mato Queimado">Mato Queimado</option>
									<option value="Maximiliano de Almeida">
										Maximiliano de Almeida
									</option>
									<option value="Minas do Leão">Minas do Leão</option>
									<option value="Miraguaí">Miraguaí</option>
									<option value="Montauri">Montauri</option>
									<option value="Monte Alegre dos Campos">
										Monte Alegre dos Campos
									</option>
									<option value="Monte Belo do Sul">Monte Belo do Sul</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Mormaço">Mormaço</option>
									<option value="Morrinhos do Sul">Morrinhos do Sul</option>
									<option value="Morro Redondo">Morro Redondo</option>
									<option value="Morro Reuter">Morro Reuter</option>
									<option value="Mostardas">Mostardas</option>
									<option value="Muçum">Muçum</option>
									<option value="Muitos Capões">Muitos Capões</option>
									<option value="Muliterno">Muliterno</option>
									<option value="Não-Me-Toque">Não-Me-Toque</option>
									<option value="Nicolau Vergueiro">Nicolau Vergueiro</option>
									<option value="Nonoai">Nonoai</option>
									<option value="Nova Alvorada">Nova Alvorada</option>
									<option value="Nova Araçá">Nova Araçá</option>
									<option value="Nova Bassano">Nova Bassano</option>
									<option value="Nova Boa Vista">Nova Boa Vista</option>
									<option value="Nova Bréscia">Nova Bréscia</option>
									<option value="Nova Candelária">Nova Candelária</option>
									<option value="Nova Esperança do Sul">
										Nova Esperança do Sul
									</option>
									<option value="Nova Hartz">Nova Hartz</option>
									<option value="Nova Pádua">Nova Pádua</option>
									<option value="Nova Palma">Nova Palma</option>
									<option value="Nova Petrópolis">Nova Petrópolis</option>
									<option value="Nova Prata">Nova Prata</option>
									<option value="Nova Ramada">Nova Ramada</option>
									<option value="Nova Roma do Sul">Nova Roma do Sul</option>
									<option value="Nova Santa Rita">Nova Santa Rita</option>
									<option value="Novo Cabrais">Novo Cabrais</option>
									<option value="Novo Hamburgo">Novo Hamburgo</option>
									<option value="Novo Machado">Novo Machado</option>
									<option value="Novo Tiradentes">Novo Tiradentes</option>
									<option value="Novo Xingu">Novo Xingu</option>
									<option value="Novo Barreiro">Novo Barreiro</option>
									<option value="Osório">Osório</option>
									<option value="Paim Filho">Paim Filho</option>
									<option value="Palmares do Sul">Palmares do Sul</option>
									<option value="Palmeira das Missões">
										Palmeira das Missões
									</option>
									<option value="Palmitinho">Palmitinho</option>
									<option value="Panambi">Panambi</option>
									<option value="Pantano Grande">Pantano Grande</option>
									<option value="Paraí">Paraí</option>
									<option value="Paraíso do Sul">Paraíso do Sul</option>
									<option value="Pareci Novo">Pareci Novo</option>
									<option value="Parobé">Parobé</option>
									<option value="Passa Sete">Passa Sete</option>
									<option value="Passo do Sobrado">Passo do Sobrado</option>
									<option value="Passo Fundo">Passo Fundo</option>
									<option value="Paulo Bento">Paulo Bento</option>
									<option value="Paverama">Paverama</option>
									<option value="Pedras Altas">Pedras Altas</option>
									<option value="Pedro Osório">Pedro Osório</option>
									<option value="Pejuçara">Pejuçara</option>
									<option value="Pelotas">Pelotas</option>
									<option value="Picada Café">Picada Café</option>
									<option value="Pinhal">Pinhal</option>
									<option value="Pinhal da Serra">Pinhal da Serra</option>
									<option value="Pinhal Grande">Pinhal Grande</option>
									<option value="Pinheirinho do Vale">
										Pinheirinho do Vale
									</option>
									<option value="Pinheiro Machado">Pinheiro Machado</option>
									<option value="Pinto Bandeira">Pinto Bandeira</option>
									<option value="Pirapó">Pirapó</option>
									<option value="Piratini">Piratini</option>
									<option value="Planalto">Planalto</option>
									<option value="Poço das Antas">Poço das Antas</option>
									<option value="Pontão">Pontão</option>
									<option value="Ponte Preta">Ponte Preta</option>
									<option value="Portão">Portão</option>
									<option value="Porto Alegre">Porto Alegre</option>
									<option value="Porto Lucena">Porto Lucena</option>
									<option value="Porto Mauá">Porto Mauá</option>
									<option value="Porto Vera Cruz">Porto Vera Cruz</option>
									<option value="Porto Xavier">Porto Xavier</option>
									<option value="Pouso Novo">Pouso Novo</option>
									<option value="Presidente Lucena">Presidente Lucena</option>
									<option value="Progresso">Progresso</option>
									<option value="Protásio Alves">Protásio Alves</option>
									<option value="Putinga">Putinga</option>
									<option value="Quaraí">Quaraí</option>
									<option value="Quatro Irmãos">Quatro Irmãos</option>
									<option value="Quevedos">Quevedos</option>
									<option value="Quinze de Novembro">Quinze de Novembro</option>
									<option value="Redentora">Redentora</option>
									<option value="Relvado">Relvado</option>
									<option value="Restinga Seca">Restinga Seca</option>
									<option value="Rio dos Índios">Rio dos Índios</option>
									<option value="Rio Grande">Rio Grande</option>
									<option value="Rio Pardo">Rio Pardo</option>
									<option value="Riozinho">Riozinho</option>
									<option value="Roca Sales">Roca Sales</option>
									<option value="Rodeio Bonito">Rodeio Bonito</option>
									<option value="Rolador">Rolador</option>
									<option value="Rolante">Rolante</option>
									<option value="Ronda Alta">Ronda Alta</option>
									<option value="Rondinha">Rondinha</option>
									<option value="Roque Gonzales">Roque Gonzales</option>
									<option value="Rosário do Sul">Rosário do Sul</option>
									<option value="Sagrada Família">Sagrada Família</option>
									<option value="Saldanha Marinho">Saldanha Marinho</option>
									<option value="Salto do Jacuí">Salto do Jacuí</option>
									<option value="Salvador das Missões">
										Salvador das Missões
									</option>
									<option value="Salvador do Sul">Salvador do Sul</option>
									<option value="Sananduva">Sananduva</option>
									<option value="Santa Bárbara do Sul">
										Santa Bárbara do Sul
									</option>
									<option value="Santa Cecília do Sul">
										Santa Cecília do Sul
									</option>
									<option value="Santa Clara do Sul">Santa Clara do Sul</option>
									<option value="Santa Cruz do Sul">Santa Cruz do Sul</option>
									<option value="Santa Maria">Santa Maria</option>
									<option value="Santa Maria do Herval">
										Santa Maria do Herval
									</option>
									<option value="Santa Margarida do Sul">
										Santa Margarida do Sul
									</option>
									<option value="Santana da Boa Vista">
										Santana da Boa Vista
									</option>
									<option value="Sant'Ana do Livramento">
										Sant'Ana do Livramento
									</option>
									<option value="Santa Rosa">Santa Rosa</option>
									<option value="Santa Tereza">Santa Tereza</option>
									<option value="Santa Vitória do Palmar">
										Santa Vitória do Palmar
									</option>
									<option value="Santiago">Santiago</option>
									<option value="Santo Ângelo">Santo Ângelo</option>
									<option value="Santo Antônio do Palma">
										Santo Antônio do Palma
									</option>
									<option value="Santo Antônio da Patrulha">
										Santo Antônio da Patrulha
									</option>
									<option value="Santo Antônio das Missões">
										Santo Antônio das Missões
									</option>
									<option value="Santo Antônio do Planalto">
										Santo Antônio do Planalto
									</option>
									<option value="Santo Augusto">Santo Augusto</option>
									<option value="Santo Cristo">Santo Cristo</option>
									<option value="Santo Expedito do Sul">
										Santo Expedito do Sul
									</option>
									<option value="São Borja">São Borja</option>
									<option value="São Domingos do Sul">
										São Domingos do Sul
									</option>
									<option value="São Francisco de Assis">
										São Francisco de Assis
									</option>
									<option value="São Francisco de Paula">
										São Francisco de Paula
									</option>
									<option value="São Gabriel">São Gabriel</option>
									<option value="São Jerônimo">São Jerônimo</option>
									<option value="São João da Urtiga">São João da Urtiga</option>
									<option value="São João do Polêsine">
										São João do Polêsine
									</option>
									<option value="São Jorge">São Jorge</option>
									<option value="São José das Missões">
										São José das Missões
									</option>
									<option value="São José do Herval">São José do Herval</option>
									<option value="São José do Hortêncio">
										São José do Hortêncio
									</option>
									<option value="São José do Inhacorá">
										São José do Inhacorá
									</option>
									<option value="São José do Norte">São José do Norte</option>
									<option value="São José do Ouro">São José do Ouro</option>
									<option value="São José do Sul">São José do Sul</option>
									<option value="São José dos Ausentes">
										São José dos Ausentes
									</option>
									<option value="São Leopoldo">São Leopoldo</option>
									<option value="São Lourenço do Sul">
										São Lourenço do Sul
									</option>
									<option value="São Luiz Gonzaga">São Luiz Gonzaga</option>
									<option value="São Marcos">São Marcos</option>
									<option value="São Martinho">São Martinho</option>
									<option value="São Martinho da Serra">
										São Martinho da Serra
									</option>
									<option value="São Miguel das Missões">
										São Miguel das Missões
									</option>
									<option value="São Nicolau">São Nicolau</option>
									<option value="São Paulo das Missões">
										São Paulo das Missões
									</option>
									<option value="São Pedro da Serra">São Pedro da Serra</option>
									<option value="São Pedro das Missões">
										São Pedro das Missões
									</option>
									<option value="São Pedro do Butiá">São Pedro do Butiá</option>
									<option value="São Pedro do Sul">São Pedro do Sul</option>
									<option value="São Sebastião do Caí">
										São Sebastião do Caí
									</option>
									<option value="São Sepé">São Sepé</option>
									<option value="São Valentim">São Valentim</option>
									<option value="São Valentim do Sul">
										São Valentim do Sul
									</option>
									<option value="São Valério do Sul">São Valério do Sul</option>
									<option value="São Vendelino">São Vendelino</option>
									<option value="São Vicente do Sul">São Vicente do Sul</option>
									<option value="Sapiranga">Sapiranga</option>
									<option value="Sapucaia do Sul">Sapucaia do Sul</option>
									<option value="Sarandi">Sarandi</option>
									<option value="Seberi">Seberi</option>
									<option value="Sede Nova">Sede Nova</option>
									<option value="Segredo">Segredo</option>
									<option value="Selbach">Selbach</option>
									<option value="Senador Salgado Filho">
										Senador Salgado Filho
									</option>
									<option value="Sentinela do Sul">Sentinela do Sul</option>
									<option value="Serafina Corrêa">Serafina Corrêa</option>
									<option value="Sério">Sério</option>
									<option value="Sertão">Sertão</option>
									<option value="Sertão Santana">Sertão Santana</option>
									<option value="Sete de Setembro">Sete de Setembro</option>
									<option value="Severiano de Almeida">
										Severiano de Almeida
									</option>
									<option value="Silveira Martins">Silveira Martins</option>
									<option value="Sinimbu">Sinimbu</option>
									<option value="Sobradinho">Sobradinho</option>
									<option value="Soledade">Soledade</option>
									<option value="Tabaí">Tabaí</option>
									<option value="Tapejara">Tapejara</option>
									<option value="Tapera">Tapera</option>
									<option value="Tapes">Tapes</option>
									<option value="Taquara">Taquara</option>
									<option value="Taquari">Taquari</option>
									<option value="Taquaruçu do Sul">Taquaruçu do Sul</option>
									<option value="Tavares">Tavares</option>
									<option value="Tenente Portela">Tenente Portela</option>
									<option value="Terra de Areia">Terra de Areia</option>
									<option value="Teutônia">Teutônia</option>
									<option value="Tio Hugo">Tio Hugo</option>
									<option value="Tiradentes do Sul">Tiradentes do Sul</option>
									<option value="Toropi">Toropi</option>
									<option value="Torres">Torres</option>
									<option value="Tramandaí">Tramandaí</option>
									<option value="Travesseiro">Travesseiro</option>
									<option value="Três Arroios">Três Arroios</option>
									<option value="Três Cachoeiras">Três Cachoeiras</option>
									<option value="Três Coroas">Três Coroas</option>
									<option value="Três de Maio">Três de Maio</option>
									<option value="Três Forquilhas">Três Forquilhas</option>
									<option value="Três Palmeiras">Três Palmeiras</option>
									<option value="Três Passos">Três Passos</option>
									<option value="Trindade do Sul">Trindade do Sul</option>
									<option value="Triunfo">Triunfo</option>
									<option value="Tucunduva">Tucunduva</option>
									<option value="Tunas">Tunas</option>
									<option value="Tupanci do Sul">Tupanci do Sul</option>
									<option value="Tupanciretã">Tupanciretã</option>
									<option value="Tupandi">Tupandi</option>
									<option value="Tuparendi">Tuparendi</option>
									<option value="Turuçu">Turuçu</option>
									<option value="Ubiretama">Ubiretama</option>
									<option value="União da Serra">União da Serra</option>
									<option value="Unistalda">Unistalda</option>
									<option value="Uruguaiana">Uruguaiana</option>
									<option value="Vacaria">Vacaria</option>
									<option value="Vale Verde">Vale Verde</option>
									<option value="Vale do Sol">Vale do Sol</option>
									<option value="Vale Real">Vale Real</option>
									<option value="Vanini">Vanini</option>
									<option value="Venâncio Aires">Venâncio Aires</option>
									<option value="Vera Cruz">Vera Cruz</option>
									<option value="Veranópolis">Veranópolis</option>
									<option value="Vespasiano Correa">Vespasiano Correa</option>
									<option value="Viadutos">Viadutos</option>
									<option value="Viamão">Viamão</option>
									<option value="Vicente Dutra">Vicente Dutra</option>
									<option value="Victor Graeff">Victor Graeff</option>
									<option value="Vila Flores">Vila Flores</option>
									<option value="Vila Lângaro">Vila Lângaro</option>
									<option value="Vila Maria">Vila Maria</option>
									<option value="Vila Nova do Sul">Vila Nova do Sul</option>
									<option value="Vista Alegre">Vista Alegre</option>
									<option value="Vista Alegre do Prata">
										Vista Alegre do Prata
									</option>
									<option value="Vista Gaúcha">Vista Gaúcha</option>
									<option value="Vitória das Missões">
										Vitória das Missões
									</option>
									<option value="Westfalia">Westfalia</option>
									<option value="Xangri-lá">Xangri-lá</option>
								</optgroup>
								<optgroup class="state-ms state-group d-none">
									<option value="Água Clara">Água Clara</option>
									<option value="Alcinópolis">Alcinópolis</option>
									<option value="Amambai">Amambai</option>
									<option value="Anastácio">Anastácio</option>
									<option value="Anaurilândia">Anaurilândia</option>
									<option value="Angélica">Angélica</option>
									<option value="Antônio João">Antônio João</option>
									<option value="Aparecida do Taboado">
										Aparecida do Taboado
									</option>
									<option value="Aquidauana">Aquidauana</option>
									<option value="Aral Moreira">Aral Moreira</option>
									<option value="Bandeirantes">Bandeirantes</option>
									<option value="Bataguassu">Bataguassu</option>
									<option value="Batayporã">Batayporã</option>
									<option value="Bela Vista">Bela Vista</option>
									<option value="Bodoquena">Bodoquena</option>
									<option value="Bonito">Bonito</option>
									<option value="Brasilândia">Brasilândia</option>
									<option value="Caarapó">Caarapó</option>
									<option value="Camapuã">Camapuã</option>
									<option value="Campo Grande">Campo Grande</option>
									<option value="Caracol">Caracol</option>
									<option value="Cassilândia">Cassilândia</option>
									<option value="Chapadão do Sul">Chapadão do Sul</option>
									<option value="Corguinho">Corguinho</option>
									<option value="Coronel Sapucaia">Coronel Sapucaia</option>
									<option value="Corumbá">Corumbá</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Coxim">Coxim</option>
									<option value="Deodápolis">Deodápolis</option>
									<option value="Dois Irmãos do Buriti">
										Dois Irmãos do Buriti
									</option>
									<option value="Douradina">Douradina</option>
									<option value="Dourados">Dourados</option>
									<option value="Eldorado">Eldorado</option>
									<option value="Fátima do Sul">Fátima do Sul</option>
									<option value="Figueirão">Figueirão</option>
									<option value="Glória de Dourados">Glória de Dourados</option>
									<option value="Guia Lopes da Laguna">
										Guia Lopes da Laguna
									</option>
									<option value="Iguatemi">Iguatemi</option>
									<option value="Inocência">Inocência</option>
									<option value="Itaporã">Itaporã</option>
									<option value="Itaquiraí">Itaquiraí</option>
									<option value="Ivinhema">Ivinhema</option>
									<option value="Japorã">Japorã</option>
									<option value="Jaraguari">Jaraguari</option>
									<option value="Jardim">Jardim</option>
									<option value="Jateí">Jateí</option>
									<option value="Juti">Juti</option>
									<option value="Ladário">Ladário</option>
									<option value="Laguna Carapã">Laguna Carapã</option>
									<option value="Maracaju">Maracaju</option>
									<option value="Miranda">Miranda</option>
									<option value="Mundo Novo">Mundo Novo</option>
									<option value="Naviraí">Naviraí</option>
									<option value="Nioaque">Nioaque</option>
									<option value="Nova Alvorada do Sul">
										Nova Alvorada do Sul
									</option>
									<option value="Nova Andradina">Nova Andradina</option>
									<option value="Novo Horizonte do Sul">
										Novo Horizonte do Sul
									</option>
									<option value="Paraíso das Águas">Paraíso das Águas</option>
									<option value="Paranaíba">Paranaíba</option>
									<option value="Paranhos">Paranhos</option>
									<option value="Pedro Gomes">Pedro Gomes</option>
									<option value="Ponta Porã">Ponta Porã</option>
									<option value="Porto Murtinho">Porto Murtinho</option>
									<option value="Ribas do Rio Pardo">Ribas do Rio Pardo</option>
									<option value="Rio Brilhante">Rio Brilhante</option>
									<option value="Rio Negro">Rio Negro</option>
									<option value="Rio Verde de Mato Grosso">
										Rio Verde de Mato Grosso
									</option>
									<option value="Rochedo">Rochedo</option>
									<option value="Santa Rita do Pardo">
										Santa Rita do Pardo
									</option>
									<option value="São Gabriel do Oeste">
										São Gabriel do Oeste
									</option>
									<option value="Sete Quedas">Sete Quedas</option>
									<option value="Selvíria">Selvíria</option>
									<option value="Sidrolândia">Sidrolândia</option>
									<option value="Sonora">Sonora</option>
									<option value="Tacuru">Tacuru</option>
									<option value="Taquarussu">Taquarussu</option>
									<option value="Terenos">Terenos</option>
									<option value="Três Lagoas">Três Lagoas</option>
									<option value="Vicentina">Vicentina</option>
								</optgroup>
								<optgroup class="state-mt state-group d-none">
									<option value="Acorizal">Acorizal</option>
									<option value="Água Boa">Água Boa</option>
									<option value="Alta Floresta">Alta Floresta</option>
									<option value="Alto Araguaia">Alto Araguaia</option>
									<option value="Alto Boa Vista">Alto Boa Vista</option>
									<option value="Alto Garças">Alto Garças</option>
									<option value="Alto Paraguai">Alto Paraguai</option>
									<option value="Alto Taquari">Alto Taquari</option>
									<option value="Apiacás">Apiacás</option>
									<option value="Araguaiana">Araguaiana</option>
									<option value="Araguainha">Araguainha</option>
									<option value="Araputanga">Araputanga</option>
									<option value="Arenápolis">Arenápolis</option>
									<option value="Aripuanã">Aripuanã</option>
									<option value="Barão de Melgaço">Barão de Melgaço</option>
									<option value="Barra do Bugres">Barra do Bugres</option>
									<option value="Barra do Garças">Barra do Garças</option>
									<option value="Bom Jesus do Araguaia">
										Bom Jesus do Araguaia
									</option>
									<option value="Brasnorte">Brasnorte</option>
									<option value="Cáceres">Cáceres</option>
									<option value="Campinápolis">Campinápolis</option>
									<option value="Campo Novo do Parecis">
										Campo Novo do Parecis
									</option>
									<option value="Campo Verde">Campo Verde</option>
									<option value="Campos de Júlio">Campos de Júlio</option>
									<option value="Canabrava do Norte">Canabrava do Norte</option>
									<option value="Canarana">Canarana</option>
									<option value="Carlinda">Carlinda</option>
									<option value="Castanheira">Castanheira</option>
									<option value="Chapada dos Guimarães">
										Chapada dos Guimarães
									</option>
									<option value="Cláudia">Cláudia</option>
									<option value="Cocalinho">Cocalinho</option>
									<option value="Colíder">Colíder</option>
									<option value="Colniza">Colniza</option>
									<option value="Comodoro">Comodoro</option>
									<option value="Confresa">Confresa</option>
									<option value="Conquista D'Oeste">Conquista D'Oeste</option>
									<option value="Cotriguaçu">Cotriguaçu</option>
									<option value="Cuiabá">Cuiabá</option>
									<option value="Curvelândia">Curvelândia</option>
									<option value="Denise">Denise</option>
									<option value="Diamantino">Diamantino</option>
									<option value="Dom Aquino">Dom Aquino</option>
									<option value="Feliz Natal">Feliz Natal</option>
									<option value="Figueirópolis D'Oeste">
										Figueirópolis D'Oeste
									</option>
									<option value="Gaúcha do Norte">Gaúcha do Norte</option>
									<option value="General Carneiro">General Carneiro</option>
									<option value="Glória D'Oeste">Glória D'Oeste</option>
									<option value="Guarantã do Norte">Guarantã do Norte</option>
									<option value="Guiratinga">Guiratinga</option>
									<option value="Indiavaí">Indiavaí</option>
									<option value="Ipiranga do Norte">Ipiranga do Norte</option>
									<option value="Itanhangá">Itanhangá</option>
									<option value="Itaúba">Itaúba</option>
									<option value="Itiquira">Itiquira</option>
									<option value="Jaciara">Jaciara</option>
									<option value="Jangada">Jangada</option>
									<option value="Jauru">Jauru</option>
									<option value="Juara">Juara</option>
									<option value="Juína">Juína</option>
									<option value="Juruena">Juruena</option>
									<option value="Juscimeira">Juscimeira</option>
									<option value="Lambari D'Oeste">Lambari D'Oeste</option>
									<option value="Lucas do Rio Verde">Lucas do Rio Verde</option>
									<option value="Luciara">Luciara</option>
									<option value="Vila Bela da Santíssima Trindade">
										Vila Bela da Santíssima Trindade
									</option>
									<option value="Marcelândia">Marcelândia</option>
									<option value="Matupá">Matupá</option>
									<option value="Mirassol D'Oeste">Mirassol D'Oeste</option>
									<option value="Nobres">Nobres</option>
									<option value="Nortelândia">Nortelândia</option>
									<option value="Nossa Senhora do Livramento">
										Nossa Senhora do Livramento
									</option>
									<option value="Nova Bandeirantes">Nova Bandeirantes</option>
									<option value="Nova Nazaré">Nova Nazaré</option>
									<option value="Nova Lacerda">Nova Lacerda</option>
									<option value="Nova Santa Helena">Nova Santa Helena</option>
									<option value="Nova Brasilândia">Nova Brasilândia</option>
									<option value="Nova Canaã do Norte">
										Nova Canaã do Norte
									</option>
									<option value="Nova Mutum">Nova Mutum</option>
									<option value="Nova Olímpia">Nova Olímpia</option>
									<option value="Nova Ubiratã">Nova Ubiratã</option>
									<option value="Nova Xavantina">Nova Xavantina</option>
									<option value="Novo Mundo">Novo Mundo</option>
									<option value="Novo Horizonte do Norte">
										Novo Horizonte do Norte
									</option>
									<option value="Novo São Joaquim">Novo São Joaquim</option>
									<option value="Paranaíta">Paranaíta</option>
									<option value="Paranatinga">Paranatinga</option>
									<option value="Novo Santo Antônio">Novo Santo Antônio</option>
									<option value="Pedra Preta">Pedra Preta</option>
									<option value="Peixoto de Azevedo">Peixoto de Azevedo</option>
									<option value="Planalto da Serra">Planalto da Serra</option>
									<option value="Poconé">Poconé</option>
									<option value="Pontal do Araguaia">Pontal do Araguaia</option>
									<option value="Ponte Branca">Ponte Branca</option>
									<option value="Pontes e Lacerda">Pontes e Lacerda</option>
									<option value="Porto Alegre do Norte">
										Porto Alegre do Norte
									</option>
									<option value="Porto dos Gaúchos">Porto dos Gaúchos</option>
									<option value="Porto Esperidião">Porto Esperidião</option>
									<option value="Porto Estrela">Porto Estrela</option>
									<option value="Poxoréo">Poxoréo</option>
									<option value="Primavera do Leste">Primavera do Leste</option>
									<option value="Querência">Querência</option>
									<option value="São José dos Quatro Marcos">
										São José dos Quatro Marcos
									</option>
									<option value="Reserva do Cabaçal">Reserva do Cabaçal</option>
									<option value="Ribeirão Cascalheira">
										Ribeirão Cascalheira
									</option>
									<option value="Ribeirãozinho">Ribeirãozinho</option>
									<option value="Rio Branco">Rio Branco</option>
									<option value="Santa Carmem">Santa Carmem</option>
									<option value="Santo Afonso">Santo Afonso</option>
									<option value="São José do Povo">São José do Povo</option>
									<option value="São José do Rio Claro">
										São José do Rio Claro
									</option>
									<option value="São José do Xingu">São José do Xingu</option>
									<option value="São Pedro da Cipa">São Pedro da Cipa</option>
									<option value="Rondolândia">Rondolândia</option>
									<option value="Rondonópolis">Rondonópolis</option>
									<option value="Rosário Oeste">Rosário Oeste</option>
									<option value="Santa Cruz do Xingu">
										Santa Cruz do Xingu
									</option>
									<option value="Salto do Céu">Salto do Céu</option>
									<option value="Santa Rita do Trivelato">
										Santa Rita do Trivelato
									</option>
									<option value="Santa Terezinha">Santa Terezinha</option>
									<option value="Santo Antônio do Leste">
										Santo Antônio do Leste
									</option>
									<option value="Santo Antônio do Leverger">
										Santo Antônio do Leverger
									</option>
									<option value="São Félix do Araguaia">
										São Félix do Araguaia
									</option>
									<option value="Sapezal">Sapezal</option>
									<option value="Serra Nova Dourada">Serra Nova Dourada</option>
									<option value="Sinop">Sinop</option>
									<option value="Sorriso">Sorriso</option>
									<option value="Tabaporã">Tabaporã</option>
									<option value="Tangará da Serra">Tangará da Serra</option>
									<option value="Tapurah">Tapurah</option>
									<option value="Terra Nova do Norte">
										Terra Nova do Norte
									</option>
									<option value="Tesouro">Tesouro</option>
									<option value="Torixoréu">Torixoréu</option>
									<option value="União do Sul">União do Sul</option>
									<option value="Vale de São Domingos">
										Vale de São Domingos
									</option>
									<option value="Várzea Grande">Várzea Grande</option>
									<option value="Vera">Vera</option>
									<option value="Vila Rica">Vila Rica</option>
									<option value="Nova Guarita">Nova Guarita</option>
									<option value="Nova Marilândia">Nova Marilândia</option>
									<option value="Nova Maringá">Nova Maringá</option>
									<option value="Nova Monte Verde">Nova Monte Verde</option>
								</optgroup>
								<optgroup class="state-go state-group d-none">
									<option value="Abadia de Goiás">Abadia de Goiás</option>
									<option value="Abadiânia">Abadiânia</option>
									<option value="Acreúna">Acreúna</option>
									<option value="Adelândia">Adelândia</option>
									<option value="Água Fria de Goiás">Água Fria de Goiás</option>
									<option value="Água Limpa">Água Limpa</option>
									<option value="Águas Lindas de Goiás">
										Águas Lindas de Goiás
									</option>
									<option value="Alexânia">Alexânia</option>
									<option value="Aloândia">Aloândia</option>
									<option value="Alto Horizonte">Alto Horizonte</option>
									<option value="Alto Paraíso de Goiás">
										Alto Paraíso de Goiás
									</option>
									<option value="Alvorada do Norte">Alvorada do Norte</option>
									<option value="Amaralina">Amaralina</option>
									<option value="Americano do Brasil">
										Americano do Brasil
									</option>
									<option value="Amorinópolis">Amorinópolis</option>
									<option value="Anápolis">Anápolis</option>
									<option value="Anhanguera">Anhanguera</option>
									<option value="Anicuns">Anicuns</option>
									<option value="Aparecida de Goiânia">
										Aparecida de Goiânia
									</option>
									<option value="Aparecida do Rio Doce">
										Aparecida do Rio Doce
									</option>
									<option value="Aporé">Aporé</option>
									<option value="Araçu">Araçu</option>
									<option value="Aragarças">Aragarças</option>
									<option value="Aragoiânia">Aragoiânia</option>
									<option value="Araguapaz">Araguapaz</option>
									<option value="Arenópolis">Arenópolis</option>
									<option value="Aruanã">Aruanã</option>
									<option value="Aurilândia">Aurilândia</option>
									<option value="Avelinópolis">Avelinópolis</option>
									<option value="Baliza">Baliza</option>
									<option value="Barro Alto">Barro Alto</option>
									<option value="Bela Vista de Goiás">
										Bela Vista de Goiás
									</option>
									<option value="Bom Jardim de Goiás">
										Bom Jardim de Goiás
									</option>
									<option value="Bom Jesus de Goiás">Bom Jesus de Goiás</option>
									<option value="Bonfinópolis">Bonfinópolis</option>
									<option value="Bonópolis">Bonópolis</option>
									<option value="Brazabrantes">Brazabrantes</option>
									<option value="Britânia">Britânia</option>
									<option value="Buriti Alegre">Buriti Alegre</option>
									<option value="Buriti de Goiás">Buriti de Goiás</option>
									<option value="Buritinópolis">Buritinópolis</option>
									<option value="Cabeceiras">Cabeceiras</option>
									<option value="Cachoeira Alta">Cachoeira Alta</option>
									<option value="Cachoeira de Goiás">Cachoeira de Goiás</option>
									<option value="Cachoeira Dourada">Cachoeira Dourada</option>
									<option value="Caçu">Caçu</option>
									<option value="Caiapônia">Caiapônia</option>
									<option value="Caldas Novas">Caldas Novas</option>
									<option value="Caldazinha">Caldazinha</option>
									<option value="Campestre de Goiás">Campestre de Goiás</option>
									<option value="Campinaçu">Campinaçu</option>
									<option value="Campinorte">Campinorte</option>
									<option value="Campo Alegre de Goiás">
										Campo Alegre de Goiás
									</option>
									<option value="Campo Limpo de Goiás">
										Campo Limpo de Goiás
									</option>
									<option value="Campos Belos">Campos Belos</option>
									<option value="Campos Verdes">Campos Verdes</option>
									<option value="Carmo do Rio Verde">Carmo do Rio Verde</option>
									<option value="Castelândia">Castelândia</option>
									<option value="Catalão">Catalão</option>
									<option value="Caturaí">Caturaí</option>
									<option value="Cavalcante">Cavalcante</option>
									<option value="Ceres">Ceres</option>
									<option value="Cezarina">Cezarina</option>
									<option value="Chapadão do Céu">Chapadão do Céu</option>
									<option value="Cidade Ocidental">Cidade Ocidental</option>
									<option value="Cocalzinho de Goiás">
										Cocalzinho de Goiás
									</option>
									<option value="Colinas do Sul">Colinas do Sul</option>
									<option value="Córrego do Ouro">Córrego do Ouro</option>
									<option value="Corumbá de Goiás">Corumbá de Goiás</option>
									<option value="Corumbaíba">Corumbaíba</option>
									<option value="Cristalina">Cristalina</option>
									<option value="Cristianópolis">Cristianópolis</option>
									<option value="Crixás">Crixás</option>
									<option value="Cromínia">Cromínia</option>
									<option value="Cumari">Cumari</option>
									<option value="Damianópolis">Damianópolis</option>
									<option value="Damolândia">Damolândia</option>
									<option value="Davinópolis">Davinópolis</option>
									<option value="Diorama">Diorama</option>
									<option value="Doverlândia">Doverlândia</option>
									<option value="Edealina">Edealina</option>
									<option value="Edéia">Edéia</option>
									<option value="Estrela do Norte">Estrela do Norte</option>
									<option value="Faina">Faina</option>
									<option value="Fazenda Nova">Fazenda Nova</option>
									<option value="Firminópolis">Firminópolis</option>
									<option value="Flores de Goiás">Flores de Goiás</option>
									<option value="Formosa">Formosa</option>
									<option value="Formoso">Formoso</option>
									<option value="Gameleira de Goiás">Gameleira de Goiás</option>
									<option value="optgroupinópolis de Goiás">
										optgroupinópolis de Goiás
									</option>
									<option value="Goianápolis">Goianápolis</option>
									<option value="Goiandira">Goiandira</option>
									<option value="Goianésia">Goianésia</option>
									<option value="Goiânia">Goiânia</option>
									<option value="Goianira">Goianira</option>
									<option value="Goiás">Goiás</option>
									<option value="Goiatuba">Goiatuba</option>
									<option value="Gouvelândia">Gouvelândia</option>
									<option value="Guapó">Guapó</option>
									<option value="Guaraíta">Guaraíta</option>
									<option value="Guarani de Goiás">Guarani de Goiás</option>
									<option value="Guarinos">Guarinos</option>
									<option value="Heitoraí">Heitoraí</option>
									<option value="Hidrolândia">Hidrolândia</option>
									<option value="Hidrolina">Hidrolina</option>
									<option value="Iaciara">Iaciara</option>
									<option value="Inaciolândia">Inaciolândia</option>
									<option value="Indiara">Indiara</option>
									<option value="Inhumas">Inhumas</option>
									<option value="Ipameri">Ipameri</option>
									<option value="Ipiranga de Goiás">Ipiranga de Goiás</option>
									<option value="Iporá">Iporá</option>
									<option value="Israelândia">Israelândia</option>
									<option value="Itaberaí">Itaberaí</option>
									<option value="Itaguari">Itaguari</option>
									<option value="Itaguaru">Itaguaru</option>
									<option value="Itajá">Itajá</option>
									<option value="Itapaci">Itapaci</option>
									<option value="Itapirapuã">Itapirapuã</option>
									<option value="Itapuranga">Itapuranga</option>
									<option value="Itarumã">Itarumã</option>
									<option value="Itauçu">Itauçu</option>
									<option value="Itumbiara">Itumbiara</option>
									<option value="Ivolândia">Ivolândia</option>
									<option value="Jandaia">Jandaia</option>
									<option value="Jaraguá">Jaraguá</option>
									<option value="Jataí">Jataí</option>
									<option value="Jaupaci">Jaupaci</option>
									<option value="Jesúpolis">Jesúpolis</option>
									<option value="Joviânia">Joviânia</option>
									<option value="Jussara">Jussara</option>
									<option value="Lagoa Santa">Lagoa Santa</option>
									<option value="Leopoldo de Bulhões">
										Leopoldo de Bulhões
									</option>
									<option value="Luziânia">Luziânia</option>
									<option value="Mairipotaba">Mairipotaba</option>
									<option value="Mambaí">Mambaí</option>
									<option value="Mara Rosa">Mara Rosa</option>
									<option value="Marzagão">Marzagão</option>
									<option value="Matrinchã">Matrinchã</option>
									<option value="Maurilândia">Maurilândia</option>
									<option value="Mimoso de Goiás">Mimoso de Goiás</option>
									<option value="Minaçu">Minaçu</option>
									<option value="Mineiros">Mineiros</option>
									<option value="Moiporá">Moiporá</option>
									<option value="Monte Alegre de Goiás">
										Monte Alegre de Goiás
									</option>
									<option value="Montes Claros de Goiás">
										Montes Claros de Goiás
									</option>
									<option value="Montividiu">Montividiu</option>
									<option value="Montividiu do Norte">
										Montividiu do Norte
									</option>
									<option value="Morrinhos">Morrinhos</option>
									<option value="Morro Agudo de Goiás">
										Morro Agudo de Goiás
									</option>
									<option value="Mossâmedes">Mossâmedes</option>
									<option value="Mozarlândia">Mozarlândia</option>
									<option value="Mundo Novo">Mundo Novo</option>
									<option value="Mutunópolis">Mutunópolis</option>
									<option value="Nazário">Nazário</option>
									<option value="Nerópolis">Nerópolis</option>
									<option value="Niquelândia">Niquelândia</option>
									<option value="Nova América">Nova América</option>
									<option value="Nova Aurora">Nova Aurora</option>
									<option value="Nova Crixás">Nova Crixás</option>
									<option value="Nova Glória">Nova Glória</option>
									<option value="Nova Iguaçu de Goiás">
										Nova Iguaçu de Goiás
									</option>
									<option value="Nova Roma">Nova Roma</option>
									<option value="Nova Veneza">Nova Veneza</option>
									<option value="Novo Brasil">Novo Brasil</option>
									<option value="Novo Gama">Novo Gama</option>
									<option value="Novo Planalto">Novo Planalto</option>
									<option value="Orizona">Orizona</option>
									<option value="Ouro Verde de Goiás">
										Ouro Verde de Goiás
									</option>
									<option value="Ouvidor">Ouvidor</option>
									<option value="Padre Bernardo">Padre Bernardo</option>
									<option value="Palestina de Goiás">Palestina de Goiás</option>
									<option value="Palmeiras de Goiás">Palmeiras de Goiás</option>
									<option value="Palmelo">Palmelo</option>
									<option value="Palminópolis">Palminópolis</option>
									<option value="Panamá">Panamá</option>
									<option value="Paranaiguara">Paranaiguara</option>
									<option value="Paraúna">Paraúna</option>
									<option value="Perolândia">Perolândia</option>
									<option value="Petrolina de Goiás">Petrolina de Goiás</option>
									<option value="Pilar de Goiás">Pilar de Goiás</option>
									<option value="Piracanjuba">Piracanjuba</option>
									<option value="Piranhas">Piranhas</option>
									<option value="Pirenópolis">Pirenópolis</option>
									<option value="Pires do Rio">Pires do Rio</option>
									<option value="Planaltina">Planaltina</option>
									<option value="Pontalina">Pontalina</option>
									<option value="Porangatu">Porangatu</option>
									<option value="Porteirão">Porteirão</option>
									<option value="Portelândia">Portelândia</option>
									<option value="Posse">Posse</option>
									<option value="Professor Jamil">Professor Jamil</option>
									<option value="Quirinópolis">Quirinópolis</option>
									<option value="Rialma">Rialma</option>
									<option value="Rianápolis">Rianápolis</option>
									<option value="Rio Quente">Rio Quente</option>
									<option value="Rio Verde">Rio Verde</option>
									<option value="Rubiataba">Rubiataba</option>
									<option value="Sanclerlândia">Sanclerlândia</option>
									<option value="Santa Bárbara de Goiás">
										Santa Bárbara de Goiás
									</option>
									<option value="Santa Cruz de Goiás">
										Santa Cruz de Goiás
									</option>
									<option value="Santa Fé de Goiás">Santa Fé de Goiás</option>
									<option value="Santa Helena de Goiás">
										Santa Helena de Goiás
									</option>
									<option value="Santa Isabel">Santa Isabel</option>
									<option value="Santa Rita do Araguaia">
										Santa Rita do Araguaia
									</option>
									<option value="Santa Rita do Novo Destino">
										Santa Rita do Novo Destino
									</option>
									<option value="Santa Rosa de Goiás">
										Santa Rosa de Goiás
									</option>
									<option value="Santa Tereza de Goiás">
										Santa Tereza de Goiás
									</option>
									<option value="Santa Terezinha de Goiás">
										Santa Terezinha de Goiás
									</option>
									<option value="Santo Antônio da Barra">
										Santo Antônio da Barra
									</option>
									<option value="Santo Antônio de Goiás">
										Santo Antônio de Goiás
									</option>
									<option value="Santo Antônio do Descoberto">
										Santo Antônio do Descoberto
									</option>
									<option value="São Domingos">São Domingos</option>
									<option value="São Francisco de Goiás">
										São Francisco de Goiás
									</option>
									<option value="São João D'Aliança">São João D'Aliança</option>
									<option value="São João da Paraúna">
										São João da Paraúna
									</option>
									<option value="São Luís de Montes Belos">
										São Luís de Montes Belos
									</option>
									<option value="São Luíz do Norte">São Luíz do Norte</option>
									<option value="São Miguel do Araguaia">
										São Miguel do Araguaia
									</option>
									<option value="São Miguel do Passa Quatro">
										São Miguel do Passa Quatro
									</option>
									<option value="São Patrício">São Patrício</option>
									<option value="São Simão">São Simão</option>
									<option value="Senador Canedo">Senador Canedo</option>
									<option value="Serranópolis">Serranópolis</option>
									<option value="Silvânia">Silvânia</option>
									<option value="Simolândia">Simolândia</option>
									<option value="Sítio D'Abadia">Sítio D'Abadia</option>
									<option value="Taquaral de Goiás">Taquaral de Goiás</option>
									<option value="Teresina de Goiás">Teresina de Goiás</option>
									<option value="Terezópolis de Goiás">
										Terezópolis de Goiás
									</option>
									<option value="Três Ranchos">Três Ranchos</option>
									<option value="Trindade">Trindade</option>
									<option value="Trombas">Trombas</option>
									<option value="Turvânia">Turvânia</option>
									<option value="Turvelândia">Turvelândia</option>
									<option value="Uirapuru">Uirapuru</option>
									<option value="Uruaçu">Uruaçu</option>
									<option value="Uruana">Uruana</option>
									<option value="Urutaí">Urutaí</option>
									<option value="Valparaíso de Goiás">
										Valparaíso de Goiás
									</option>
									<option value="Varjão">Varjão</option>
									<option value="Vianópolis">Vianópolis</option>
									<option value="Vicentinópolis">Vicentinópolis</option>
									<option value="Vila Boa">Vila Boa</option>
									<option value="Vila Propício">Vila Propício</option>
								</optgroup>
								<optgroup class="state-df state-group d-none">
									<option value="Brasília">Brasília</option>
								</optgroup>
							</select>
					</fieldset>
					<fieldset class="px-0 row gap-3">
						<div class="col-sm px-0">
							<select
									name="ocupacao"
									class="form-select"
									title="Selecione a sua ocupação">
									<option value="" selected hidden>Ocupação</option>
									<option value="Trabalho em empresa (Assalariado)">
										Trabalho em empresa (Assalariado)
									</option>
									<option value="Autônomo">Autônomo</option>
									<option value="Microemprededor individual (MEI)">
										Microemprededor individual (MEI)
									</option>
									<option value="Servidor Público">Servidor Público</option>
									<option value="Empresário">Empresário</option>
									<option value="Aposentado">Aposentado</option>
									<option value="Pensionista">Pensionista</option>
									<option value="Desempregado">Desempregado</option>
									<option value="Militar">Militar</option>
									<option value="Outros">Outros</option>
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
	<script src="./../script/landing-page.js"></script>
	<script>
		const btn = document.getElementById('btnSubmit')
		btn.addEventListener('click', () => {
			alert('Em Breve!')
		})
	</script>
</body>

</html>