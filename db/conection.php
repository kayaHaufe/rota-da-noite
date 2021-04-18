<?php
$link = mysqli_connect("localhost:3306", "root", "", "db_rotadanoite");
mysqli_set_charset($link, 'utf8');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// CONSULTA EVENTOS
$consulta = mysqli_query($link,
"SELECT * FROM tb_evento AS e
	JOIN tb_segmento AS s
		ON e.cd_segmento = s.cd_segmento
	JOIN tb_logradouro as l
		ON e.cd_logradouro = l.cd_logradouro
	JOIN tb_bairro as b
		ON l.cd_bairro = b.cd_bairro
	JOIN tb_cidade as c
		ON b.cd_cidade = c.cd_cidade
	JOIN tb_uf as u
		ON c.cd_uf = u.cd_uf");

while($row = mysqli_fetch_assoc($consulta))
{
	$cd_evento = $row['cd_evento'];
	// DEL EVENTOS PASSADOS
	if(date('Y-m-d') > $row['dt_termino'])
	{
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
	}
}

// echo "SUCESSO ao conectar-se com a base de dados MySQL." . PHP_EOL;