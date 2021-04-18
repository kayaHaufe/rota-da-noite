<?php include 'header-painel.php' ?>
<div class="container-fluid mx-auto">
		<div class="row">
			<div class="termos">
				<img src="img/icon/panel.svg" class="img-fluid d-block mx-auto" width="60px" style="padding-top: 150px;">
				<p class="h1 text-center mt-5">Alterar evento</p>
			</div>
		</div>

<form action="processa-alt" method="POST" enctype="multipart/form-data">

<?php
date_default_timezone_set('America/Sao_Paulo');

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

$cd_evento = base64_decode($_GET['id']);

$_SESSION['cd_evento'] = $cd_evento;

$min = date("Y-m-d");
$max = date("Y-m-d", strtotime("+1 year"));
$atual = date("Y-m-d");

// CONSULTA EVENTOS
$consulta = mysqli_query($link,
"SELECT * FROM tb_evento AS e
	JOIN tb_cliente as cl
		ON cl.cd_cliente = e.cd_cliente
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
			WHERE e.cd_evento = $cd_evento");

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
		<div class="container mt-5">
			<div class="cad-eventos">
				<!-- IMG E NOME -->
				<h2>Imagem e nome do evento</h2>

				<div class="form-group mx-auto">
					<select class="form-control slt" onchange="displayFormAltImg(this)" name="img" required data-rule-required="true">
						">
						<option value="<?php echo $nm ?>" selected>Manter Banner</option>
						<option value="img">Novo banner</option>
						<option value="noimg">Sem banner</option>
					</select>
				</div>

				<div id="noimg"></div>

				<div id="img" class="form-group" style="display: none;">
				    <input type="file" class="form-control-file" name="arquivo">

				    <div class="col rounded text-center mt-2" style="background-color: lightgrey;">
				    	<span style="font-size: 0.8em;">
				    	A imagem escolhida deve estar em formato JPG, JPEG, GIF ou PNG e ter no máximo 2MB. A dimensão recomendada é de 500 x 300 pixels. Imagens com altura ou largura diferentes destas podem ser redimensionadas.
				   		</span>
				   	</div>
				</div>
	<?php
	}

	else
	{ ?>
		<div class="container mt-5">
			<div class="cad-eventos">
				<!-- IMG E NOME -->
				<h2>Imagem e nome do evento</h2>

				<div class="form-group mx-auto">
					<select class="form-control slt" onchange="displayFormImg(this)" name="img" required data-rule-required="true">
						">
						</option>
						<option value="noimg" selected>Sem banner</option>
						<option value="img">Com banner
					</select>
				</div>

				<div id="noimg"></div>

				<div id="img" class="form-group" style="display: none;">
				    <input type="file" class="form-control-file" name="arquivo">

				    <div class="col rounded text-center mt-2" style="background-color: lightgrey;">
				    	<span style="font-size: 0.8em;">
				    	A imagem escolhida deve estar em formato JPG, JPEG, GIF ou PNG e ter no máximo 2MB. A dimensão recomendada é de 500 x 300 pixels. Imagens com altura ou largura diferentes destas podem ser redimensionadas.
				   		</span>
				   	</div>
				</div>
	<?php
	}

?>
				<div class="form-row">
					<div class="form-group mx-auto col-md-6">
						<input class="form-control mt-3" type="text" name="nm_evento" maxlength="50" required placeholder="Título do evento" value="<?php
					echo $row['nm_evento'];
				?>"></input>
					</div>

					<div class="form-group mx-auto col-md-6">
						<input class="form-control mt-3" type="text" name="organizador" maxlength="50" required placeholder="Organizador" value="<?php
					echo $row['nm_organizador'];
				?>"></input>
					</div>
				</div>

					<!-- DATA E HORA -->
					<h2 class="mt-3">Data e hora do evento</h2>

					
				<div class="form-row">
				<div class="col-md-6">
					<!-- ÍNICIO -->
					<span><b>Ínicio</b></span>
					<div class="form-group">
						<input class="form-control" type="date" name="dt_inicio" value="<?php echo $row['dt_inicio']; ?>" min="<?php echo $min; ?>" max="<?php echo $max; ?>" required placeholder="Data do evento";
				?></input>
					</div>

					<div class="form-group">
						<input class="form-control col-md-12" type="time" name="hr_inicio" value="<?php
					echo $row['hr_inicio'];
				?>"></input>
					</div>
				</div>

				<div class="col-md-6">
					<!-- TÉRMINO -->
					<span><b>Término</b></span>
					<div class="form-group">
						<input class="form-control" type="date" name="dt_termino" value="<?php echo $row['dt_termino']; ?>" min="<?php echo $min; ?>" max="<?php echo $max; ?>" required placeholder="Data do evento"></input>
					</div>

					<div class="form-group">
						<input class="form-control col-md-12" type="time" name="hr_termino" value="<?php
					echo $row['hr_termino'];
				?>"></input>
					</div>
				</div>
				</div>

					<!-- ENDEREÇO -->
					<h2 class="mt-3">Endereço do evento</h2>

				<div id="presencial" data-cid="presencial">
				<div class="form-row">
					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="cep" id="cep" maxlength="12" required placeholder="CEP do evento" value="<?php
					echo $row['cd_cep'];
				?>"></input>
					</div>

					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="rua" id="rua" required placeholder="Rua do evento" value="<?php
					echo $row['nm_rua'];
				?>"></input>
					</div>

					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="num" id="num" required placeholder="N°" value="<?php
					echo $row['cd_numero'];
				?>"></input>
					</div>
				</div>
				

				<div class="form-row">
					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="bairro" id="bairro" required placeholder="Bairro" value="<?php
					echo $row['nm_bairro'];
				?>"></input>
					</div>

					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="cidade" maxlength="32" id="cidade" required placeholder="Cidade" value="<?php
					echo $row['nm_cidade'];
				?>"></input>
					</div>

					<div class="form-group mx-auto col-md-4">
						<input class="form-control" type="text" name="uf" id="uf" maxlength="2" required placeholder="Estado" value="<?php
					echo $row['sg_uf'];
				?>"></input>
					</div>
				</div></div>

					<!-- DESCRIÇÃO -->
					<h2 class="mt-3">Descrição do evento</h2>
					<div class="form-row">
						<div class="form-group col-md-6 mx-auto">
							<input class="form-control" type="text" id="faixa" name="faixa" maxlength="3" required placeholder="Faixa etária" value="<?php
					echo $row['cd_faixa_etaria'];
				?>"></input>
						</div>

						<div class="form-group col-md-6 mx-auto">
						  <select class="form-control slt" required name="segmento" id="segmento">
						    <option value="<?php
					echo $row['nm_segmento']; ?>"><?php
					echo $row['nm_segmento']; ?></option>
						    <option value="cinema ou teatro">Cinema ou teatro</option>
						    <option value="encontro, networking">Encontro, networking</option>
						    <option value="feira, exposição">Feira, exposição</option>
						    <option value="gastronômico">Gastronômico</option>
						    <option value="show, música e festa">Show, música e festa</option>
						    <option value="tabacaria">Tabacaria</option>
						    <option value="outros">Outros</option>
						  </select>
						</div>
					</div>

					<div class="form-group mx-auto">
						<select class="form-control slt" onchange="displayFormEv(this)" name="valor" required data-rule-required="true">
							<option value="">Tipo de valor</option>
							<option value="unico">Valor único</option></a>
							"><option value="sexo">Valor por sexo</option></a>
							<option value="vip">Valor por sexo + VIP</option></a>
						</select>
					</div>

					<!-- ÚNICO -->
					<div id="unico" class="form-group mx-auto" style="display: none;" id="unico" data-cid="unico">
						<div class="form-group mx-auto">
							<div class="input-group">
						        <div class="input-group-prepend">
						          <div class="input-group-text">R$</div>
						        </div>
								<input class="form-control real slt" type="text" id="unico" name="unico" placeholder="Valor único" value="<?php
									echo $row['vl_unico'];
								?>">
							</div>
						</div>
					</div>

					<!-- POR SEXO -->
					<div id="sexo" class="form-group mx-auto sexo" data-cid="sexo" style="display: none;">
						<div class="form-row">
							<div class="form-group mx-auto col-lg-6">
								<div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text">R$</div>
							        </div>
									<input class="form-control real slt" type="text" name="homem" placeholder="Homem" value="<?php
										echo $row['vl_homem'];
									?>">
								</div>
							</div>

							<div class="form-group mx-auto col-lg-6">
								<div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text">R$</div>
							        </div>
									<input class="form-control real slt" type="text" name="mulher" placeholder="Mulher" value="<?php
										echo $row['vl_mulher'];
									?>">
								</div>
							</div>
						</div>
					</div>

					<!-- VIP -->
					<div id="vip" class="form-group mx-auto vip" data-cid="vip" style="display: none;">
						<div class="form-row">
							<div class="form-group mx-auto col-lg-4">
									<div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text">R$</div>
							        </div>
									<input class="form-control real slt" type="text" name="homem2" placeholder="Homem" value="<?php
										echo $row['vl_homem'];
									?>">
								</div>
							</div>

							<div class="form-group mx-auto col-lg-4">
								<div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text">R$</div>
							        </div>
									<input class="form-control real slt" type="text" name="mulher2" placeholder="Mulher" value="<?php
										echo $row['vl_mulher'];
									?>">
								</div>
							</div>

							<div class="form-group mx-auto col-lg-4">
								<div class="input-group">
							        <div class="input-group-prepend">
							          <div class="input-group-text">R$</div>
							        </div>
									<input class="form-control real slt" type="text" name="vip" placeholder="VIP" value="<?php
										echo $row['vl_vip'];
									?>">
								</div>
							</div>
						</div>
					</div>
					<!--  -->

					<div class="form-group mx-auto mb-3">
						<textarea class="form-control" id="desc" rows="2" maxlength="100" placeholder="Informações adicionais (Max: 100 caracteres)" name="desc" value="<?php
					echo $row['ds_evento'];
				?>"></textarea>	
					</div>

					<div class="mb-5">
						<button type="submit" value="alterar" class="btn btn-success">ALTERAR</button>

						<a href="painel">
							<button type="button" value="excluir" class="btn btn-secondary">CANCELAR</button>
						</a>
					</div>
			</div>
		</div>
	</div>
<?php } ?>
</form>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	  <script type="text/javascript">

        $(document).ready(function() {
        	
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {
            	
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

        $(document).ready(function(){
        	$(".real").mask("999.999.990,00", {reverse: true})
        	$("#cep").mask("00000000")
        	$("#faixa").mask("000")
        	$("#num").mask("0000000")
        })

    </script>