<?php
require_once 'Controlador.php'; 
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;
        public function __construct()
        {
           $this->volume = 50;
           $this->ligado = false;
           $this->tocando = false;
        }

        public function getVolume(){
            return $this->volume;
        }
        public function setVolume($volume){
            $this->volume=$volume;
        }
        public function getLigado(){
            return $this->ligado;
        }
        public function setLigado($ligado){
            $this->ligado=$ligado;
        }
        public function getTocando(){
            return $this->tocando;
        }
        public function setTocando($tocando){
            $this->tocando=$tocando;
        }
        public function abrirMenu()
        {
            echo "<p>Está ligado?</p>". ($this->getLigado())?"SIM":"NÃO";
            echo "<p>Está tocando?</p>". ($this->getTocando())?"SIM":"NÃO";
            echo "<p>Volume:</p>" . ($this->getVolume());
            for($i=0; $i<=$this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu()
        {
            echo "Fechando menu...";
        }
         public function ligar()
        {
             $this -> setLigado(true);
             echo "está ligado";
        }
        public function desligar()
        {
            $this -> setLigado(false);
            echo "desligando";
        }
        public function ligarMudo()
        {
            if($this->getLigado() && $this->getVolume()>0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo()
        {
             if($this->getLigado() && $this->getVolume()==0){
                $this->setVolume(50);
            }
        }
        public function maisVolume()
        {
            if ($this->getLigado()){
                $this->setVolume($this->getVolume()+5);
            }
        }
        public function menosVolume()
        {
             if ($this->getLigado()){
                $this->setVolume($this->getVolume()-5);
             }
        }
        public function pause()
        {
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
        public function play()
        {
            if($this->getLigado() && ! ($this->getTocando())){
                $this->setTocando(true);
            }
        }
    }
?>
