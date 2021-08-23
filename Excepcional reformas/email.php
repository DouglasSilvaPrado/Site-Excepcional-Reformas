<?php

if (isset($_POST['email']) && !empty($_POST['email']))
{

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensage = addslashes($_POST['message']);


$to = "douglas13maneiro@gmail.com";
$subject = "Contato - Excepcional Reformas";
$body = "Nome: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensage;

$header = "From:douglassilvadaprado@gmail.com"."\r\n".
          "Replay-To:".$email."\r\n".
          "X=Mailer:PHP/".phpversion();

if (mail($to, $subject, $body, $header)){

    echo("Obrigada! Sua mensagem foi enviada.");

}else{

    echo("Incapaz de enviar sua mensagem. Corrija os erros e tente novamente.");
}

}
?>