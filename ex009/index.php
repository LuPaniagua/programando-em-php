<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch</title>
</head>
<body>
    <h1> Condicional Switch </h1>
    <?php 
    //Condicional Switch
    $fruta = "Maçã";

    switch ($fruta) {
        case "Banana" : 
            echo "A fruta é uma banana!";
            break;
            case "Maçã" :
                echo "A fruta é uma maçã!";
                break;
                case "Laranja":
                    echo "A fruta é uma laranja!";
                    break;
                    case "Tangerina":
                        echo "A fruta é uma tangerina!";
                        break;
                        default:
                        echo "Fruta desconhecida.";
                        break;

                
    }
    
    echo "<br>";
    $cor = "verde";

    switch ($cor){
        case "vermelho":
        case "laranja":
            echo "A cor é quente!";
            break;
            case "azul":
            case "verde":
                echo "A cor é fria!";
                break;
                default:
                echo "cor desconhecida";
                break;
    }

    echo "<br>";

    $numero = null;
    
    switch (true){ 
        case (is_numeric($numero) && $numero <5):
            echo "O número é menor que 5.";
            break; 
            case (is_numeric($numero) && $numero == 5):
                echo "O número é igual que 5.";
                break;
                case (is_numeric ($numero) && $numero > 5):
                    echo "O número é maior que 5.";
                    break;
                    default:
                        echo "Número não identificado!";
                    break;


    }

    ?>
</body>
</html>