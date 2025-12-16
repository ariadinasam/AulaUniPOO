<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa{
    protected $especialidade;
    private $salario;
    public function receberAumento($aum){
        $this->salario+=$aum;
    }
    public function getEspec(){
        return $this->especialidade;
    }
    public function setEspec($especialidade){
        $this->especialidade=$especialidade;
    }
    public function getSalario(){   
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario=$salario;
    }
}


?>