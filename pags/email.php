<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset='UTF-8'>
        <title>Envio</title>
</head>
<?php


//Se o email foi preenchido e e se ele for diferente de vazio passa pra proxima

$nome        = addslashes($_POST['name']);
$email       = addslashes($_POST['email']);
$mensagem    = addslashes($_POST['mensage']);
$id          = addslashes(($_POST['id']));

$email_destino = "memorialDrogaria@gmail.com.br"; 
$assunto       = "Atendimento inciado";


$body = "<h2>E-MAIL CORPORATIVO DMR-SP</h2>".
"<p>Nome: ".     $nome.      "\r\n<br></p>".
"<p>E-mail: ".   $email.     "\r\n<br></p>". 
"<p>Mensagem: ".   $mensagem.  "\r\n<br></p>".
"<p>Id: ".       $id.        "\r\n<br></p>"."Responder:".$email."\r\n";


$agradecimento = "<h1>Obrigado, ".$nome." ficamos feliz em atender você!</h1>";
$header = "From: julio@doutor.com.br"."\r\n";  

if(!empty($nome) && !empty($email)){
    echo "
    <body>
        <style>
        body{display: flex;flex-direction: column;margin-left: 15%;margin-right: 15%;
            background-color: #282c34;color: black;font-family: Helvetica; text-align: center;}
            h1{font-size: medium;font-family: Helvetica;}
            p{font-size: 12px;font-family: Helvetica}
            .principal{padding: 43px; margin-bottom: 20px; border-radius: 68px; background-color: aquamarine; margin-top: 82px;}
            .scopo{padding: 20px; border-radius: 10px; background-color: aqua; }
            .agradecimento{padding: 18px; border-radius: 10px; background-color: purple; font-size:19px; color: white; }
            p{font-size: 20px;}
        </style>
    
        <div class='principal'>
            E-mail enviado com sucesso!
        </div>
    
        <div class='scopo'>
            <?php echo $body
        </div>
        
        <div class='agradecimento'>
            <?php echo $agradecimento 
        </div>
    </body>
            
    </html>";
}else{
    echo "<body>
    <style>
        body{display: flex;flex-direction: column;margin-left: 15%;margin-right: 15%;
            background-color: #ff0000;color: rgb(255, 255, 255);font-family: Helvetica; margin: 0 auto; text-align: center;}
        h1{font-size: 35px;font-family: Helvetica;}
        p{font-size: 12px;font-family: Helvetica}
        .principal{padding: 80px; margin-bottom: 20px; border-radius: 68px; background-color: crimson; margin-top: 82px;}
        p{font-size: 20px;}
    </style>

    <div class='principal'>
        <h1>ERRO: E-MAIL NÃO ENVIADO</h1><br>
        <h1>VERIFIQUE SE COLOCOU SUAS INFORMAÇÕES CORRETAS<br></h1>
        <h2>E-MAIL E NOME É DE CARATER OBRIGATÓRIO<br><br></h2>

        <P>Caso não esteja conseguindo, procure nossa 
        <br>unidade mais próxima</P>
    </div>

   
</body>
</html>";
    
}

?>

