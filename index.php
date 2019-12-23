<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="estilo/fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="keywords" content="Palavras, Separadas, Por, Vírgulas." />
	<meta name="description" content="Descrição do Meu WebSite." />
	<meta charset="utf-8">
</head>
<body>

<header>
	<div class="center">
		<div class="logo left">LogoMarca</div><!--Logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fas fa-bars"></i>
			</div><!--botao-menu-mobile-->
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
	</div><!--center-->
</header>
	<section class="banner-principal">
		<div class="overlay"></div><!--overlay-->
		<div class="center">
		<form>
			<h2>Qual o seu melhor e-mail?</h2>
			<input type="email" name="email" required />
			<input type="submit" name="acao" value="Cadastrar!" />
		</form>
		</div><!--center-->
	</section><!--banner-principal-->
	<section class="descricao-autor">
		<div class="center">
		<div class="w50 left">
			<h2>Henrique de Castro</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet lorem non leo feugiat pulvinar. Nunc commodo posuere arcu, ut consequat ante viverra eu. Integer risus est, sodales sed urna et, pulvinar aliquam sem. Donec mi sem, iaculis eu augue vel, ultricies pretium quam. Ut odio ipsum, tincidunt in tortor vel, semper condimentum leo. Phasellus finibus ac mauris in imperdiet. Praesent auctor enim nec mi luctus cursus. Maecenas ut ipsum at massa elementum tempor quis et massa. Maecenas id nibh eleifend, sollicitudin nunc vel, commodo velit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet lorem non leo feugiat pulvinar. Nunc commodo posuere arcu, ut consequat ante viverra eu. Integer risus est, sodales sed urna et, pulvinar aliquam sem. Donec mi sem, iaculis eu augue vel, ultricies pretium quam. Ut odio ipsum, tincidunt in tortor vel, semper condimentum leo. Phasellus finibus ac mauris in imperdiet. Praesent auctor enim nec mi luctus cursus. Maecenas ut ipsum at massa elementum tempor quis et massa. Maecenas id nibh eleifend, sollicitudin nunc vel, commodo velit.</p>
		</div><!--w50 left-->
		<div class="w50 left">
			<img class="right" src="imagens/foto.jpg" />
		</div><!--w50 left-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->
	<section class="especialidades">
		<div class="center">
		<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3-alt"></i></h3>
				<h4>CSS3</h4>
				<p>Nullam luctus tempor mollis. Etiam a finibus nulla. Donec justo purus, tincidunt a finibus dictum, eleifend sit amet velit. Cras auctor lacus eu tellus rhoncus maximus eget et quam. Mauris lobortis sodales sapien tincidunt molestie.</p>
			</div><!--w33 left box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Nullam luctus tempor mollis. Etiam a finibus nulla. Donec justo purus, tincidunt a finibus dictum, eleifend sit amet velit. Cras auctor lacus eu tellus rhoncus maximus eget et quam. Mauris lobortis sodales sapien tincidunt molestie.</p>
			</div><!--w33 left box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-js-square"></i></h3>
				<h4>JavaScript</h4>
				<p>Nullam luctus tempor mollis. Etiam a finibus nulla. Donec justo purus, tincidunt a finibus dictum, eleifend sit amet velit. Cras auctor lacus eu tellus rhoncus maximus eget et quam. Mauris lobortis sodales sapien tincidunt molestie.</p>
			</div><!--w33 left box-especialidade-->
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</section><!--especialidades-->
	<section class="extras">
		<div class="center">
			<div class="w50 left depoimento-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ut nisl vestibulum, interdum nisl a, posuere ipsum. Ut sed dolor sollicitudin, congue augue a, dapibus nunc."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ut nisl vestibulum, interdum nisl a, posuere ipsum. Ut sed dolor sollicitudin, congue augue a, dapibus nunc."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">"Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ut nisl vestibulum, interdum nisl a, posuere ipsum. Ut sed dolor sollicitudin, congue augue a, dapibus nunc."</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50 left-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Maecenas vitae erat nisi. Vestibulum est turpis, facilisis sed risus a, congue pellentesque dui. Nulla diam orci, placerat et purus a, tincidunt cursus massa. Duis lacinia est tellus, id placerat leo pretium vel.</li>
						<li>Maecenas vitae erat nisi. Vestibulum est turpis, facilisis sed risus a, congue pellentesque dui. Nulla diam orci, placerat et purus a, tincidunt cursus massa. Duis lacinia est tellus, id placerat leo pretium vel.</li>
						<li>Maecenas vitae erat nisi. Vestibulum est turpis, facilisis sed risus a, congue pellentesque dui. Nulla diam orci, placerat et purus a, tincidunt cursus massa. Duis lacinia est tellus, id placerat leo pretium vel.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50 left-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->
	<footer>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>