<?php
session_start();

include_once 'db/conection.php';

$result = mysqli_query($link,
	"SELECT * FROM tb_cliente WHERE nm_email = '" . $_POST['email'] . "'");

$dados = mysqli_query($link,
	"SELECT nm_cliente, cd_senha, cd_cliente FROM tb_cliente WHERE nm_email = '" . $_POST['email'] . "'");

$consulta = mysqli_fetch_array($dados);

if(mysqli_fetch_assoc($result))
{
	if(password_verify($_POST['psw'], $consulta['cd_senha']))
	{
		$_SESSION['user'] = $consulta['nm_cliente'];
		header("location: index");
		$_SESSION['cd_cliente'] = $consulta['cd_cliente'];
	}

	else
	{
		echo "<script>alert('Senha inválida, tente novamente.');
		history.back();</script>";
	}
}

else
{
	echo "<script>alert('E-mail inválido, tente novamente.');
	history.back();</script>";
}

?>