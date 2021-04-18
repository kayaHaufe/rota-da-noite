<?php include 'header-painel.php' ?>
<link rel="stylesheet" href="css/lightbox.min.css">
<div class="container-fluid mx-auto">
        <div class="row">
            <div class="termos">
                <img src="img/icon/panel.svg" class="img-fluid d-block mx-auto" width="60px" style="padding-top: 150px;">
                <p class="h1 text-center mt-5">Excluir evento</p>
            </div>
        </div>

<form action="processa-excluir" method="POST">

<?php

date_default_timezone_set('America/Sao_Paulo');

$cd_evento = base64_decode($_GET['id']);

$_SESSION['cd_evento'] = $cd_evento;

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
        <div class="col-xs-12 col-md-4 mt-5 mx-auto">
        <div class="card card-agenda">
            <a href="img/eventos/<?php echo $nm ?>" data-lightbox="example-set" data-title="<?php echo $row['nm_evento']; ?>">
                <img src="img/eventos/<?php echo $nm ?>" class="card-img-top img-card img-responsive">
            </a>
    <?php
    }

    else
    {
        ?>
        <div class="col-xs-12 col-md-4 mt-5 mx-auto">
        <div class="card card-agenda">
            <a href="img/galeria/pattern.png" data-lightbox="example-set" data-title="<?php echo $row['nm_evento']; ?>">
                <img src="img/galeria/pattern.png" class="card-img-top img-card img-responsive">
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
                    </div></li></li></ul></div>

                <div class="mx-auto mb-3">
                <?php
                    $cd_evento = base64_encode($row['cd_evento']);
                ?>
                <a href="painel">
                    <button type="button" value="excluir" class="btn btn-secondary">CANCELAR</button>
                </a>

                <button type="button" value="excluir" class="btn btn-danger" data-toggle="modal" data-target="#excluir-ev">EXCLUIR</button>

                <!-- Modal -->
                <div class="modal fade" id="excluir-ev" tabindex="-1" role="dialog" aria-labelledby="excluir-evLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="excluir-evLabel">EXCLUIR EVENTO?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Caso exclua o evento, a ação não poderá ser desfeita.</p>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                        <a href="processa-excluir.php?id=<?php echo $cd_evento ?>">
                            <button type="button" value="alterar" class="btn btn-danger">EXCLUIR</button>
                        </a>
                     </div>
                    </div>
                </div>
            </div></div></li>
        </div>
    </div>
</div>
<?php } ?>
</form>
</div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>