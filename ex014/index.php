<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1> Funções </h1>
    <?php 
    
    function saudacao(){
        echo "Olá, seja bem-vindo ao PHP!";
    }
    
    saudacao(); //Chamando a função

    echo "<br>";
    function somar($a, $b){
        return $a + $b;
    }

    $resultado = somar(5,3); //Chamando a função  e passando os argumentos
    echo "Resultado da soma: $resultado"; //Saída

    echo "<br>";
    $resultado1 = somar(8, -2);
    echo "Resultado da soma:" . $resultado1; //Saída

    echo "<br>";
    function saudacaoPersonalizada($nome = "Visitante"){
        echo "Olá $nome! Bem-vindo ao PHP!";
    }

    saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada("Carlos"); //Chama com argumento
    
    echo "<br>";
    function promocao($valor, $desconto){
        return $valor -($valor * $desconto);
    }
    $promocao = promocao(600, 0.20);
    echo "De 600 o valor da compra vai para: " .  $promocao;

    ?>
</body>
</html>