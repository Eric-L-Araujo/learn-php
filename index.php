<?php
    echo "Hello, world!" . "<br>";

    $TARTARUGAS = "São legais";
    $SAPO = true;
    $HUMANO = 55;
    $BORBOLETA = 99.09;

    echo "<h1>Usando o gettype()</h1>" . "<p> O gettype serve para que possamos identificar qual tipo de variável é exibida na tela. O gettype é um tipo de variável global. </p>";
    
    echo "<h2>Essa variável é do tipo:</h2> ";
    echo gettype(value: $TARTARUGAS);

    echo "<h2>Essa variável é do tipo:</h2> ";
    echo gettype(value: $SAPO);

    echo "<h2>Essa variável é do tipo:</h2> ";
    echo gettype(value: $HUMANO);

    echo "<h2>Essa variável é do tipo:</h2> ";
    echo gettype(value: $BORBOLETA) . "<br>";


    echo "<h1>Usando o define() e o const</h1>";
    echo "<p>São variáveis que definem uma constante. Uma constante é um valor que não muda.</p>";

    define("nome","Eric <br>");
    echo nome;

    const nome01 = "bruno ";
    echo nome01;

    echo "<h1>Usando o var_dump()</h1>";
    echo "<p>A função var_dump serve para exibir informações sobre variáveis, como o seu tipo e valor. É uma função nativa do PHP que pode ser usada para depurar problemas. </p>";

    $a = array(123,"123",1.1,"Hello, World!",null);
    $b = array("a","b","c","d","e");

    var_dump($a);
    echo "<br>";
    var_dump($b);

    echo "<h1>Operadores aritméticos</h1>";
    $soma = 5 + 3;
    $subtracao = 10 - 50;
    $resto = 5 % 3;
    echo "O resultado da soma é " . $soma . "<br>";
    echo "O resultado da subtração é " . $subtracao . "<br>";
    echo "O resto da divisão é" . $resto;
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
</head>
<body>
            
    <div>
        <label for="name">Usuario:</label>
        <input type="text" id="name">
    </div>
    <div>
        <label for="password">Senha:</label>
        <input type="text" id="password">
    </div>

</body>
</html> -->

