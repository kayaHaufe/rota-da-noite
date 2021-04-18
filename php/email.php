<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$email_remetente = "empresarotadanoite@gmail.com";

$email_destinatario = "empresarotadanoite@gmail.com";
$email_reply = "$email";
$email_assunto = "Contato formmail";

$email_conteudo = "Nome: $nome \n" . "Email: $email \n" . "Assunto: $assunto \n" . "Mensagem: $mensagem \n" ;

$email_headers = implode("\n", array ("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

if(mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))
{
	session_start();
    $_SESSION['ok'] = "<div class='alert alert-success'>E-mail enviado com sucesso!.</div>";
    header("location: ../contato.php");
    exit;
}

else
{
	session_start();
    $_SESSION['error'] = "<div class='alert alert-danger'>Falha no envio, tente novamente.</div>";
        header("location: ../contato.php");
        exit;
}

?>