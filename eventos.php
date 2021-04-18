<?php include 'header.php' ?>
<link rel="stylesheet" href="css/lightbox.min.css">
<?php
date_default_timezone_set('America/Sao_Paulo');

if(isset($_SESSION['ok']))
{
	?>
	<div class="modal" tabindex="-1" role="dialog" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-success">Evento criado com sucesso!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Seu evento está <span class="text-primary">em análise</span>, será publicado assim que verificarmos as informações.</p>
	        	<img class="mb-3 img-fluid w-100 tablet-mobile" src="img/galeria/2.jpg" >
	      </div>

	      <div class="modal-footer">
	      	<div class="mr-auto">
	        <a href="https://www.facebook.com/empresarotadanoite/" target="_blank">
				<img src="img/icon/face.png" alt="Facebook" class="img-fluid opc mr-2" width="30px">
			</a>

			<a href="https://wa.me/5513982084063?text=Olá%20equipe%20Rota%20da%20Noite" target="_blank">
				<img src="img/icon/whats.png" alt="WhatsApp" class="img-fluid opc" width="30px">
			</a>
			</div>

			<p class="mt-3 mr-auto">Agradecemos a preferência.</p>

	        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php
	unset ($_SESSION['ok']);
}
?>
</div>
		<div class="ml-auto row container-fluid agenda row-agenda">



<?php
include 'db/conection.php';

// PÁGINAÇÃO
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

$consulta = "SELECT * FROM tb_evento";

$query = mysqli_query($link, $consulta);

// Total de linhas retornadas
$total = mysqli_num_rows($query);

// Limite por pág
$qt = 6;

// Qt páginas necessárias
$num = ceil($total/$qt);

// Ínicio da visualização
$inicio = ($qt*$pagina)-$qt;

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
		ON c.cd_uf = u.cd_uf
	ORDER BY cd_evento DESC
		LIMIT $inicio, $qt");

if(mysqli_num_rows($consulta) !== 0)
{
while($row = mysqli_fetch_assoc($consulta))
{
	$cd_evento = $row['cd_evento'] . "img";
	$img = mysqli_query($link,
		"SELECT nm_imagem FROM tb_evento
		WHERE nm_imagem LIKE '$cd_evento%'");

	if(mysqli_num_rows($img) !== 0)
	{
		$nm = mysqli_fetch_array($img);
		$nm = $nm['nm_imagem'];
		?>
		<div class="col-xs-12 col-md-4 mt-5 mx-auto">
		<div class="card card-agenda">
			<a href="img/eventos/<?php echo $nm ?>" data-lightbox="example-set" data-title="<?php echo $row['nm_evento']; ?>">
				<img src="img/eventos/<?php echo $nm ?>" class="card-img-top img-card img-responsive zoom">
			</a>
	<?php
	}

	else
	{
		?>
		<div class="col-xs-12 col-md-4 mt-5">
		<div class="card card-agenda">
			<a href="img/galeria/pattern.png" data-lightbox="example-set" data-title="<?php echo $row['nm_evento']; ?>">
				<img src="img/galeria/pattern.png" class="card-img-top img-card img-responsive zoom grayscale">
			</a>
	<?php
	}
?>

		<div class="card-body">
			<h3 class="card-title text-center">
				<?php
					echo $row['nm_evento'];
				?>
			</h3>

			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<div>
						<img src="img/icon/segment.svg" class="img-responsive icon-agenda">
					</div>
					<div class="col-md-10 ml-5">
						<p>
						<?php
							echo $row['nm_organizador'] . " - " . $row['nm_segmento'];
						?>
						</p>
					</div>
				</li>

				<li class="list-group-item">
					<div>
						<img src="img/icon/calendar.svg" class="img-responsive icon-agenda">
					</div>
					<div class="col-md-10 ml-5">
						<p>
						<?php
						if($row['dt_inicio'] == $row['dt_termino'])
						{
							if(date('i', strtotime($row['hr_inicio'])) == 0)
							{
								echo date('d/m/Y', strtotime($row['dt_inicio'])) . " das " . date('H', strtotime($row['hr_inicio'])) . "h";

								if(date('i', strtotime($row['hr_termino'])) == 0)
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h";
								}

								else
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h" . date('i', strtotime($row['hr_termino']));
								}
							}

							else
							{
								echo date('d/m/Y', strtotime($row['dt_inicio'])) . " das " . date('H', strtotime($row['hr_inicio'])) . "h" . date('i', strtotime($row['hr_inicio']));

								if(date('i', strtotime($row['hr_termino'])) == 0)
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h";
								}

								else
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h" . date('i', strtotime($row['hr_termino']));
								}
							}
						}

						// DIFFERENT DATES
						else
						{
							if(date('i', strtotime($row['hr_inicio'])) == 0)
							{
								echo "De " . date('d/m/Y', strtotime($row['dt_inicio'])) . " a " . date('d/m/Y', strtotime($row['dt_termino'])) . " das " . date('H', strtotime($row['hr_inicio'])) . "h";

								if(date('i', strtotime($row['hr_termino'])) == 0)
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h";
								}

								else
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h" . date('i', strtotime($row['hr_termino']));
								}
							}

							else
							{
								echo "De " . date('d/m/Y', strtotime($row['dt_inicio'])) . " a " . date('d/m/Y', strtotime($row['dt_termino'])) . " das " . date('H', strtotime($row['hr_inicio'])) . "h" . date('i', strtotime($row['hr_inicio']));

								if(date('i', strtotime($row['hr_termino'])) == 0)
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h";
								}

								else
								{
									echo " às " . date('H', strtotime($row['hr_termino'])) . "h" . date('i', strtotime($row['hr_termino']));
								}
							}
						}

						?>
						</p>
					</div>
				</li>

				<li class="list-group-item">
					<div>
						<img src="img/icon/value.svg" class="img-responsive icon-agenda">
					</div>
					<div class="col-md-10 ml-5 ml-5">
						<p>
						<?php
							if(isset($row['vl_unico']))
							{
								$vl_unico = str_replace(".", ",", $row['vl_unico']);

								if($vl_unico <= 0)
								{
									echo "Gratuito";
								}
								else
								{
									echo "R$" . $vl_unico;	
								}
							}

							else if(isset($row['vl_mulher']) && empty($row['vl_vip']))
							{
								$vl_mulher = str_replace(".", ",", $row['vl_mulher']);
								$vl_homem = str_replace(".", ",", $row['vl_homem']);

								if(($vl_homem <= 0) && ($vl_mulher <= 0))
								{
									echo "Gratuito";
								}

								else
								{
									echo "Homem: R$" . $vl_homem . "<br>Mulher: R$" . $vl_mulher;
								}
							}

							else if(isset($row['vl_vip']))
							{
								$vl_mulher = str_replace(".", ",", $row['vl_mulher']);
								$vl_homem = str_replace(".", ",", $row['vl_homem']);
								$vl_vip = str_replace(".", ",", $row['vl_vip']);

								if(($vl_homem <= 0) && ($vl_mulher <= 0) && ($vl_vip <= 0))
								{
									echo "Gratuito";
								}

								else
								{
									echo "Homem: R$" . $vl_homem . "<br>Mulher: R$" . $vl_mulher . "<br>Vip: R$ " . $vl_vip;
								}
							}
						?>
						</p>
					</div>
				</li>

				<li class="list-group-item">
					<div>
						<img src="img/icon/notes.svg" class="img-responsive icon-agenda">
					</div>
								
					<div class="col-md-10 ml-5">
						<p>
						<?php
							if($row['cd_faixa_etaria'] <= 0)
							{
								echo "Todas as idades são permitidas.";
							}

							else if($row['cd_faixa_etaria'] == 1)
							{
								echo "A partir de 1 ano";
							}

							else
							{
								echo "A partir de " . $row['cd_faixa_etaria'] . " anos";
							}

							if(isset($row['ds_evento']))
							{
								echo "<br>" . $row['ds_evento'];
							}
						?>

						<?php
							
						?>
						</p>
					</div>

				<li class="list-group-item">
					<div>
						<img src="img/icon/maps.svg" class="img-responsive icon-agenda">
					</div>
								
					<div class="col-md-10 ml-5 mb-0 pb-0">
						<p class="text-justify">
						<?php
							echo $row['nm_rua'] . ", " . $row['cd_numero'] . "<br>" . $row['nm_bairro'] . " - " . $row['nm_cidade'] . ", " . $row['sg_uf'];
						?>										
						</p>
						<br>
					</div>
				</li>					
			</ul>
		</div>
	</div>
</div>

<?php

} }

else
{
	?>
	<div class="text-center mx-auto">
		<h2 class="h2">Nenhum evento atualmente,</h2>
		<h2 class="h2 text-primary">
			<a href="cad-eventos" class="text-primary">Clique aqui e cadastre o seu!</a>
		</h2>
	</div>
	<?php
}

$anterior = $pagina - 1;
$posterior = $pagina + 1;

?></div>
			<div class="row">
				<div class="mx-auto mt-5">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item">
				    <?php
				   	if($anterior != 0){ ?>
				      <a class="page-link" href="eventos.php?pagina=<?php echo $anterior; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    <?php } ?>
				    </li>

				    <?php
				   	for($i = 1; $i < $num + 1; $i++)
				   	{?>
						<li class="page-item"><a class="page-link" href="eventos.php?pagina=<?php echo $i; ?>">
							<?php echo $i; ?>
						</a></li>
					<?php } ?>
				    <li class="page-item">
				    <?php
				   	if($posterior <= $num){ ?>
				      <a class="page-link" href="eventos.php?pagina=<?php echo $posterior; ?>" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
				      </a>
				    <?php } ?>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>

<script src="js/lightbox.min.js"></script>
<?php include 'footer.php' ?>

<script>
$(function(){
    $('#myModal').modal('show');
});
</script>