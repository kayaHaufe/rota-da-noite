<?php
date_default_timezone_set('America/Sao_Paulo');
include_once 'db/conection.php';
session_start();

if(empty($_SESSION['user']))
{
    header("location: cadastro");
    exit;
}

$img = $_POST['img'];

if($img == "img")
{
    $cd_evento = mysqli_query($link,
    "SELECT MAX(cd_evento) + 1 FROM tb_evento");
    $row = mysqli_fetch_row($cd_evento);
    $cd_evento = $row[0];

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

        //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
        if($_FILES['arquivo']['error'] != 0){

            $_SESSION['error'] = "<div class='alert alert-danger'> ". $_UP['erros'][$_FILES['arquivo']['error']] . "</div>";
            header("location: cad-eventos");
            exit;
        }

        //Faz a verificação da extensao do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if(array_search($extensao, $_UP['extensoes'])=== false){        
            $_SESSION['error'] = "<div class='alert alert-danger'>Imagem não foi cadastrada, extensão inválida.</div>";
                header("location: cad-eventos");
                exit;
        }

        //Faz a verificação do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
            $_SESSION['error'] = "<div class='alert alert-danger'>Arquivo muito grande.</div>";
            header("location: cad-eventos");
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
            header("location: cad-eventos");
            exit;
        }
    }
}

// CAD-EVENTO
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

if($dt_inicio > $dt_termino)
{
    $_SESSION['error'] = "<div class='alert alert-danger'>A data de início não pode ser após a data de término.</div>";
    header("location: cad-eventos");
    exit;  
}

// CD's
$cd_cliente = $_SESSION['cd_cliente'];

$cd_uf = mysqli_query($link,
    "SELECT MAX(cd_uf) + 1 FROM tb_uf");
$row = mysqli_fetch_row($cd_uf);
$cd_uf = $row[0];

$cd_cidade = mysqli_query($link,
    "SELECT MAX(cd_cidade) + 1 FROM tb_cidade");
$row = mysqli_fetch_row($cd_cidade);
$cd_cidade = $row[0];

$cd_bairro = mysqli_query($link,
    "SELECT MAX(cd_bairro) + 1 FROM tb_bairro");
$row = mysqli_fetch_row($cd_bairro);
$cd_bairro = $row[0];

$cd_logradouro = mysqli_query($link,
    "SELECT MAX(cd_logradouro) + 1 FROM tb_logradouro");
$row = mysqli_fetch_row($cd_logradouro);
$cd_logradouro = $row[0];

$cd_segmento = mysqli_query($link,
    "SELECT MAX(cd_segmento) + 1 FROM tb_segmento");
$row = mysqli_fetch_row($cd_segmento);
$cd_segmento = $row[0];

$cd_evento = mysqli_query($link,
    "SELECT MAX(cd_evento) + 1 FROM tb_evento");
$row = mysqli_fetch_row($cd_evento);
$cd_evento = $row[0];

// CONSULTA
$sql2 = mysqli_query($link,
    "INSERT INTO tb_segmento
    (cd_segmento, nm_segmento)
    VALUES
    ('$cd_segmento', '$segmento')");

$sql3 = mysqli_query($link,
    "INSERT INTO tb_uf
    (cd_uf, sg_uf)
    VALUES
    ('$cd_uf', '$uf')");

$sql4 = mysqli_query($link,
    "INSERT INTO tb_cidade
    (cd_cidade, nm_cidade, cd_uf)
    VALUES
    ('$cd_cidade', '$cidade', '$cd_uf')");

$sql5 = mysqli_query($link,
    "INSERT INTO tb_bairro
    (cd_bairro, nm_bairro, cd_cidade)
    VALUES
    ('$cd_bairro', '$bairro', '$cd_cidade')");

$sql6 = mysqli_query($link,
    "INSERT INTO tb_logradouro
    (cd_logradouro, nm_rua, cd_numero, cd_cep, cd_bairro)
    VALUES
    ('$cd_logradouro', '$rua', '$num', '$cep', '$cd_bairro')");

if($valor == "gratuito")
{
    $sql = mysqli_query($link,
    "INSERT INTO tb_evento
    (cd_evento, nm_evento, nm_organizador, dt_inicio, dt_termino, hr_inicio, hr_termino, cd_faixa_etaria, ds_evento, cd_logradouro, cd_segmento, cd_cliente, ds_tipo_valor, vl_unico, nm_imagem, cd_status)
    VALUES
    ('$cd_evento', '$nm_evento', '$organizador', '$dt_inicio', '$dt_termino', '$hr_inicio', '$hr_termino', '$faixa', '$desc', '$cd_logradouro', '$cd_segmento', '$cd_cliente', '$valor', 0, '$nome_final', 'pendente')");

        $email_remetente = "empresarotadanoite@gmail.com";
        $email_destinatario = "empresarotadanoite@gmail.com";
        $email_reply = "$email_forgot";
        $email_assunto = "Contato formmail";

        $email_conteudo = "Email: $email_forgot \n" . "Evento cadastrado com sucesso! \n" . "Parabéns, seu evento foi cadastrado com êxito em nosso website, temos o privilégio de agradecer sua prioridade e confiança em nós, não se arrependerá.";

        $email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
}

else if($valor == "unico")
{
    $unico = str_replace(',','.', str_replace('.','', trim($_POST['unico'])));

    $sql = mysqli_query($link,
    "INSERT INTO tb_evento
    (cd_evento, nm_evento, nm_organizador, dt_inicio, dt_termino, hr_inicio, hr_termino, cd_faixa_etaria, ds_evento, cd_logradouro, cd_segmento, cd_cliente, ds_tipo_valor, vl_unico, nm_imagem, cd_status)
    VALUES
    ('$cd_evento', '$nm_evento', '$organizador', '$dt_inicio', '$dt_termino', '$hr_inicio', '$hr_termino', '$faixa', '$desc', '$cd_logradouro', '$cd_segmento', '$cd_cliente', '$valor', '$unico', '$nome_final', 'pendente')");

        $email_remetente = "empresarotadanoite@gmail.com";
        $email_destinatario = "empresarotadanoite@gmail.com";
        $email_reply = "$email_forgot";
        $email_assunto = "Contato formmail";

        $email_conteudo = "Email: $email_forgot \n" . "Evento cadastrado com sucesso! \n" . "Parabéns, seu evento foi cadastrado com êxito em nosso website, temos o privilégio de agradecer sua prioridade e confiança em nós, não se arrependerá.";

        $email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
}

else if($valor == "sexo")
{
    $homem = str_replace(',','.', str_replace('.','', trim($_POST['homem'])));
    $mulher = str_replace(',','.', str_replace('.','', trim($_POST['mulher'])));
    
    $sql = mysqli_query($link,
    "INSERT INTO tb_evento
    (cd_evento, nm_evento, nm_organizador, dt_inicio, dt_termino, hr_inicio, hr_termino, cd_faixa_etaria, ds_evento, cd_logradouro, cd_segmento, cd_cliente, ds_tipo_valor, vl_homem, vl_mulher, nm_imagem, cd_status)
    VALUES
    ('$cd_evento', '$nm_evento', '$organizador', '$dt_inicio', '$dt_termino', '$hr_inicio', '$hr_termino', '$faixa', '$desc', '$cd_logradouro', '$cd_segmento', '$cd_cliente', '$valor', '$homem', '$mulher', '$nome_final', 'pendente')");

    $email_remetente = "empresarotadanoite@gmail.com";
        $email_destinatario = "empresarotadanoite@gmail.com";
        $email_reply = "$email_forgot";
        $email_assunto = "Contato formmail";

        $email_conteudo = "Email: $email_forgot \n" . "Evento cadastrado com sucesso! \n" . "Parabéns, seu evento foi cadastrado com êxito em nosso website, temos o privilégio de agradecer sua prioridade e confiança em nós, não se arrependerá.";

        $email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
}

else if($valor == "vip")
{
    $homem = str_replace(',','.', str_replace('.','', trim($_POST['homem2'])));
    $mulher = str_replace(',','.', str_replace('.','', trim($_POST['mulher2'])));
    $vip = str_replace(',','.', str_replace('.','', trim($_POST['vip'])));

    $sql = mysqli_query($link,
    "INSERT INTO tb_evento
    (cd_evento, nm_evento, nm_organizador, dt_inicio, dt_termino, hr_inicio, hr_termino, cd_faixa_etaria, ds_evento, cd_logradouro, cd_segmento, cd_cliente, ds_tipo_valor, vl_homem, vl_mulher, vl_vip, nm_imagem, cd_status)
    VALUES
    ('$cd_evento', '$nm_evento', '$organizador', '$dt_inicio', '$dt_termino', '$hr_inicio', '$hr_termino', '$faixa', '$desc', '$cd_logradouro', '$cd_segmento', '$cd_cliente', '$valor', '$homem', '$mulher', '$vip', '$nome_final', 'pendente')");

        $email_remetente = "empresarotadanoite@gmail.com";
        $email_destinatario = "empresarotadanoite@gmail.com";
        $email_reply = "$email_forgot";
        $email_assunto = "Contato formmail";

        $email_conteudo = "Email: $email_forgot \n" . "Evento cadastrado com sucesso! \n" . "Parabéns, seu evento foi cadastrado com êxito em nosso website, temos o privilégio de agradecer sua prioridade e confiança em nós, não se arrependerá.";

        $email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
}

else
{
    $_SESSION['error'] = "<div class='alert alert-danger'>Ocorreu um problema, tente novamente.</div>";
    header("location: cad-eventos");
    exit;  
}

if($sql && $sql2 && $sql3 && $sql4 && $sql5 && $sql6)
{
    $_SESSION['ok'] = true;
    header("location: eventos");
    exit;  
}

else
{
    $_SESSION['error'] = "<div class='alert alert-danger'>Preencha os campos corretamente.</div>";
    header("location: cad-eventos");
    exit;  
}

?>