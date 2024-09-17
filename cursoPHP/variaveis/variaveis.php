<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variavel em PHP</h1>
    <p>para declara uma variavel em php, primeiro inserimos simbolo do dolar $ e depois concatenamos com o nome escolhido para esta variavel</p>
    <p>Exemplo: $sobrenome =</p>
    <p>Após o simbolo de igual (=) inserimos o valor que a variavel ira receber</p>
    <p>1 Exemplo:</p>
    <?php
    $nome = "taiane";
    $sobrenome = "terassaka";

    echo "Muito prazer, $nome $sobrenome";
    ?>

    <p>2 Exemplo:</p>
    <p>Nesse exmplo, fica visivel que quando atribuimos dois valores diferentes para uma variavel, ela sempre exibira o ultimo valor atribuido, ela consegue fazer isso, pois por ser uma variavel, consegue alterar o valor recebidp</p>

    <?php
    $nome = "taiane";
    $sobrenome = "terassaka";
    $nome = "tainara";

    echo "Muito prazer, $nome $sobrenome";
    ?>

    <h2>Constante em PHP</h2>
    <p>para declara uma constante em php, ao inves de usarmos o  simbolo do dolar $, usaremos o const </p>
    <p>Exemplo: const PAIS =</p>
    <p>Após o simbolo de igual (=) inserimos o valor que a constante ira receber</p>
    <p>Diferentemente da variavel, para exibirmos uma constante, precisamos concatena-la</p>
    <p> 1 Exemplo:</p>
    <?php

    const PAIS = "Brasil";

    echo "Muito prazer, voce mora no " . PAIS;
    ?>

    <p>2 Exemplo:</p>
    <p>Nesse exmplo, fica visivel que quando atribuimos dois valores diferentes para uma constante, ela sempre exibira um erro,  pois por ser uma constante, ela nao consegue alterar o valor recebido </p>

    <?php
    const PAIS = "Brasil";
    const PAIS = "Suiça";

    echo "Muito prazer, voce mora no " . PAIS;
    ?>

    <h3>Regras para nomes de variaveis ou constante</h3>
    <p>Variaveis sempre começam com o simbolo $</p>
    <p>O segundo caracter pode ser letra ou o simbolo "_"</p>
    <p>A partir do terceiro caracter pode ser letra, numero ou "_"</p>
    <P>Aceita caracteres acentuados, apesar de nao ser recomendado</P>
    <P>O nome $this nao pode ser usado para variaveis</P>
    <p>A linguagem é case sensitive</p>

    <h4>Recomendacoes para dar nome</h4>
    <p>use camelCase para metodos, variaveis e atributos</p>
    <p>exemplo: $telefoneContatoFornecedor</p>
    <p>isso é, a cada nome nome dentro do nome da variavel, deve comecar com letra maiuscula, ao inves de espaçar</p>

    <p>use SKANE_CASE para constante</p>
    <p>exemplo: $telefone_contato_fornecedor</p>
    <p>exemplo: $TELEFONE_CONTATO_FORNECEDOR</p>
    <p>isso é, as letras devem ser todas maiusculas ou todas minusculas, e o espaco entre elas deve ser identificado com o simbolo "_"</p>


    <h4>Tipo primitivos escalares</h4>
    <p>exemplo que do tipo primitivo string: $sobrenome = "Silva"</p>
    <p>exemplo que do tipo primitivo int ou integer: $idade = 34;</p>
    <p>exemplo que do tipo primitivo float ou double: $peso = 86.5;</p>
    <p>exemplo que do tipo primitivo boolean: $casado = true;</p>
    
    <?php
    $sobrenome = "Silva";
    $idade = 34;
    $peso = 86.5;
    $casado = true;

    echo "O homem mais pesado da familia $sobrenome, pesando $peso kg, no entanto só tem $idade anos.";
    echo "Ele é casado? $casado";
    ?>

    <h4>Macetes</h4>

    <p>Tudo que tiver dentro de aspas duppla ou simples será do tipo  string</p>
    <p>Tudo numero que  nao tiver um ponto flutuante será do tipo  int ou integer</p>
    <p>Tudo numero que tiver  um ponto flutuante será do tipo float ou double</p>
    <p>Quando exibimos um boolen, quando temos true: exibe 1, quando temos false: exibe vazio</p>

    <h4>Funcoa var_dump()</h4>
    <p>A funcao var_dump() no php, servirá para tanto mostrar o valor da variavel, como tambem o tipo dela</p>
    <p>exemplo: $sobrenome = "Silva";</p>
    <?php
    $sobrenome = "Silva";
    var_dump($sobrenome)
    ?>

    <p>exemplo:  $idade = 34;</p>
    <?php
    $idade = 34;
    var_dump($idade)
    ?>

    <p>exemplo:$peso = 86.5;;</p>
    <?php
    $peso = 86.5;
    var_dump($peso)
    ?>

    <p>$casado = true;</p>
    <?php
    $casado = true;
    var_dump($casado )
    ?>

    <h4>Coerçao de tipo</h4>
    <p>Coerçao de tipo, basicamente é forcar um vvalor ser de um tipo </p>
    <p>Por exemplo, já vimos que tudo que esta dentro de aspas, é do tipo string</p>
    <p>$num = "950", nesse caso, 950 é uma string</p>
    <?php
    $num = "950";
    var_dump($num);
    ?>

    <p>No entanto, pense que queremos forcar que a variavel $num seja do tipo int</p>
    <p>Então, basta informarmarmos, entre parenteses, depois do "=", o tipo da variavel que queremos obter  </p>
    <p>Ou seja, basta escrevermos o seguinte: $num = (int) "950",</p>

    <?php
    $num = (int) "950";
    var_dump($num);
    ?>

    <h4>Manipulação de strings em PHP</h4>
    <p>Tipos de strings</p>
    <p>Double Quoted: string entre aspas duplas</p>
    <p>Simple Quoted: string entre aspas simples </p>
    <p>Simple Quoted x Double Quoted</p>
    <p>Simple Quoted: ela apenas exibe o conteudo exatamente como foi escrito</p>
    <p>exmplo com variaveis:</p>
    <p>$nome = "Taiane";</p>
    <p>echo 'Olá $nome';</p>
    <p>Exibirá:</p>

    <?php
    $nome = "Taiane";
    echo 'Olá $nome'; 
    ?>

    <p>exmplo com constantes:</p>
    <p>const ESTADO = "SP";</p>
    <p>echo 'Moro no ESTADO';</p>
    <p>Exibirá:</p>

    <?php
     const ESTADO_ex1 = "SP";
     echo 'Moro no ESTADO';
    ?>

    <p>Double Quoted: ela interpreta conteudo dentro das aspas duplas, para apenas depois de interprerta-lo, exibi-lo</p>
    <p>exmplo com variaveis:</p>
    <p>$nome = "Taiane";</p>
    <p>echo "Olá $nome";</p>
    <p>Exibirá:</p>
    <?php
    $nome = "Taiane";
    echo "Olá $nome";
    ?>
    <p>exmplo com constantes:</p>
    <p>const ESTADO = "SP";</p>
    <p>echo 'Moro no ESTADO';</p>
    <p>Exibirá:</p>

    <?php
     const ESTADO_ex2 = "SP";
     echo "Moro no ESTADO";
    ?>

    <h4>Interpolação de constantes</h4>
    <p>Interpolação, basicamente, é conseguir acessar o valor da variavel ou da constante</p>
    <p>Vimos lá em cima, que a simple Quoted, não consegue fazer a interpolação das informacoes dentro  de variaveis, nem de constantes</p>
    <p>No entanto, a Double Quoted, apesar de conseguir fazer a interpolação das informacoes dentro  de variaveis,  ela nao consegue fazer nas constantes</p>
    <p>Por isso, quando queremos exibir o valor de uma constante, usamos a concatenação (atraves do . )</p>
    <p>Isso faz com que tanto nas simple qaunto nas double Quoted, o valor da constante seja exibido</p>

    <p>exmplo: exibição de constante com Double Quoted</p>
    <p>const ESTADO_ex3 = "SP"</p>
    <p>echo "Moro no" . ESTADO_ex3;</p>
    <p>Exibirá:</p>
    <?php
    const ESTADO_ex3 = "SP";
    echo "Moro no" . ESTADO_ex3;
    ?>

    <p>exmplo: exibição de constante com Simple Quoted</p>
    <p>const ESTADO_ex4 = "SP"</p>
    <p>echo 'Moro no' . ESTADO_ex4;</p>
    <p>Exibirá:</p>
    <?php
    const ESTADO_ex4 = "SP";
    echo 'Moro no' . ESTADO_ex4;
    ?>

    <h4>Misturando Simple e Double Quoted</h4>
    <p>min 22min29 seg Manipulação de strings com PHP - @CursoemVideo de PHP - Gustavo Guanabara</p>








</body>
</html>