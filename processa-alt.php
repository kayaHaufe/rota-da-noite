<?php
date_default_timezone_set('America/Sao_Paulo');
include_once 'db/conection.php';
session_start();
$img = $_POST['img'];

$cd_evento = $_SESSION['cd_evento'];

if($img == "img")
{
    if(isset($_FILES['arquivo'])){
        $arquivo    = $_FILES['arquivo']['name'];

        //Pasta onde o arquivo vai ser salvo
        $_UP['pasta'] = 'img/eventos/';

        //Tamanho máximo do arquivo em Bytes
        $_UP['tamanho'] = 1024*1024*100; //5mb

        //Array com a extensões permitidas
        $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

        //Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'Não houve erro.';
        $_UP['erros'][1] = 'O tamanho do arquivo ultrapassou o limite.';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente.';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo.';

         //$_UP['erros']['Não houve erro.', 'O tamanho do arquivo ultrapassou o limite.', 'O arquivo ultrapassa o limite de tamanho especificado no HTML', 'O upload do arquivo foi feito parcialmente.', 'Não foi feito o upload do arquivo.'];

        //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
        if($_FILES['arquivo']['error'] != 0){

            $_SESSION['error'] = "<div class='alert alert-danger'> ". $_UP['erros'][$_FILES['arquivo']['error']] . "</div>";
            ?><script>history.back();</script>
            <?php
            exit;
        }

        //Faz a verificação da extensao do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if(array_search($extensao, $_UP['extensoes'])=== false){        
            $_SESSION['error'] = "<div class='alert alert-danger'>Imagem não foi cadastrada, extensão inválida.</div>";
            ?><script>history.back();</script>
            <?php
            exit;
        }

        //Faz a verificação do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
            $_SESSION['error'] = "<div class='alert alert-danger'>Arquivo muito grande.</div>";
            ?><script>history.back();</script>
            <?php
            exit;
        }

        //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
        else{
            $ext = strtolower(substr($_FILES['arquivo']['name'], -10));

            $nome_final = $cd_evento . "img" . $ext;
            }

        //Verificar se é possivel mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
            //Upload efetuado com sucesso
        }else{
            //Upload não efetuado com sucesso, exibe a mensagem
            $_SESSION['error'] = "<div class='alert alert-danger'>Imagem não foi cadastrada, tente novamente.</div>";
            ?><script>history.back();</script>
            <?php
            exit;
        }
    }
}

else if($img != "noimg")
{
    $nome_final = $img;
}

$nm_evento = ucfirst(trim($_POST['nm_evento']));
$organizador = ucfirst(trim($_POST['organizador']));
$dt_inicio = date("Y-m-d",strtotime(str_replace('/','-',$_POST['dt_inicio'])));
$dt_termino = date("Y-m-d",strtotime(str_replace('/','-',$_POST['dt_termino'])));
$hr_inicio = $_POST['hr_inicio'];
$hr_termino = $_POST['hr_termino'];
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$num = trim($_POST['num']);
$bairro = trim($_POST['bairro']);
$cidade = trim($_POST['cidade']);
$uf = strtoupper(trim($_POST['uf']));
$faixa = trim($_POST['faixa']);
$segmento = ucfirst(trim($_POST['segmento']));
$valor = trim($_POST['valor']);
$desc = ucfirst(trim($_POST['desc']));

$cd_evento = $_SESSION['cd_evento'];

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
			WHERE e.cd_evento = $cd_evento
	ORDER BY cd_evento DESC");

$result = mysqli_fetch_array($consulta);

// FK
$cd_segmento = $result['cd_segmento'];
$cd_uf = $result['cd_uf'];
$cd_cidade = $result['cd_cidade'];
$cd_bairro = $result['cd_bairro'];
$cd_logradouro = $result['cd_logradouro'];

// UPDATES
$sql2 = mysqli_query($link,
    "UPDATE tb_segmento SET nm_segmento = '$segmento'
    	WHERE cd_segmento = '$cd_segmento'");

$sql6 = mysqli_query($link,
    "UPDATE tb_uf SET sg_uf = '$uf'
    	WHERE cd_uf = '$cd_uf'");

$sql5 = mysqli_query($link,
    "UPDATE tb_cidade SET nm_cidade = '$cidade'
    	WHERE cd_cidade = '$cd_cidade'");

$sql4 = mysqli_query($link,
    "UPDATE tb_bairro SET nm_bairro = '$bairro'
    	WHERE cd_bairro = '$cd_bairro'");

$sql3 = mysqli_query($link,
    "UPDATE tb_logradouro SET nm_rua = '$rua',
    cd_numero = $num,
    cd_cep = '$cep'
    	WHERE cd_logradouro = '$cd_logradouro'");

if($valor == "unico")
{
    $unico = str_replace(',','.', str_replace('.','', trim($_POST['unico'])));

    $sql = mysqli_query($link,
    "UPDATE tb_evento SET nm_evento = '$nm_evento',
    nm_organizador = '$organizador',
    dt_inicio = '$dt_inicio',
    dt_termino = '$dt_termino',
    hr_inicio = '$hr_inicio',
    hr_termino = '$hr_termino',
    cd_faixa_etaria = '$faixa',
    ds_evento = '$desc',
    vl_unico = '$unico',
    vl_homem = null,
    vl_mulher = null,
    vl_vip = null,
    nm_imagem = '$nome_final'
    	WHERE cd_evento = '$cd_evento'");
}

else if($valor == "sexo")
{
    $homem = str_replace(',','.', str_replace('.','', trim($_POST['homem'])));
    $mulher = str_replace(',','.', str_replace('.','', trim($_POST['mulher'])));

    $sql = mysqli_query($link,
    "UPDATE tb_evento SET nm_evento = '$nm_evento',
    nm_organizador = '$organizador',
    dt_inicio = '$dt_inicio',
    dt_termino = '$dt_termino',
    hr_inicio = '$hr_inicio',
    hr_termino = '$hr_termino',
    cd_faixa_etaria = '$faixa',
    ds_evento = '$desc',
    vl_homem = '$homem',
    vl_mulher = '$mulher',
    vl_unico = null,
    vl_vip = null,
    nm_imagem = '$nome_final'
    	WHERE cd_evento = '$cd_evento'");
}

else if($valor == "vip")
{
    $homem = str_replace(',','.', str_replace('.','', trim($_POST['homem2'])));
    $mulher = str_replace(',','.', str_replace('.','', trim($_POST['mulher2'])));
    $vip = str_replace(',','.', str_replace('.','', trim($_POST['vip'])));

    $sql = mysqli_query($link,
    "UPDATE tb_evento SET nm_evento = '$nm_evento',
    nm_organizador = '$organizador',
    dt_inicio = '$dt_inicio',
    dt_termino = '$dt_termino',
    hr_inicio = '$hr_inicio',
    hr_termino = '$hr_termino',
    cd_faixa_etaria = '$faixa',
    ds_evento = '$desc',
    vl_homem = '$homem',
    vl_mulher = '$mulher',
    vl_vip = '$vip',
    vl_unico = null,
    nm_imagem = '$nome_final'
    	WHERE cd_evento = '$cd_evento'");
}

else
{
    $_SESSION['error'] = "<div class='alert alert-danger'>Preencha os campos corretamente.</div>";
    ?><script>history.back();</script>
            <?php
        exit;
}

if($sql && $sql2 && $sql3 && $sql4 && $sql5 && $sql6)
{
   $_SESSION['ok'] = "<div class='alert alert-success'>Evento alterado com sucesso!</div>";
        header("location: painel");
        exit;
}

else
{
    $_SESSION['error'] = "<div class='alert alert-danger'>Preencha os campos corretamente.</div>";
        header("location: painel");
        exit;
}

?>