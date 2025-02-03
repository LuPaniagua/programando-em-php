<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If, else e Elseif</title>
</head>
<body>
    <h1> Condicional If, else e Elseif </h1>
    <?php 
    //Condional IF
    $idade = 18;
    if (1 < 2){
        echo "O número 1 é menor <br>";
    }
    if($idade >= 18){
        echo "Você é maior de idade.";
    }

    echo "<br>";
    //Condiocional Else

    $a = 10;
    $b = 14;

    if($a == $b){
        echo "As variáveis são iguais!"; //se
    } else {
        echo "As variáveis são diferentes"; //senão
    }

    echo "<br>";
    //Condicional elseif
    $idadepessoa = 25;
    
    if ($idadepessoa < 13){
        echo "Você é uma criança.";
    } else if ($idadepessoa >= 13 && $idadepessoa <= 19){
        echo "Você é um adolescente.";
    } else if ($idadepessoa >= 20 && $idadepessoa <=59) {
        echo "Você é um adulto.";
    } else {
        echo "Você é um idoso.";
    }

    ?>
    
</body>
</html>