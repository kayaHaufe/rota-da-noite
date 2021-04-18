<?php
include_once 'db/conection.php';

session_start();

if(empty($_SESSION['user']))
{
	header("location: cadastro");
	exit;
}

$cd_evento = base64_decode($_GET['id']);

// DELETA EVENTOS
$delete = mysqli_query($link,
"DELETE FROM tb_evento, tb_segmento, tb_logradouro, tb_bairro, tb_cidade, tb_uf
	USING tb_evento
	JOIN tb_segmento
		ON tb_evento.cd_segmento = tb_segmento.cd_segmento
	JOIN tb_logradouro
		ON tb_evento.cd_logradouro = tb_logradouro.cd_logradouro
	JOIN tb_bairro
		ON tb_logradouro.cd_bairro = tb_bairro.cd_bairro
	JOIN tb_cidade
		ON tb_bairro.cd_cidade = tb_cidade.cd_cidade
	JOIN tb_uf
		ON tb_cidade.cd_uf = tb_uf.cd_uf
			WHERE tb_evento.cd_evento = $cd_evento");

if($delete)
{
   $_SESSION['ok'] = "<div class='alert alert-success'>Evento excluido com sucesso!</div>";
        header("location: painel");
        exit;
}

else
{
    $_SESSION['error'] = "<div class='alert alert-danger'>Erro ao excluir, tente novamente.</div>";
        header("location: painel");
        exit;
}