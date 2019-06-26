<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['message']);

$to = "suporte@ttitrevisan.com.br";
$subject = "Contato - Web Site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Email: ".$mensagem;

$header = "From:atendimento@ttitrevisan.com.br"."\r\n"
."Reply-To:".$email."\r\n"
."X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    echo ("Email enviado com sucesso!");
}else {
    echo ("Email não enviado!");
}


}
?>