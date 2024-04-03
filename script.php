<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['e-mail']);
    $telefone = addslashes($_POST['telefone']);

    $para = "cavalheiro.vitor@gmail.com";
    $assunto = "Formulario Contato Portfólio";

    $corpo = "Nome: ".$nome. "\n". "Email: ".$email. "\n". "Telefone:" .$telefone;

    $cabeca = "From portifolio@uva.com". "\n". "Reply-to: ".$email."\n"."X=mailer:PHP/".phpversion();
    
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso:");
    }else{
        echo("Houve um erro ao enviar o e-mail");
    }

?>  