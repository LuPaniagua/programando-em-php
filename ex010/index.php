<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1> Array </h1>
    <?php 
    //criação de array indexado
    $array = [10,20,30,40];

    //exibindo o array
    echo "Array original :";
    print_r($array); //print_r() exibe o array de forma legível

    echo "<br>";
    //adicionar um valor ao final do array
    $array[] = 50;
    
    //Exibindo o array atualizado
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br>";
    //Alterar o valor na posição 1 para 25
    $array[1] = 25;

    echo "Array após alterar o valor na posição 1 para 25:";
    print_r($array);

    echo "<br>";
    //Removendo o valor no índice 2

    echo "Array após remover o valor no índice 2 ";
    unset($array[2]);
    print_r($array);
    echo "<br>";
    //Reorganizando os índices do array
    $array = array_values($array);

    //Exibindo o array após remover o índice
    echo "Array após reorganizar os elementos ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenar o meu array de forma crescente
    sort($array);

    //Exibindo a array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);
    ?>
    
</body>
</html>