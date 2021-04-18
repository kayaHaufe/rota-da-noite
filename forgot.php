<?php
session_start();
include_once 'db/conection.php';

if((isset($_POST['recuperar'])) && ($_POST['recuperar'] == "recuperar"))
{
	$_SESSION['email_forgot'] = $link->real_escape_string($_POST['email_forgot']);

	$email_forgot = $_SESSION['email_forgot'];

	$busca = mysqli_query($link,
		"SELECT nm_email FROM tb_cliente WHERE nm_email = '$email_forgot'");

	if(mysqli_fetch_assoc($busca))
	{
		$_SESSION['token'] = crypt(rand());

		date_default_timezone_set("America/Sao_Paulo");		
		$_SESSION['expira'] = date('Y-m-d H:i:s', strtotime('+1 day'));

		$email_remetente = "empresarotadanoite@gmail.com";
		$email_destinatario = "$email_forgot";
		$email_reply = "$email_forgot";
		$email_assunto = "Recuperação de senha";

		$email_conteudo = "Recebemos uma solicitação para redefinir a senha da sua conta.<br>
			Caso você tenha solicitado a redefinição, clique no link abaixo.

			<a href='http://rotadanoite.com.br/processa-forgot?token=" . $_SESSION['token'] . "'>Recuperar senha</a>

			Caso você não tenha feito essa solicitação, pode ignorar esse e-mail. A redefinição de senha pode ser feita por qualquer pessoa e não indica que sua conta está correndo perigo de ser acessada por outra pessoa.<br><br>

			Esse processo é desenvolvido para garantir a privacidade e a segurança das informações da sua conta. Se você tiver alguma pergunta, entre contato conosco. Obrigado por nossos serviços.<br><br>

			Atenciosamente,<br>
			Rota da Noite";

		$email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

		if(mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))
		{
			$_SESSION['ok'] = "<div class='alert alert-success'>Em menos de 10 minutos chegará um link de alteração de senha no seu e-mail!</div>";
		    header("location: forgot");
		    exit;
		}

		else
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>Erro, entre em contato e informe seu problema.</div>";
		    header("location: forgot");
		    exit;
		}
	}

	else
	{
		$_SESSION['error'] = "<div class='alert alert-danger'>E-mail não cadastrado.</div>";
	    header("location: forgot");
	    exit;
	}
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Rota da Noite</title>

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css" media="screen">
		
		<!-- STYLESHEET -->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="stylesheet" type="text/css" href="css/reset.css">

	</head>

	<body class="bg-login">
		<div class="container-fluid">
			<div class="row align-items-center" style="height: 100vh">
				<div class="col-xs-12 col-md-5 mx-auto d-inline rounded box-form">
					<div class="col-xs-12 form-login">
						<?php
						if(isset($_SESSION['error']))
						{
							echo $_SESSION['error'];
							unset ($_SESSION['error']);
						}

						if(isset($_SESSION['ok']))
						{
							echo $_SESSION['ok'];
							unset ($_SESSION['ok']);
						}
						?>

						<div class="col-md-12 text-left mt-5 mb-3 pl-0">
							<h2>Recuperar senha</h2>
						</div>

						<form action="#" method="POST">
							<div class="form-group">
								<input class="form-control" type="text" name="email_forgot" placeholder="E-mail">
							</div>
						
						<div class="row">
							<p class="mt-2 ml-3"><a href="index">Voltar</a></p>

							<button type="submit" name="recuperar" value="recuperar" class="btn btn-primary mb-3 ml-auto mr-3">RECUPERAR</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<!-- SCRIPT -->

		<script src="js/jquery.min.js"></script>

		<script src="js/bootstrap.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>