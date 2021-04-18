<?php include_once 'db/conection.php'; ?>
<?php
session_start();
if(empty($_SESSION['user']))
{
	header("location: cadastro");
	exit;
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<!-- Etiqueta global do site (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129353475-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-129353475-1');
		</script>
		
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="img/icon/logotipo/logo.png" rel="shortcut icon" type="image/x-icon">

		<title>Divulgação de Eventos - RN</title>

		<!-- BOOTSTRAP -->

		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css" media="screen">
		
		<!-- STYLESHEET -->

		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="stylesheet" type="text/css" href="css/reset.css">

	</head>

	<body>

		<!-- MENU -->
		<nav class="navbar navbar-custom navbar-expand-lg fixed-top">
			<a href="index">
				<img src="img/icon/logotipo/logowt.png" class="img-fluid ml-md-5" height="80" width="80">
			</a>
			<button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarTog" aria-controls="navbarTog" aria-expanded="false" aria-label="Toggle navigation">
				<img src="img/icon/menu.png" alt="">
			</button>

			<div class="collapse navbar-collapse" id="navbarTog">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-md-5">

					<li class="nav-item active">
						<a class="nav-link ml-0 ml-md-3" href="eventos">EVENTOS</a>
					</li>

					<li class="nav-item">
						<a class="nav-link ml-0 ml-md-3" href="quanto-custa">QUANTO CUSTA?</a>
					</li>

					<!-- <li class="nav-item">
						<a class="nav-link" href="blog">BLOG</a>
					</li> -->
				</ul>


				<div class="ml-md-5 mr-md-5">
				<div class="row">
					<a href="cad-eventos">
						<button type="submit" class="btn transition style-button-bw mr-3">
							CRIAR EVENTO
						</button>
					</a>
					<div class="dropdown btn ml-auto">
					  <a href="" class="badge-danger" id="drop-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;">

					    <?php
						echo '<img src="img/icon/user.svg" class="img-fluid mr-2" style="width: 30px;">';
							?>
							<span class="nm_user">
								<?php echo $_SESSION['user']; ?>
							</span>		
							<?php
							echo '<img src="img/icon/arrow-down.svg" class="img-fluid ml-2" style="width: 10px;">';
						?>
						
					  </a>

					  <div class="dropdown-menu" aria-labelledby="drop-user">
					    <a class="dropdown-item" href="ajuda">Ajuda</a>
					    <a class="dropdown-item" href="cad-eventos">Criar evento</a>
					    <a class="dropdown-item" href="painel">Meus eventos</a>
					    <a class="dropdown-item" href="logout">Sair</a>
					  </div>

					</div>
				</div>
		   	</div>
		</nav>



	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/pace.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>