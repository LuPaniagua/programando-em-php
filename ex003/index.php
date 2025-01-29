<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comemtários e Variavel dentro da variavel</title>
</head>
<body>
    <h2> Variável dentro da outra variável</h2>
    <?php
    //para comentários de uma linha eu uso barra e barra
    /*
    eu uso
    para comentar
    várias linhas
    ao mesmo tempo
    */
    $nome = "Luan";
    $sobrenome = "Paniagua";

    //A variavel abaixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobre nome é $sobrenome";

    echo "$frase";

    ?>
    
</body>
</html>