<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 2</title>
</head>
<body>
    <?php
    class Nome {
        public $nome;
        public $idade;
        public function olhar() {
            echo "Meu Nome é $this->nome, tenho $this->idade anos, meu cabelo é $this->cabelo";
        }

    }



    class Caracteristicas extends Nome{
        public $cabelo;
       public function olhar(){

            parent::olhar();

            echo "meu cabelo é $this->cabelo";
        }

        
    }

    $meunome = new Nome();
    $meunome -> nome = "Vitor";
    $meunome->idade = "17";
    $meunome->cabelo = "cacheado";
    $meunome->olhar();

     
     ?>


    <?php
    interface forma{
        public function calcularea();
    
    }

    class circulo implements forma{
        public $raio;
    
    }


 
    
</body>
</html>