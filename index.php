<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="keywords" content="Palavras, Separadas, Por, Vírgulas." />
	<meta name="description" content="Descrição do Meu WebSite." />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta charset="utf-8">
</head>
<body>
<?php 
	// Se estiver setado o meu POST acao envie o formulário
	if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home'){
		// verificação. o email vai estar dentro do post email. se meu email for diferente de vazio.
		if($_POST['email'] != ''){
			$email = $_POST['email'];
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){       //Verificar se o e-mail é válido.
				$mail = new Email('smtp.gmail.com','emailmaisusado@gmail.com','@hdc*1111','HdC Web Services');
				$mail->addAddress('hendecastro@gmail.com','Henrique');
				$corpo = "E-mail cadastrado na home do site:<hr>$email";
				$info = array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$corpo);
				$mail->formatarEmail($info);
				// $email->formatarEmail(array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$email));
				if($mail->enviarEmail()){
					echo '<script>alert("Enviado com sucesso.")</script>';
				}else{
					echo '<script>alert("Ops! Algo deu errado.")</script>';
				}
			}else{
				echo '<script>alert("Favor informar um e-mail válido.")</script>';
			}
		}else{  //caso o contrário...
			echo '<script>alert("Campos vázios não são permitidos.")</script>';
		}
	}else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato'){
		// $nome = $_POST['nome'];
		// $email = $_POST['email'];
		// $mensagem = $_POST['mensagem'];
		// $telefone = $_POST['telefone'];
		$assunto = 'Nova mensagem do site!';
		$corpo = '';
		foreach ($_POST as $key => $value) {
			$corpo.=ucfirst($key).": ".$value;
			$corpo.="<hr>";
		}
		$info = array('assunto'=>$assunto,'corpo'=>$corpo);
		$mail = new Email('smtp.gmail.com','emailmaisusado@gmail.com','@hdc*1111','HdC Web Services');
		$mail->addAddress('hendecastro@gmail.com','Henrique');
		$mail->formatarEmail($info);
		if($mail->enviarEmail()){
			echo '<script>alert("Enviado com sucesso.")</script>';
		}else{
			echo '<script>alert("Ops! Algo deu errado.")</script>';
		}
	}
?>
<base base="<?php echo INCLUDE_PATH; ?>" />
<?php 
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'depoimentos':
			echo '<target target="depoimentos" />';
			break;
		case 'servicos':
			echo '<target target="servicos" />';
			break;
	}
 ?>
<header>
	<div class="center">
		<div class="logo left"><a href="/">LogoMarca</a></div><!--Logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fas fa-bars"></i>
			</div><!--botao-menu-mobile-->
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
	</div><!--center-->
</header>
<div class="container-principal">
	<?php 

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}
		else{
			if($url != 'depoimentos' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}

	 ?>
</div><!-- container-princial -->
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<!-- validaçao para carregar o slide somente na home -->
	<?php 
		if($url == 'home' || $url == ''){
	?>	
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
	<?php
		if($url == 'contato'){
	?>
	<?php }	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
</body>
</html>