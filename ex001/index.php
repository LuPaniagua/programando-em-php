<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código</title>
</head>
<body>
    <p> Testando paráfrago <p>
    <?php 
    
    //Declarando uma variável
    $nome = "Luan";
    $sobrenome = "Paniagua";

    //A variável pode ser mudada
    $nome = "Luan Victor";

    //Quebra linha antes do próximo echo
    //echo "<br> <br>";

    //Declarando uma constante
    const time = "Botafogo";
    const timenovo = "Fluminense";

    echo "Seja bem-vindo $nome $sobrenome <br> <br> Meu time é " . time . " e " . timenovo;


    ?>

</body>
</html>