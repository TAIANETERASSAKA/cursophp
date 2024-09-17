<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <h2>Conferindo se os dados estao sendo pegos corretamente</h2>

    <?php
    //no PHP, existem variaveis globais, que já são definidas no proprio PHP//
    //As variaveis globais exsitente são:
    //$_POST , $_GET , $_REQUEST
    //$_POST retorna os dados do formulario cujo o metodo é post
    //$_GET retorna os dados do formulario cujo o metodo é GET
    //$_REQUEST retorna os dados do formulario cujo o metodo é post ou GET

    var_dump($_POST);
    //exibe apenas os dados do formulario cujo o metodo é post

    var_dump($_GET);
    //exibe apenas os dados do formulario cujo o metodo é get
    ?>

    <h3>Usando os dados pegos</h3>
    <?php

    //para acessar apenas um elemento do formulario voce faz
    //se o dado estiver em um formulario cujo o metodo é POST
    //$nomeDaVariavelEscolhidaParaReceberValorDoElemento = $_POST["nomeDoElementoNoForm"]
    //se o dado estiver em um formulario cujo o metodo é GET
    //$nomeDaVariavelEscolhidaParaReceberValorDoElemento = $_GET["nomeDoElementoNoForm"]
   
    $nomeExibido =      $_POST["nameUser"] ?? "sem nome";  // esse ?? atribui um valor padrao a variavel, caso ela venha vazia, evitando um erro
    $emailExibido =     $_POST["emailUser"] ?? "sem sobrenome";
    $telefoneExibido =  $_GET["telefoneUser"] ?? "sem telefone";

    echo "Olá $nomeExibido, estamos felizes em ter vocde conosco. Foi enviado um email de confirmação para o endereço $emailExibido, por favor, verifique sua caixa de entrada para confirmação do email cadastrado";
    echo "Após isso, enviaremos um codigo de segurança no numero $telefoneExibido";    
    ?>

</body>
</html>