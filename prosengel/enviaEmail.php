<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            require_once('funcs/util.php');
            require("vendor/autoload.php");

            $nome = $_POST['nome'];
            $empresa = $_POST['empresa'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $site = $_POST['site'];
            $mensagem = $_POST['mensagem'];

            $from = new SendGrid\Email(null, $email);
            $subject = "Mensagem de Contato";
            $to = new SendGrid\Email(null, "prosengel@prosengel.com.br");
            $content = new SendGrid\Content("text/html", "Nova mensagem de contato<br><br>Nome: $nome<br> Empresa: $empresa<br> Telefone: $telefone<br> Site: $site<br> Email: $email <br> Mensagem: $mensagem");
            $mail = new SendGrid\Mail($from, $subject, $to, $content);
            
            // Necessário inserir a chave API
            $apiKey = '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';
            $sg = new \SendGrid($apiKey);

            $response = $sg->client->mail()->send()->post($mail);
            echo ($response) ? retorno('Mensagem Enviada Com Sucesso', true) : retorno('Erro ao enviar mensagem');
            
        ?>
    </body>
</html>
