<?php 
require_once 'Animal.php';
class Ave extends Animal{
private $corPena;
    public function locomover(){
        echo "Voando";
    }
    public function alimentar(){
        echo "Comendo frutas";
    }
    public function emitirSom(){
        echo "Som de ave";
    }
    public function fazerNinho(){
        echo "Ninho construído";
    }
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($corPena){
        $this->corPena=$corPena;
    }
}
?>