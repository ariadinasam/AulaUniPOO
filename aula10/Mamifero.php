<?php 
require_once 'Animal.php';
class Mamifero extends Animal{
    protected $corPelo;
    public function emitirSom()
    {
        echo "som de Mamifero";
    }
    public function locomover()
    {
        echo "andando..";
    }
    public function alimentar()
    {
        echo "mamando";
    }
}
?>