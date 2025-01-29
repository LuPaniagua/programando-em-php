<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variaveis</title>
</head>
<body>
    <h2>
    <?php 
    //variavel do tipo string
    $sobrenome = "Paniagua";

    //variavel do tipo int
    $idade = 21;

    //variavel do tipo float
    $peso = 73.7;

    //variavel do tipo boolean (verdadeiro ou falso)

    $lilvinicin = false;

    echo "$sobrenome $idade $peso";

    //Metodo 1: Usando var_dump para exibir o valor booleano
    var_dump($lilvinicin); //Exibe 'bool(false)'

    //Método 2: Usando uma conversão booleana para string
    echo ($lilvinicin ? "Casado": "Não é casado"); //Exibe "não é casada"
    ?>
    </h2> 
</body>
</html>
