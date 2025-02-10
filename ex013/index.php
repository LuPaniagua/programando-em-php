<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For e Foreach</title>
</head>
<body>
    <h1> Laço For e Foreach </h1>
    <?php 
    //For
    echo "<br> For <br>";
    for ($i = 1; $i <= 5; $i++){
        echo $i. "<br>"; //Imprime o valor $i e pula para a próxima linha
    }
    echo "<br>";
    for ($a =1; $a <= 5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";
    }

    echo "<br> Foreach <br>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    foreach($frutas as $fruta){
        echo $fruta . "<br>"; //Imprime o nome de casa fruta
    }

    echo "<br>";
    $idade = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 22
    ];

    foreach($idade as $nome => $idades){
        echo "$nome tem $idades anos. <br>"; //exibe nome e idade
    }
    ?>
</body>
</html>