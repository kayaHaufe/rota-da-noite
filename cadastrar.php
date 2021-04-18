<?php
session_start();
include_once 'db/conection.php';

// CONDIÇÕES PARA CADASTRAR
if($_POST['confirmasenha'] == $_POST['senha'])
{
	if($_POST['fisica'])
	{
		// CONSULTA FK CD_CLIENTE
		$cd_cliente_cupom = mysqli_query($link,
		    "SELECT MAX(cd_cliente) + 1 FROM tb_cliente");
		$row = mysqli_fetch_row($cd_cliente_cupom);
		$cd_cliente_cupom = $row[0];

		// CUPOM
		$cr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$max = strlen($cr)-1;
		$gera = null;
		for($i=0; $i < 2; $i++) {
		$gera .= $cr{mt_rand(0, $max)};
		}
		$gera = str_split($gera, 2);
		$cupom = $gera[0] . $cd_cliente_cupom;

		// PEGA OS VALORES
		$nome = ucwords(trim($_POST['nome']));
		$cpf = trim($_POST['cpf']);
		$tcelular = trim($_POST['tcelular']);
		$tresidencial = trim($_POST['tresidencial']);
		$email = strtolower(trim($_POST['email']));
		$senha = trim($_POST['senha']);
		$criptografada = password_hash($senha, PASSWORD_BCRYPT);

		// VERIFICA SE O CPF JÁ FOI CADASTRADO
		$result = mysqli_query($link,
			"SELECT cd_cpf FROM tb_pessoa_fisica WHERE cd_cpf = '$cpf'");

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>CPF já cadastrado.</div>";
			header("location: cadastro");
			exit;
		}

		// VERIFICA SE O E-MAIL JÁ FOI CADASTRADO
		$result = mysqli_query($link,
			"SELECT nm_email FROM tb_cliente WHERE nm_email = '$email'");

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>E-mail já cadastrado.</div>";
			header("location: cadastro");
			exit;
		}

		// INSERE
		$sql2 = mysqli_query($link,
		"INSERT INTO tb_pessoa_fisica
			(cd_cpf)
			VALUES
			('$cpf')");

		// CONSULTA FK CD_PESSOA_FISICA
		$dados = mysqli_query($link,
		"SELECT cd_pessoa_fisica FROM tb_pessoa_fisica WHERE cd_cpf = '" . $cpf . "'");

		$consulta = mysqli_fetch_array($dados);

		$cd_pessoa_fisica = $consulta['cd_pessoa_fisica'];

		$sql = mysqli_query($link,
		"INSERT INTO tb_cliente
			(ic_tipo, nm_cliente, nm_email, cd_senha, cd_pessoa_fisica, cd_pessoa_juridica, cd_cupom)
		VALUES
			('fisica', '$nome', '$email', '$criptografada', '$cd_pessoa_fisica', '0', '$cupom')");

		// CONSULTA FK CD_CLIENTE
		$dados2 = mysqli_query($link,
		"SELECT cd_cliente FROM tb_cliente WHERE nm_email = '" . $_POST['email'] . "'");

		$consulta = mysqli_fetch_array($dados2);

		$cd_cliente = $consulta['cd_cliente'];

		$sql3 = mysqli_query($link,
		"INSERT INTO tb_contato
			(cd_telefone, cd_celular, cd_cliente)
			VALUES
			('$tresidencial', '$tcelular', '$cd_cliente')");

		if($sql && $sql2 && $sql3)
		{
		 	$_SESSION['user'] = $nome;
		 	$_SESSION['cd_cliente'] = $cd_cliente;
			header('location: index');

		// EMAIL BEM-VINDO
		$email_remetente = "empresarotadanoite@gmail.com";
		$email_destinatario = "$email";
		$email_reply = "$email";
		$email_assunto = "Seja Bem-Vindo";

		$email_conteudo = "<a href='http://rotadanoite.com.br' align'center'><img src='http://rotadanoite.com.br/img/icon/logotipo/logo.jpg' alt='Logo Rota da Noite'></a>
		Olá,<br>
		<justify>Seja bem-vindo ao Rota da Noite, um site que te mostrará os melhores eventos que estão ocorrendo!</justify><br><br>
		<a href='http://rotadanoite.com.br/eventos'>
			<center><b><h2>Veja agora &rarr;</b></h2></center>
		</a><br><br>

		<center><h1>Você também pode divulgar!</h1><br><br>
		Possui um evento importante que precisá ser divulgado?<br>
		Desde um campeonato de Game até uma Feira de Exposição?<br>
		Não perca seu tempo, comece agora mesmo.</center><br><br>

		<a href='http://rotadanoite.com.br/cad-eventos'>
			<center><h2><b>Divulgar um evento &rarr;</b></h2></center>
		</a><br><br>

			Atenciosamente,<br>
			Rota da Noite";

		$email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
		}

		else
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>Preencha os campos corretamente.</div>";
			header("location: cadastro");
			exit;
		}
	}

	// PESSOA JURIDICA
	else if($_POST['juridica'])
	{
		// PEGA OS VALORES
		$nome = ucwords(trim($_POST['nome']));
		$tcelular = trim($_POST['tcelular']);
		$tresidencial = trim($_POST['tresidencial']);
		$email = strtolower(trim($_POST['email']));
		$senha = trim($_POST['senha']);
		$criptografada = password_hash($senha, PASSWORD_ARGON2I);
		$situacao = $_POST['situacao'];
		$cnpj = trim($_POST['cnpj']);
		$insc_est = trim($_POST['insc_est']);



		// VERIFICA SE O CNPJ/INSC.EST. JÁ FOI/FORAM CADASTRADO(S)
		$result3 = mysqli_query($link,
			"SELECT cd_cnpj, cd_inscricao_estadual FROM tb_pessoa_juridica WHERE cd_cnpj = '$cnpj' OR cd_inscricao_estadual = '$insc_est'");

		if(mysqli_fetch_assoc($result3))
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>CNPJ ou Inscrição Estadual já cadastrados.</div>";
			header("location: cadastro");
			exit;
		}

		// VERIFICA SE O E-MAIL JÁ FOI CADASTRADO
		$result = mysqli_query($link,
			"SELECT nm_email FROM tb_cliente WHERE nm_email = '$email'");

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>E-mail já cadastrado.</div>";
			header("location: cadastro");
			exit;
		}

		// INSERE
		$sql3 = mysqli_query($link,
		"INSERT INTO tb_situacao
		(nm_situacao)
		VALUES
		('$situacao')");

		// CONSULTA FK CD_SITUACAO
		$cd_situacao = mysqli_query($link,
		    "SELECT MAX(cd_situacao) FROM tb_situacao");
		$row = mysqli_fetch_row($cd_situacao);
		$cd_situacao = $row[0];

		$sql2 = mysqli_query($link,
		"INSERT INTO tb_pessoa_juridica
		(cd_cnpj, cd_inscricao_estadual, cd_situacao)
		VALUES
		('$cnpj', '$insc_est', '$cd_situacao')");

		// CONSULTA FK CD_PESSOA_JURIDICA
		$dados = mysqli_query($link,
		"SELECT cd_pessoa_juridica FROM tb_pessoa_juridica WHERE cd_cnpj = '" . $cnpj . "'");

		$consulta = mysqli_fetch_array($dados);

		$cd_pessoa_juridica = $consulta['cd_pessoa_juridica'];

		$sql = mysqli_query($link,
		"INSERT INTO tb_cliente
		(ic_tipo, nm_cliente, nm_email, cd_senha, cd_pessoa_fisica, cd_pessoa_juridica)
		VALUES
		('juridica', '$nome', '$email', '$criptografada', '0', '$cd_pessoa_juridica')");

		// CONSULTA FK CD_CLIENTE
		$dados2 = mysqli_query($link,
		"SELECT cd_cliente FROM tb_cliente WHERE nm_email = '" . $_POST['email'] . "'");

		$consulta = mysqli_fetch_array($dados2);

		$cd_cliente = $consulta['cd_cliente'];

		$sql4 = mysqli_query($link,
		"INSERT INTO tb_contato
		(cd_telefone, cd_celular, cd_cliente)
		VALUES
		('$tresidencial', '$tcelular', '$cd_cliente')");

		if($sql && $sql2 && $sql3 && $sql4)
		{
		 	$_SESSION['user'] = $nome;
		 	$_SESSION['cd_cliente'] = $cd_cliente;
			header('location: index');

		// EMAIL BEM-VINDO
		$email_remetente = "empresarotadanoite@gmail.com";
		$email_destinatario = "$email";
		$email_reply = "$email";
		$email_assunto = "Seja Bem-Vindo";

		$email_conteudo = "<a href='http://rotadanoite.com.br' align'center'><img src='http://rotadanoite.com.br/img/icon/logotipo/logo.jpg' alt='Logo Rota da Noite'></a>
		Olá,<br>
		<justify>Seja bem-vindo ao Rota da Noite, um site que te mostrará os melhores eventos que estão ocorrendo!</justify><br><br>
		<a href='http://rotadanoite.com.br/eventos'>
			<center><b><h2>Veja agora &rarr;</b></h2></center>
		</a><br><br>

		<center><h1>Você também pode divulgar!</h1><br><br>
		Possui um evento importante que precisá ser divulgado?<br>
		Desde um campeonato de Game até uma Feira de Exposição?<br>
		Não perca seu tempo, comece agora mesmo.</center><br><br>

		<a href='http://rotadanoite.com.br/cad-eventos'>
			<center><h2><b>Divulgar um evento &rarr;</b></h2></center>
		</a><br><br>

			Atenciosamente,<br>
			Rota da Noite";

		$email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
		}

		else
		{
			$_SESSION['error'] = "<div class='alert alert-danger'>Preencha os campos corretamente.</div>";
			header("location: cadastro");
			exit;
		}
	}

	else
	{
	
			$_SESSION['error'] = "<div class='alert alert-danger'>Erro, tente novamente.</div>";
			header("location: cadastro");
			exit;
	}
}

else
{
	$_SESSION['error'] = "<div class='alert alert-danger'>As senhas não coincidem.</div>";
	header("location: cadastro");
	exit;
}

?>