<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $destino = "studioshapi@gmail.com";
    $assunto = "Contato - Hapi Site";

    $corpo = "Nome do Cliente: ".$nome."\n"."E-mail do Cliente: ".$email."\n"."Telefone do Cliente: ".$telefone."\n"."Mensagem do Cliente: ".$mensagem;

    $head = "From: guilhermebolsoni2004@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$head)){
        echo("Sua mensagem foi enviada com sucesso!");
    }else{
        echo("Houve um erro ao enviar sua mensagem!");
    }

?>