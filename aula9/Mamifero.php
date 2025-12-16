<?php 
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    public  function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "Som de mamífero";
    }
    public function getPelo(){
        return $this->corPelo;
    }
    public function setPelo($corPelo){
        $this->corPelo=$corPelo;
    }

    

    
}

?>