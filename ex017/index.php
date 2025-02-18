<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contructor e Destrutor</title>
</head>
<body>
   <?php 
   class Produto{
    //Atributos
    public $nome;
    public $preco;
    
    //Constructor: chamado quando o objeto é criado
    public function __construct($nome, $preco){
        $this->$nome = $nome;
        $this->$preco = $preco;
        echo "<br> Produto " . $nome . " criado com sucesso!<br> Ele custa: " . $preco;
    }

        //Destrutor: chamado quando o objeto é destruído
        public function __destruct(){
            echo "Produto '$this->nome' destruído! <br>";
        }
        
            //Método para exibir os detalhes do produto
            public function exibirDetalhes(){
                echo "Nome: $this->nome, Preço: R$ $this->preco<br>";
            }
                
            
   }
   
   //Criando um objeto
   $produto1 = new Produto(" Camiseta ", 39.90);//Constructo chamado aqui
   $produto2 = new Produto(" Tênis ", 300.00);
   $produto1->exibirDetalhes();
   $produto2->exibirDetalhes();

   //Mais uma classe Construct e Destruct 
   
   class conexaoBanco{
    private $conexao;

    //Constructor: simula abrir a conexão com o banco
    public function __construct(){
        $this->conexao = "Conexão ao banco de dados aberta!";
        echo $this->conexao . "<br>";
    }

    //Destrutor: simula ffechar a conexão com o banco
    public function __destruct(){
        //Tempo de espera (em segundos)
        sleep(2); //Espera 2 segundos antes de exibir a mensagem

        echo "Conexão ao banco de dados fechada!<br>";
    }
   }

   //Criando um objeto de conexão
   $conectado = new conexaoBanco(); //Construtor é chamado aqui

   unset($conexao); //Chama o destructor explicitamente
   ?>
</body>
</html>