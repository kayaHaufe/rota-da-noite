<?php
date_default_timezone_set('America/Sao_Paulo');
include 'db/conection.php';
session_start();

$email_forgot = $_SESSION['email_forgot'];

if(isset($_GET['token']))
{
	if(isset($_POST['recuperar']) && ($_POST['recuperar'] == "recuperar"))
	{
		$pass = $_POST['new_pass'];
		$new_pass = password_hash($pass, PASSWORD_BCRYPT);

		if($_SESSION['expira'] < date('Y-m-d H:i:s'))
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>O código de alteração de senha expirou.</div>";
		    header("location: forgot");
		    exit;
		}

		else
		{
			$update = mysqli_query($link,
			"UPDATE tb_cliente SET cd_senha = '$new_pass'
			WHERE nm_email = '$email_forgot'");

			if($update)
			{
				unset($_SESSION['token']);
				$_SESSION['ok'] = "<div class='alert alert-success'>Senha alterada com sucesso!</div>";
			    ?><script>history.back();</script>
		            <?php
		        exit;
			}

			else
			{
			    $_SESSION['error'] = "<div class='alert alert-danger'>Erro, entre em contato e informe seu problema.</div>";
			    ?><script>history.back();</script>
		            <?php
		        exit;
			}
		}
	}
}

else
{
	$_SESSION['error'] = "<div class='alert alert-danger'>Você não possui um link de recuperação de senha.</div>";
	header("location: forgot");
	exit;	
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
							<h2>Digite a nova senha</h2>
						</div>

						<form action="#" method="POST">
							<div class="form-group">
								<input class="form-control" type="password" name="new_pass" placeholder="Nova senha" minlength="6">
							</div>
						
						<div class="row">
							<p class="mt-2 ml-3"><a href="index">Página inicial</a></p>

							<button type="submit" name="recuperar" value="recuperar" class="btn btn-primary mb-3 ml-auto mr-3">CONFIRMAR</button>
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