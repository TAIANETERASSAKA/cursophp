<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" >
</head>
<body>
    <?php

    $numero1 = $_POST['num1'] ?? 0;
    $numero2 = $_POST['num2'] ?? 0;
    //conferindo se os numeros corretos foram pegos
    //echo "os numeros escolhidos foram $numero1 e $numero2"

    //o comando echo $_SERVER['PHP_SELF'] no action faz com que os dados ao inves de serem enviados para outro arquivos, sejam enviados para o php que esta dentro do mesmo arquivo de onde ele esta sendo adiquirido
    //os dados sao mandados para a mesma pagina onde os dados sao adquiridos
    
    
    ?>
    <header>
        <h1>Formulario retroalimentado</h1>
    </header>
    <section>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="num1">Primeiro número</label>
        <input id="num1ID" type="text" name="num1" placeholder="digite o primeiro numero" value="<?php echo $numero1?>">
        <label for="num2">Segundo número</label>
        <input id="num2ID" type="text" name="num2" placeholder="digite o segundo numero" value="<?php echo $numero2?>">
        <input type="submit" value="Somar"> </input>
    </form>
    </section>

    <section>
        <?php
        $soma = $numero1 + $numero2;
        echo "A soma entre oc valores $numero1 e $numero2 é $soma"
        ?>

    </section>


</body>
</html>