<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="../css/produtos.css">
   <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <header  class="cabecalho">
        <a name = "carbom" href ="">GENERICOS</a>
        <a href ="#">CONTROLADOS</a>
        <a href ="#">PRODUTOS DE HIGIENE</a>
        <a href ="#">MASCARAS & LUVAS</a>
        <a href ="#">REQUISIÇÃO DE NOVOS</a>
        <a href ="../index.html">VOLTAR</a>
    </header>
    <main class="conteudo">

    <p>  
    <?php 
    for ($i = 0; $i < 10; $i++){
        include("./genericos.html");
    }
    
    ?>
    </p>
    </main>

    <footer class="rodape">
         <p>Memorial drogaria 	&copy; <?= date('M Y'); ?></p>
    </footer>
</body>
</html>