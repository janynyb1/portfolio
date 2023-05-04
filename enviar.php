<?php

$nome = addcslashes($_POST['nome']);
$telefone = addcslashes($_POST['telefone']);
$email = addcslashes($_POST['email']);

$para = "barbosajanyny@gmail.com";
$assunto = "Coleta de dados- Meu site";

$corpo =  "Nome: ".$nome."\n".""E-mail:" ".$email."\n"."Telefone: " .$telefone;
$cabeca = "From: nynebraga@gmail.com"."\n". "Reply-to:".$email."\n". "X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Mensagem enviada com sucesso!");
}else{
    echo("Houve um erro ao enviar a mensagem, verifique seus dados");
}
/ precisar ligar em um locahost senão a página fica fora do ar /
?>