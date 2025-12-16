<?php 
require_once 'Pessoa.php';
class Tecnico extends Pessoa{
    private $registroPro;
    public function praticar(){
        echo "Praticando...";
        echo "Seu nível de conhecimento está: ";
            for($i=0; $i<=$this->praticar(); $i+=10){
            echo "|||||||||||||||||||||||||||||||||||||||||"; 
    }
  }
    public function getRegistroPro(){
        return $this->registroPro;
    }
    public function setRegistroPro($registroPro){
        $this->registroPro=$registroPro;
    }
  
}
?>