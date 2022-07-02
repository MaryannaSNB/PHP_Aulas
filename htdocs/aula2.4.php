<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Aula 2.4</title>
</head>

<body>

    <h1>Tipos</h1>
    <pre>
    <?php

    // Tipo Inteiro:
    $num1 = 11;
    var_dump($num1);
    echo '<br>';

    // Tipo flutuante:
    $num2 = 11.99;
    var_dump($num2);
    echo '<br>';

    // Tipo booleano:
    $bool = true;
    var_dump($bool);
    echo '<br>';


    //Tipo caracter:
    $string = 'Joca da Silva';
    var_dump($string);
    echo '<br>';

    //Tipo Nulo:
    $none = null;
    var_dump($none);
    echo '<br>';

    //Tipo Array:
    $arr = array('casa', 'carro', 'bicicleta', 'pastel', 14, 10.9, false);
    var_dump($arr);
    echo '<br>';

    //Tipo array com chaves:
    $arr2 = array('objeto' => 'casa', 'veiculo' => 'carro', 'alternativo' => 'bicicleta');
    var_dump($arr2);

    // Tipo objeto:

    // Tipo objeto:
    class Treco
    {
        public $nome;
        public $tipo;

        public function teste()
        {
            return 'Olá galera!';
        }
    }
    $obj = new Treco();
    $obj->nome = 'Joca Silva';
    $obj->tipo = 'estudante';
    $obj->teste();
    var_dump($obj);
    echo '<br>';
    ?>
</pre>

</body>

</html>